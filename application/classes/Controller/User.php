<?php
class Controller_User extends Controller_Common
{
	protected $messagesTexts = array(
		'USER_WITH_CURRENT_LOGIN_ALREADY_EXISTS' => 'Пользователь с таким логином уже существует. Выберите, пожалуйста, другой.',
		'USER_SUCCESS_ADDED' => 'Пользователь был успешно добавлен. Теперь вы можете войти',
		'USER_SUCCESS_AUTH' => 'Вы успешно вошли в свой аккаунт',
		'USER_FAIL_AUTH' => 'Не правильный логин или пароль',
	);
	
	public function action_auth()
	{
		if($this->request->post('login'))
		{
			$auth = $this->user->auth($this->request->post('login'), $this->request->post('pwd'));
			$this->addMessage($this->messagesTexts[($auth ? 'USER_SUCCESS_AUTH' : 'USER_FAIL_AUTH')]);
		}
		
		$this->showTemplate('User/Auth', array(
			'isPageDefaultTemplate' => TRUE,
			'isSuccessfull' => (isset($auth) ? $auth : FALSE),
			'isTemplateMessagesDisplay' => TRUE,
			'messages' => $this->getMessages()
		));
		
		
		return 1;
	}
	
	
	public function action_signup()
	{	
		if($this->request->post('login'))
		{
			
			$post = Validation::factory($_POST);
			
			$errors = $post	-> rule('login', 'not_empty')
					-> rule('login', 'min_length', array(':value', 2))
					-> rule('login', 'max_length', array(':value', 30))
					-> check()
					;
			
			if($post->errors())
			{
				$this->addMessage('Не правильная длина логина');
			}
			else
			{
				$add = $this->user->add($this->request->post('login'), $this->request->post('pwd'));
				if($add)
					$this->addMessage($this->messagesTexts['USER_SUCCESS_ADDED']);
				else
					$this->addMessage($this->user->getErrors(),0,1);
			}
		}
		
		$this->showTemplate('User/SignUp', array(
			'isPageDefaultTemplate' => TRUE,
			'isTemplateMessagesDisplay' => TRUE,
			'messages' => $this->getMessages(),
			'isSuccessfull' => (isset($add) ? $add : FALSE)
		));

		return 1;
	}
	
	public function action_logout()
	{
		$this->user->logout();
		HTTP::redirect('/');
		return ;
	}
}
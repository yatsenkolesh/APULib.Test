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
			HTTP::redirect(Model_Tools::getUrl('tracks', 'Index'));
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
			
			//Example of use Validation
			
			$post = Validation::factory($_POST);
			
			$post	-> rule('login', 'not_empty')
					-> rule('login', 'min_length', array(':value', 2))
					-> rule('login', 'max_length', array(':value', 30))
					-> check()
					;
			$errors = $post->errors();	
			
			$errorsToDisplay = array();
			
			foreach($errors as $key => $field)
			{
				$errorsToDisplay[] = $key . '_' .$field[0];
			}
						
			if($errors)
			{
				$this->addMessage($errorsToDisplay);
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
	
	public function action_bookmarks()
	{
		if(!Model_User::isLogged())
			return HTTP::redirect('/');
		
		$this->showTemplate('User/Bookmarks', array(
			'isPageDefaultTemplate' => TRUE,
			'tracks' => Model_Bookmarks::instance()->get()
		));
		
		return ;
	}
	
	public function action_logout()
	{
		$this->user->logout();
		HTTP::redirect('/');
		return ;
	}
}
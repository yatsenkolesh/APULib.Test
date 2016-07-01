<?php
class Model_User extends Model_ORM
{
	public static $user = 0;
		
	protected $structureDB = array(
		'id' => 'id',
		'login' => 'login',
		'pwd' => 'password',
	);
	
	const DB_COLLECTION = 'users';
	
	const LEFT_SALT = 'to2s2aste2r123456';
	const RIGHT_SALT = '$$@#@!trasher2281337@@@@@!@#$@!@!$!@$%^&^%$3';
	const SESSION_LOGIN_KEY = 'login';
	
	private $errors = array();
	
	private $textErrors = array(
		'LOGIN_NOT_UNIQUE' => 'USER_WITH_CURRENT_LOGIN_ALREADY_EXISTS',
	);
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public static function instance()
	{
		if(!self::$user)
		{
			self::$user = new Model_User();
			return self::$user;
		}
		else
			return self::$user;
	}
	
	/**
	* Find user with current login.
	* @param login string
	* @return array
	*/
	public function getUserByLogin($login)
	{
		return $this->mangoDB->fetchArray($this->mangoDB->find(self::DB_COLLECTION, array(
			$this->getDBField('login') => $login
		)), 'single');	
	}
	
	//Нужно было ошибки в отдельный класс вынести(
	private function addError($errText)
	{
		$this->errors [] = $errText;
		return ;
	}
	
	public function getErrors()
	{
		return $this->errors;
	}
	
	public function getErrorText($errorCode)
	{
		return Arr::get($this->textErrors, $errorCode, 0);
	}
	
	
	/**
	* Adds user with current login and password
	* @param login string
	* @param pwd string password for user
	* @return true	if the user was added, false - if there were have when added errors
	*/
	public function add($login, $pwd)
	{
		if(sizeof($this->getUserByLogin($login)))
		{
			$this->addError($this->getErrorText('LOGIN_NOT_UNIQUE'));
			return FALSE;
		}

		$this->mangoDB->insert(self::DB_COLLECTION, array(
			'id' => MangoDB::AUTO_INCREMENT,
			'login' => $login,
			'password' => $this->hash($pwd)
			)
		);
		
		return TRUE;
	}
	
	/**
	* Find user with current password and login
	* @param login string
	* @param pwd string
	* @return bool
	*/
	private function checkUserPwd($login, $pwd)
	{
		$user = $this->getUserByLogin($login);
		if(!sizeof($user))
			return FALSE;
		$pwd = $this->hash($pwd);
		return $user[$this->getDBField('pwd')] == $pwd;
	}
	
	private function createSession($login)
	{
		Session::instance()->set(self::SESSION_LOGIN_KEY, $login);
		return 1;
	}
	
	public static function isLogged()
	{
		return Session::instance()->get(self::SESSION_LOGIN_KEY);
	}
	
	public function logout()
	{
		Session::instance()->delete(self::SESSION_LOGIN_KEY);
		return 1;
	}
	
	/**
	* Find user with current password and login and create session, if it have exists
	* @param login string
	* @param pwd string
	* @return bool
	*/
	public function auth($login, $pwd)
	{
		$check = $this->checkUserPwd($login, $pwd);
		if($check)
			return $this->createSession($login);
		return 0;
	}
	
	private function hash($pwd)
	{
		return md5(self::LEFT_SALT. sha1($pwd). self::RIGHT_SALT);
	}
}
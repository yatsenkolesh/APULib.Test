<?php
abstract class Controller_Common extends Controller
{
	const DEFAULT_HEADER_TEMPLATE = 'Header';
	const DEFAULT_FOOTER_TEMPLATE = 'Footer';
	const ERRORS_TEMPLATE = 'Messages';
	
	private $data = array();
	private $messages = array();
	
	protected $user;
	protected $mangodb;
	protected $session;
	
	function __construct(Request $request, Response $response)
	{
		parent::__construct($request, $response);
		
		$this->__init();
		
		return ;
	}
	
	private function __init()
	{
		$this->user = Model_User::instance();
		$this->mangodb = MangoDB::instance();
		$this->session = Session::instance();
		return ;
	}
	
	/**
	* get error from code
	* @param	code	string
	* @return string
	*/
	protected function getError($code)
	{
		return Arr::get($this->errors, $code, 0);
	}
	
	protected function addMessage($message, $code = 0, $getFromErrors = 0)
	{	
		if($getFromErrors && is_array($message))
		{
			foreach($message as $messageCode)
			{
				$message = $this->messagesTexts[$messageCode];
				$this->messages[] = compact('message', 'code');
			}
			return 1;
		}
		$this->messages[] = compact('message', 'code');
		return 1;
	}
	
	protected function getMessages()
	{
		return $this->messages;
	}
	
	/**
	* It shows template.
	* @param	templateName	array|string
	* @param 	data	array
	* @return NULL
	*/
	protected function showTemplate($templateName, array $data = array())
	{
		if(isset($data['isPageDefaultTemplate']) && $data['isPageDefaultTemplate'])
		{
			if(!is_array($templateName))
			{
				$templateName = array(
					self::DEFAULT_HEADER_TEMPLATE,
					(isset($data['isTemplateMessagesDisplay']) && $data['isTemplateMessagesDisplay'] ? self::ERRORS_TEMPLATE : FALSE),
					$templateName,
					self::DEFAULT_FOOTER_TEMPLATE);
			}
			unset($data['isPageDefaultTemplate']);
		}
		
		
		$data =  sizeof($data) ? $data : $this->data;
		
		if(is_array($templateName))
		{
			$body = '';
			
			foreach($templateName as $templateDisplayName)
			{
				if(!$templateDisplayName)
					continue;
				$body .= View::factory($templateDisplayName, $data);
			}
			
			$this->response->body($body);
			
			return ;
		}
		
		$this->response->body(View::factory($templateName, $data));	
		return ;
	}
	
	private function setVar($var, $val)
	{
		$this->data[$var] = $val;
		return 1;
	}
}
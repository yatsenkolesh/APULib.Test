<?php
class Model_Comments extends Model_ORM
{
	const DB_COLLECTION = 'comments';
	
	protected $structureDB = array(
		'id' => 'id',
		'userID' => 'userID',
		'message' => 'message',
		'objectID' => 'objectID',
		'date' => 'date'
	);
	
	public $objectID = 0;
	
	function __construct($objectID, $prefix)
	{
		$this->objectID = $prefix. $objectID;
		
		parent::__construct();
		
		return ;
	}
	
	/**
	* Add comment to object with $this->objectID
	* @param	message		string
	* @param 	userID	int
	* @return true 
	*/
	public function add($message, $userID = 0)
	{
		if(!$userID && !Model_User::isLogged())
			return 0;
		
		$userID = $userID ? $userID :  Model_User::instance()->getCurrentUserId();
		
		if(empty($message))
			return 0;
		
		$this->mangoDB->insert(self::DB_COLLECTION, array(
			'id' => MangoDB::AUTO_INCREMENT,
			'user_id' => $userID,
			'message' => $message,
			'objectID' => $this->objectID,
			'date' => $this->getDate(),
		));
		
		return 1;
	}
	
	public function getComments()
	{
		return $this->mangoDB->find(self::DB_COLLECTION, array(
			$this->getDBField('objectID') => $this->objectID
		));
	}
	
	private function getDate()
	{
		return time();
	}
}
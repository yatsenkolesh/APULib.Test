<?php
class Model_Bookmarks extends Model_ORM
{
	const DB_COLLECTION = 'bookmarks';
	
	protected $structureDB = array(
		'id' => 'id',
		'userID' => 'userID',
		'mixID' => 'mixID',
	);
	
	public $userID = 0;
	

	function __construct($userID = 0)
	{
		if(!$userID && !Model_User::isLogged())
			return 0;
		
		$this->userID = $userID ? $userID :  Model_User::instance()->getCurrentUserId();
		
		parent::__construct();
		
		return ;
	}
	
	public static function instance()
	{
		return new Model_Bookmarks(Model_User::instance()->getCurrentUserId());
	}
	
	/**
	* @param	maxID	int
	* @return true
	*/
	public function add($mixID)
	{
		if(!$this->userID)
			return 0;
	
		$this->mangoDB->insert(self::DB_COLLECTION, array(
			'id' => mangoDB::AUTO_INCREMENT,
			'userID' => $this->userID,
			'mixID' => $mixID,
		));
		
		return 1;
	}
	
	/**
	* check mix with ID exists in user bookmarks
	* @param	maxID	int
	* @return array
	*/
	public function isBookmark($mixID)
	{
		if(!$this->userID)
			return 0;
		
		return $this->mangoDB->fetchArray($this->mangoDB->find(self::DB_COLLECTION, array(
			$this->getDBField('userID') => $this->userID,
			$this->getDBField('mixID') => (string) $mixID
		)), 'single');
	}
	
	public function get()
	{
		$bookmarks = $this->mangoDB->find(self::DB_COLLECTION, array(
			$this->getDBField('userID') => $this->userID
		));
		
		if(!sizeof($bookmarks))
			return FALSE;
		
		$tracks = array();
		
		$tracks8 = new Tracks8();
		
		
		foreach($bookmarks as $bookmark)
		{
			$tracks[] = $tracks8->getTrack($bookmark['mixID']);
		}
		
		return $tracks;
	}
}
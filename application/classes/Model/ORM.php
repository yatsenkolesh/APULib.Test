<?php
class Model_ORM extends Model
{
	
	protected $mangoDB;
	
	function __construct()
	{
		$this->mangoDB = MangoDB::instance();
	}
	
	/**
	 * Find field by name in collection structure which described in $this->structureDB
	 *
	 * @fieldName   string   name field
	 * @return  string   field name
	 */
	protected function getDBField($fieldName)
	{
		return Arr::get($this->structureDB, $fieldName,0);
	}
}
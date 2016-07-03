<?php
/* МОЖНО БЫЛО РЕАЛИЗОВАТЬ БОЛЕЕ ФУНКЦИОНАЛЬНЫЙ ORM, НО В РАМКАХ ЭТОГО ЗАДАНИЯ Я НЕ УВИДЕЛ СМЫСЛА 

Т.е примерно как стандарт. ORM для MySQL Kohana
*/

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
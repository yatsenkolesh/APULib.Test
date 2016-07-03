<?php

/*
 * ----------------------------------------------------------------------------
 * "THE BEER-WARE LICENSE" (Revision 42):
 * Wouter Wiegmans wrote this file. As long as you retain this notice you
 * can do whatever you want with this stuff. If we meet some day, and you think
 * this stuff is worth it, you can buy me a beer in return - Wouter Wiegmans
 * ----------------------------------------------------------------------------
 */

class MangoDB extends Kohana_MangoDB {
	
	const AUTO_INCREMENT = 'AUTO_INCREMENT';

	public function insert($collection_name, array $a, $options = array())
	{
		foreach($a as $key=>$val)
		{
			if($val == self::AUTO_INCREMENT)
			{
				$increment = $this->getIncrement($collection_name, $key);
				$a[$key] = $increment;
			}
		}
		
		return $this->_call('insert', array(
			'collection_name' => $collection_name,
			'options'         => $options
		), $a);
	}
	
	private function getIncrement($collection_name, $key)
	{
		$incField = $collection_name. '_'. $key;
		
		$incrs = $this->find('increments', array('field' => $incField));
		
		foreach($incrs as $incr)
			{}
		
		if(isset($incr))
		{
			$incrID = ($incr['value'] + 1);
			$this->update('increments', array('field' => $incField), array('$set' => array("value" => $incrID)));
			return $incrID;
		}
		else
		{
			$this->insert('increments', array(
				'field' => $incField,
				'value' => 1
			));
			return 1;
		}
	}
	
	
	public function fetchArray($query, $param = 0)
	{
		$list = array();
		
		foreach($query as $value)
			$list[] = $value;
		
		if($param == 'single')
		{
			return isset($list[0]) ? $list[0] : array();
		}
		
		return sizeof($list) ? $list : array();
	}
	
}
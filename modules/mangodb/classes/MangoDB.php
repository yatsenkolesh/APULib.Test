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
				$a[$key] = $this->getIncrement($collection_name, $key);
		}
		
		return $this->_call('insert', array(
			'collection_name' => $collection_name,
			'options'         => $options
		), $a);
	}
	
	private function getIncrement($collection_name, $key)
	{
		$lastEntry = $this->getLastEntry($collection_name);
		if(!$lastEntry)
			return 1;
		$incr = intval($lastEntry[$key]) + 1;
		return $incr;
	}
	
	private function getLastEntry($collection_name)
	{
		$entries = $this->find($collection_name);
		foreach($entries as $lastValue){}
		if(!isset($lastValue))
			return FALSE;
		return $lastValue;
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
<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Common {

	public function action_index()
	{
		$this->showTemplate('Index');
	}
}
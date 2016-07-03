<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Common {

	public function action_index()
	{
		$tracks = new Tracks8();
		$results = $tracks->search('all', 'popular');
			
		$this->showTemplate('Index',compact('results'));
	}
}
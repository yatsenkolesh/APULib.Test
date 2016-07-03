<?php
class Model_Tools extends Model
{
	const URL_SEPARATOR = '/';
	
	public static function getUrl($controller, $action, $args = null)
	{
		$actionSect = $action == 'index' ? NULL : self::URL_SEPARATOR. $action;
		return self::URL_SEPARATOR. Model_Language::instance()-> getCurrentLanguage() .self::URL_SEPARATOR. $controller. $actionSect .self::URL_SEPARATOR. $args;
	}
	
	public static function getDate($time)
	{
		return date('d.m.Y H:i', $time);
	}
}
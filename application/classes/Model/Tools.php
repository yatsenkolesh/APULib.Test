<?php
class Model_Tools extends Model
{
	const URL_SEPARATOR = '/';
	
	public static function getUrl($controller, $action, $args = null)
	{
		return self::URL_SEPARATOR. $controller. self::URL_SEPARATOR. $action. self::URL_SEPARATOR. $args;
	}
}
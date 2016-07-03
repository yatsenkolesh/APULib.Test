<?php
class Model_Language extends Model
{
	public $list = array(
		'ru' => 'ru',
		'en' => 'en'
	);
	
	public static $language = 0;
	private $languageId = 0;
	private static $langUrlParam = 'ru';
	
	const DEFAULT_LANGUAGE = 'ru';
	const URL_LANGUAGE_PARAM = 'language';
	const URL_SEPARATOR = '/';
	
	function __construct($lang)
	{
		$this->languageId = $lang;
		I18n::lang($this->getCurrentLanguage());
		return ;
	}
	
	public static function instance($languageId = 0)
	{
		if(self::$language)
			return self::$language;
		self::$language = new Model_Language($languageId);
		return self::$language;
	}
	
	public function getCurrentLanguage()
	{
		return in_array($this->languageId, $this->list) ? $this->languageId : self::DEFAULT_LANGUAGE;
	}
	
	public function getUrlToSwitchLanguage($language, $currentUrl)
	{
		//just replace method
		//may be do this with explode, replace element of array and after - join
		return str_replace(self::URL_SEPARATOR. $this->getCurrentLanguage(). self::URL_SEPARATOR,  self::URL_SEPARATOR. $language.  self::URL_SEPARATOR, $currentUrl);
	}
}
?>
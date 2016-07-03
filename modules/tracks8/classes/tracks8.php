<?php 

/* Кеширование не реализовано, т.к не хватило времени. Практически 3 дня это делал с перерывами только на еду и сон. 
Я бы реализовал кеширование с помощью файлов с временной меткой и URL-запроса в названии файла и искал бы файл, который бы подходил по времени, хотя в принципе, можно кеширование было бы сделать
чуть ли не на неделю или даже на вечность, если проверять актуальность файлов для стриминга. 

!!! Так же с помощью кеширования можно было бы реализовать, чтобы пользователь не ждал пока проиграется трек, а мог пропускать треки сколько он захочет, если файлы для 
стриминга уже есть в кеше.

Спасибо за понимание :)
*/

class Tracks8
{
	private $apiKey = 0;
	private $config;
	
	const URL_ARG_SEPARATOR = '&';
	const API_REQUEST_URL = 'http://8tracks.com/';
	const RESPONSE_TYPE = 'json';
	const DEFAULT_SEARCH_SMART_ID = 'keyword';
	
	public $smartSearchIds = array(
		'tags',
		'keyword',
		'artist'
	);
	
	public $token;
	
	function __construct()
	{
		$this->config = $this->getConfig();
		
		$this->apiKey = $this->config->get('api_key');
		
		return ;
	}
	
	/**
	* @param	q	string	search query to API 8tracks
	* @return	array
	*/
	public function search($q, $smartId = 'keyword', $page = 0)
	{
		$smartId = $this->validSmartId($smartId);
		
		$q = str_replace(' ', '%20', $q);
		$pageQueryString = ($page ? '&page='. $page : NULL);
		
		return $this->decode($this->request($this->getUrl('mix_sets/'.$smartId.':'.$q.'.'.self::RESPONSE_TYPE.'?include=mixes'. $pageQueryString)));
	}
	
	/**
	* @param	mixId	string
	* @return	array
	*/
	public function play($mixID, $isNext = 0, $token = 0)
	{	
		$mix = $this->decode($this->request($this->getUrl('sets/'.($token ? $token : $this->getTokenPlay()).'/'.($isNext ? 'next' : 'play').'.'.self::RESPONSE_TYPE.'?mix_id='. $mixID)));
		
		return $mix;
	}
	
	public function getTokenPlay()
	{
		$this->token =  $this->decode($this->request($this->getUrl('/sets/new.json?')))->play_token;
		return $this->token;
	}
	
	/**
	* get track by her id
	* @param	id	int
	* @return	array
	*/
	public function getTrack($id)
	{
		$track = $this->decode($this->request($this->getUrl('mixes/'.$id.'.'.self::RESPONSE_TYPE. '?')));
		if($track->status != '200 OK')
			return 0;
		return $track->mix;
	}
	
	public function validSmartId($smartId)
	{
		if(!in_array($smartId, $this->smartSearchIds))
			$smartId = self::DEFAULT_SEARCH_SMART_ID;
		return $smartId;
	}
	
	/**
	* @param	data	string
	* @return	object
	*/
	private function decode($data)
	{
		if(self::RESPONSE_TYPE == 'json')
			return json_decode($data);
		return FALSE;
	}
	
	/**
	* It makes integrate API server address to URL
	* @param	data	string
	* @return	array
	*/
	private function getUrl($url)
	{
		return self::API_REQUEST_URL. $url. '&api_key='. $this->apiKey;
	}
	
	private function getConfig()
	{
		return Kohana::$config->load('tracks8');
	}
	
	/**
	* Do request to server with CURL
	* @param	url		string
	* @param	post	array
	* @return	string	json data
	*/
	private function request($url, array $post = array())
	{
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
		if($this->getPostStringFromArray($post))
		{
			curl_setopt($curl, CURLOPT_POST, true);
			curl_setopt($curl, CURLOPT_POSTFIELDS, $this->getPostStringFromArray($post));
		}
		$out = curl_exec($curl);
		return $out;
		curl_close($curl);
	}
	
	/**
	* @param	post		array
	* @return	string
	*/
	private function getPostStringFromArray(array $post)
	{
		$args = array();
		foreach($post as $key => $val)
		{
			$args[] = $key . '=' . $val;
		}
		
		return join(self::URL_ARG_SEPARATOR, $args);
	}
}
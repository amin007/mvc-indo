<?php

class App
{
#==========================================================================================
#------------------------------------------------------------------------------------------
	protected $controller = 'Home';
	protected $method = 'index';
	protected $params = [];
#------------------------------------------------------------------------------------------
	public function __construct()
	{
		$url = $this->parseURL();
		echo '<pre>semak $url=>';var_dump($url);echo '</pre>';
		echo '<pre>semak $_GET[url]=>';print_r($_GET['url']);echo '</pre>';
		echo '<pre>semak $url=>';print_r($url);echo '</pre>';
	}
#------------------------------------------------------------------------------------------
	public function parseURL()
	{
		if( isset($_GET['url']) )
		{
			$url = rtrim($_GET['url'], '/');
			$url = filter_var($url, FILTER_SANITIZE_URL);
			$url = explode('/', $url);
			return $url;
		}
	}
#------------------------------------------------------------------------------------------
#==========================================================================================
}
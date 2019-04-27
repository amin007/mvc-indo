<?php

class App
{
#==========================================================================================
#------------------------------------------------------------------------------------------
	protected $controller = 'Home';
	protected $method = 'index';
	protected $params = [];
#------------------------------------------------------------------------------------------
	public function semakPembolehubah($senarai,$jadual,$p='0')
	{
		echo '<pre>$' . $jadual . '=><br>';
		if($p == '0') print_r($senarai);
		if($p == '1') var_export($senarai);
		if($p == '2') var_dump($senarai);
		echo '</pre>';//*/
		//$this->semakPembolehubah($ujian,'ujian',0);
		#http://php.net/manual/en/function.var-export.php
		#http://php.net/manual/en/function.print-r.php
	}
#------------------------------------------------------------------------------------------
	public function __construct()
	{
		$url = $this->parseURL();
		//$this->semakPembolehubah($url,'url');
		if( file_exists('../app/controllers/' . $url[0] . '.php') )
		{
			$this->controller = $url[0];
			unset($url[0]);
		}

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
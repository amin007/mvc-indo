<?php

class Database
{
#==========================================================================================
#------------------------------------------------------------------------------------------
	function semakPembolehubah($senarai,$jadual,$p='0')
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
//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
	private $host = DB_HOST;
	private $user = DB_USER;
	private $pass = DB_PASS;
	private $db_name = DB_NAME;
	private $dbh;
	private $stmt;
#------------------------------------------------------------------------------------------
	public function __construct()
	{
		echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		$dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8';
		echo "\$dsn = $dsn<br>";
		$option = [
			PDO::ATTR_PERSISTENT => true,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		];
		try{
			$this->dbh = new PDO($dsn, DB_USER, DB_PASS, $option);
		}
		catch(PDOException $e)
		{
			die($e->getMessaage());
		}
	}
#------------------------------------------------------------------------------------------
	public function sql($query)
	{
		$this->semakPembolehubah($query,'sql');
	}
#------------------------------------------------------------------------------------------
	public function query($query)
	{
		$this->stmt = $this->dbh->prepare($query);
		//$this->stmt->execute();
		//return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}
#------------------------------------------------------------------------------------------
	public function bind($param, $value, $type = null)
	{
		if( is_null($type) ):
			switch(true):
				case is_int($value): $type = PDO::PARAM_INT; break;
				case is_bool($value): $type = PDO::PARAM_BOOL; break;
				case is_null($value): $type = PDO::PARAM_NULL; break;
				default : $type = PDO::PARAM_STR;
			endswitch;
		endif;

		$this->stmt->bindValue($param, $value, $type);
	}
#------------------------------------------------------------------------------------------
	public function execute()
	{
		$this->stmt->execute();
	}
#------------------------------------------------------------------------------------------
	public function resultSet()
	{
		$this->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);		
	}
#------------------------------------------------------------------------------------------
	public function single()
	{
		$this->execute();
		return $this->stmt->fetch(PDO::FETCH_ASSOC);		
	}
#------------------------------------------------------------------------------------------
	public function rowCount()
	{
		return $this->stmt->rowCount();
	}
#------------------------------------------------------------------------------------------
#==========================================================================================
}
<?php

class Database
{
#==========================================================================================
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
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		$dsn = DB_TYPE . ':host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8';
		$option = [
			PDO::ATTR_PRESISTENT => true,
			PDO::ATTR_ERRORMODE => PDD::ERRMODE_EXCEPTION
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
	public function query($query)
	{
		$this->stmt = $this->dbh->prepare($query);
		//$this->stmt->execute();
		//return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}
#------------------------------------------------------------------------------------------
	public function bind($param, $value, $type = null)
	{
		if( is_null($tyoe) ):
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
#==========================================================================================
}
<?php

class Mahasiswa_model
{
#==========================================================================================
#------------------------------------------------------------------------------------------
	private $nama = 'Amin Ledang';
	private $mhs = [
		[
			"nama" => "Awek 1",
			"nokp" => "123456",
			"email" => "awek1@duduk.mana",
			"jurusan" => "Art",
		],
		[
			"nama" => "Awek 2",
			"nokp" => "234567",
			"email" => "awek2@duduk.mana",
			"jurusan" => "Akaun",
		],
		[
			"nama" => "Awek 3",
			"nokp" => "345678",
			"email" => "awek3@duduk.mana",
			"jurusan" => "Komputer",
		],
	];
	private $dbh;
	private $stmt;
#------------------------------------------------------------------------------------------
	public function __construct()
	{
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		$dsn = DB_TYPE . ':host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8';

		try{
			$this->dbh = new PDO($dsn, DB_USER, DB_PASS);
		}
		catch(PDOException $e)
		{
			die($e->getMessaage());
		}
	}
#------------------------------------------------------------------------------------------
	public function getAllMahasiswa()
	{
		$sql = 'SELECT * FROM mahasiswa';
		$this->stmt = $this->dbh->prepare($sql);
		$this->stmt->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
		//return $this->mhs;
	}
#------------------------------------------------------------------------------------------
#==========================================================================================
}
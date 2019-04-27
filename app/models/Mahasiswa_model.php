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
	private $table = 'mahasiswa';
	private $db;
#------------------------------------------------------------------------------------------
	public function __construct()
	{
		$this->db = new Database;
	}
#------------------------------------------------------------------------------------------
	public function getAllMahasiswa()
	{
		$sql = 'SELECT * FROM ' . $this->table;
		$this->db->query($sql);
		return $this->db->resultSet();
		//return $this->mhs;
	}
#------------------------------------------------------------------------------------------
#==========================================================================================
}
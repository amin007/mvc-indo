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
	public function getMahasiswaById($id)
	{
		$sql = 'SELECT * FROM ' . $this->table . ' WHERE id=:id';
		$this->db->query($sql);
		$this->db->bind('id', $id);
		return $this->db->single();
		//return $this->mhs;
	}
#------------------------------------------------------------------------------------------
	public function tambahDataMahasiswa($data)
	{
		$sql = ' INSERT INTO ' . $this->table
			. '(nama,nokp,email,jurusan)'
			. "\r VALUES(:nama, :nokp, :email, :jurusan)"
			. '';
		$this->db->query($sql);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('nokp', $data['nokp']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('jurusan', $data['jurusan']);

		$this->db->execute();
		return $this->db->rowCount();//*/
		//return 0;
	}
#------------------------------------------------------------------------------------------
	public function hapusDataMahasiswa($id)
	{
		$sql = ' DELETE FROM ' . $this->table . ' WHERE id=:id ';
		$this->db->query($sql);
		$this->db->bind('id', $id);
		$this->db->execute();

		return $this->db->rowCount();//*/
	}
#------------------------------------------------------------------------------------------
	public function ubahDataMahasiswa($data)
	{
		$sql = ' UPDATE ' . $this->table . ' SET '
			. "\r nama=:nama, nokp=:nokp, email=:email, jurusan=:jurusan "
			. "\r WHERE id=:id ";
		$this->db->query($sql);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('nokp', $data['nokp']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('jurusan', $data['jurusan']);
		$this->db->bind('id', $data['id']);

		$this->db->execute();
		return $this->db->rowCount();//*/
		//return 0;
	}
#------------------------------------------------------------------------------------------
#==========================================================================================
}
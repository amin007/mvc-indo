<?php

class Mahasiswa extends Controller
{
#==========================================================================================
#------------------------------------------------------------------------------------------
#------------------------------------------------------------------------------------------
/*	public function __construct()
	{
	}*/
#------------------------------------------------------------------------------------------
	public function index()
	{
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		$data['tajukAtas'] = 'Daftar Mahasiswa';
		$data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
		$this->view('template/diatas', $data);
		$this->view('mahasiswa/index', $data);
		$this->view('template/dibawah');
	}
#------------------------------------------------------------------------------------------
	public function detail($id)
	{
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		$data['tajukAtas'] = 'Detail Mahasiswa';
		$data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
		$this->view('template/diatas', $data);
		$this->view('mahasiswa/detail', $data);
		$this->view('template/dibawah');
	}
#------------------------------------------------------------------------------------------
#==========================================================================================
}
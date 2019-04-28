<?php

class Mahasiswa extends Controller
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
	public function tambah()
	{
		//$this->semakPembolehubah($_POST,'_POST');
		if( $this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0 ):
			Flasher::setFlash('berjaya','ditambah','success');
			header('Location:' . BASEURL . 'mahasiswa');
			exit();
		else:
			Flasher::setFlash('gagal','ditambah','danger');
			header('Location:' . BASEURL . 'mahasiswa');
			exit();
		endif;
	}
#------------------------------------------------------------------------------------------
#==========================================================================================
}
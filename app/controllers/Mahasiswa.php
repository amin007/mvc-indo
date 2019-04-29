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
		$data['mhs'] = (isset($_POST['keyword'])) ?
			$this->model('Mahasiswa_model')->cariDataMahasiswa()
			: $this->model('Mahasiswa_model')->getAllMahasiswa();
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
	public function hapus($id)
	{
		//$this->semakPembolehubah($_POST,'_POST');
		if( $this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0 ):
			Flasher::setFlash('berjaya','dihapus','success');
			header('Location:' . BASEURL . 'mahasiswa');
			exit();
		else:
			Flasher::setFlash('gagal','dihapus','danger');
			header('Location:' . BASEURL . 'mahasiswa');
			exit();
		endif;
	}
#------------------------------------------------------------------------------------------
	public function getubah($idx = 0)
	{
		$id = isset($_POST['id']) ? $_POST['id'] : $idx;//echo $_POST['id'];
		//$id = isset($_GET['id']) ? $_GET['id'] : $idx;//echo $_POST['id'];
		$data = $this->model('Mahasiswa_model')->getMahasiswaById($id);
		echo json_encode($data);
	}
#------------------------------------------------------------------------------------------
	public function ubah()
	{
		//$this->semakPembolehubah($_POST,'_POST');
		if( $this->model('Mahasiswa_model')->ubahDataMahasiswa($_POST) > 0 ):
			Flasher::setFlash('berjaya','diubah','success');
			header('Location:' . BASEURL . 'mahasiswa');
			exit();
		else:
			Flasher::setFlash('gagal','diubah','danger');
			header('Location:' . BASEURL . 'mahasiswa');
			exit();
		endif;
	}
#------------------------------------------------------------------------------------------
	public function cari()
	{
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		$data['tajukAtas'] = 'Daftar Mahasiswa';
		$data['mhs'] = $this->model('Mahasiswa_model')->cariDataMahasiswa();
		$this->view('template/diatas', $data);
		$this->view('mahasiswa/index', $data);
		$this->view('template/dibawah');
	}
#------------------------------------------------------------------------------------------
#==========================================================================================
}
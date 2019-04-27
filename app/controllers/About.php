<?php

class About extends Controller
{
#==========================================================================================
#------------------------------------------------------------------------------------------
#------------------------------------------------------------------------------------------
/*	public function __construct()
	{
	}*/
#------------------------------------------------------------------------------------------
	public function index($nama = 'Rahsia', $kerja = 'Tanam Anggur', $umur = 25)
	{
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		$data['nama'] = $nama;
		$data['kerja'] = $kerja;
		$data['umur'] = $umur;
		$data['tajukAtas'] = 'About Me';
		$this->view('template/diatas', $data);
		$this->view('about/index', $data);
		$this->view('template/dibawah');
	}
#------------------------------------------------------------------------------------------
	public function page()
	{
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		$data['tajukAtas'] = 'About Page';
		$this->view('template/diatas', $data);
		$this->view('about/page');
		$this->view('template/dibawah');
	}
#------------------------------------------------------------------------------------------
	public function saya()
	{
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		$data['tajukAtas'] = 'Saya';
		$this->view('template/diatas', $data);
		$this->view('about/saya');
		$this->view('template/dibawah');
	}
#------------------------------------------------------------------------------------------
#==========================================================================================
}
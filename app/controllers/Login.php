<?php

class Login extends Controller
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
		$data['tajukAtas'] = 'Login';
		$data['bgcolor'] = 'style="background-color:#d3d3d3;"';
		$this->view('template/diatas', $data);
		$this->view('template/khas001/dimenu', $data);
		$this->view('login/fail_login',  $data);
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
#==========================================================================================
}
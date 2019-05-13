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
	public function ruangtamu()
	{
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		$data['tajukAtas'] = 'Ruangtamu';
		$data['bgcolor'] = 'style="background-color:#d3d3d3;"';
		//////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////
		$this->view('template/ruangtamu/diatas', $data);
		$this->view('template/ruangtamu/dimenu', $data);
		$this->view('ruangtamu/index',  $data);
		$this->view('template/ruangtamu/dibawah');
	}
#------------------------------------------------------------------------------------------
	public function account($fail)
	{
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		$data['tajukAtas'] = 'Akaun';
		$data['bgcolor'] = 'style="background-color:#d3d3d3;"';
		$data['fail'] = $fail;
		//////////////////////////////////////////////////////////////////////////////////
			$data['username'] = 'ayam';
			$data['password'] = md5('ayam');
			$data['firstname'] = 'ayam';
			$data['middlename'] = 'bin';
			$data['lastname'] = 'jantan';
			$data['admin_id'] = 1;
		//////////////////////////////////////////////////////////////////////////////////
		$this->view('template/ruangtamu/diatas', $data);
		$this->view('template/ruangtamu/dimenu', $data);
		$this->view('ruangtamu/account',  $data);
		$this->view('template/ruangtamu/dibawah');
	}
#------------------------------------------------------------------------------------------
	public function book($fail)
	{
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		$data['tajukAtas'] = 'Ruangtamu';
		$data['bgcolor'] = 'style="background-color:#d3d3d3;"';
		$data['fail'] = 'Buku / ' . $fail;
		//////////////////////////////////////////////////////////////////////////////////
			$data['Book Title'] = 'ayam';
			$data['Category'] = md5('ayam');
			$data['Author'] = 'ayam';
			$data['Date Published'] = 'bin';
			$data['Available'] = 'jantan';
			$data['admin_id'] = 1;
		//////////////////////////////////////////////////////////////////////////////////
		$this->view('template/ruangtamu/diatas', $data);
		$this->view('template/ruangtamu/dimenu', $data);
		$this->view('ruangtamu/jadual',  $data);
		$this->view('template/ruangtamu/dibawah');
	}
#------------------------------------------------------------------------------------------
#------------------------------------------------------------------------------------------
#==========================================================================================
}
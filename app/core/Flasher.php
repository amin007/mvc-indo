<?php

class Flasher
{
#==========================================================================================
#------------------------------------------------------------------------------------------
//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
#------------------------------------------------------------------------------------------
	public static function setFlash($pesan,$aksi,$tipe)
	{
		$_SESSION['flash'] = [
			'pesan' => $pesan,
			'aksi' => $aksi,
			'tipe' => $tipe
		];
	}
#------------------------------------------------------------------------------------------
	public static function flash()
	{
		if( isset($_SESSION['flash']) )
		{
			echo "\n" . '<div class="alert alert-' . $_SESSION['flash']['tipe']
			. ' alert-dismissible fade show" role="alert">'
			. "\n\t" . 'Data Mahasiswa <strong>' . $_SESSION['flash']['pesan']
			. '</strong> ' . $_SESSION['flash']['aksi']
			. "\n\t" . '<button type="button" class="close" data-dismiss="alert"'
			. ' aria-label="Close">'
			. "\n\t\t" . '<span aria-hidden="true">&times;</span>'
			. "\n\t" . '</button>'
			. "\n" . '</div>';

			unset($_SESSION['flash']);
		}
	}
#------------------------------------------------------------------------------------------
#==========================================================================================
}
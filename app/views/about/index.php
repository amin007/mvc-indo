<?php
#-----------------------------------------------------------------------------------------------------------
//$fail = basename($_SERVER['PHP_SELF']);//Returns The Current PHP File Name
$fail = 'Index';
$folder = basename(__DIR__);//Returns The Current PHP Folder
#-----------------------------------------------------------------------------------------------------------
?>
<div class="container">
	<h1 class="mt-5"><?php echo $data['tajukAtas'] ?></h1>
	<img src="<?php echo BASEURL ?>public/img/profile.jpg" alt="<?php echo $data['nama'] ?>"
	width="10%" height="10%" class="rounded-circle shadow">
	<p class="lead">Nama saya <?php echo $data['nama'] ?>,
			umur saya <?php echo $data['umur'] ?>,
			kerja saya <?php echo $data['kerja'] ?></p>
	<a class="btn btn-primary btn-lg" href="<?php echo BASEURL ?>" role="button">Kembali</a>
</div><!-- class="container" -->

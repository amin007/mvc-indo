<?php
#-----------------------------------------------------------------------------------------------------------
//$fail = basename($_SERVER['PHP_SELF']);//Returns The Current PHP File Name
$fail = 'Index';
$folder = basename(__DIR__);//Returns The Current PHP Folder
#-----------------------------------------------------------------------------------------------------------
?>
<div class="container mt-5">
<div class="jumbotron jumbotron-fluid">
	<div class="container">
		<h1 class="display-4">Views: Ini Folder <strong><?php echo $folder ?></strong></h1>
		<p class="lead">Nama saya <?php echo $data['nama'] ?> </p>
		<a class="btn btn-primary btn-lg" href="#" role="button">Kembali</a>
	</div>
</div>
</div><!-- class="container" -->

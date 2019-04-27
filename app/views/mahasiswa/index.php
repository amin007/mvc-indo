<?php
#-----------------------------------------------------------------------------------------------------------
//$fail = basename($_SERVER['PHP_SELF']);//Returns The Current PHP File Name
$fail = 'Index';
$folder = basename(__DIR__);//Returns The Current PHP Folder
#-----------------------------------------------------------------------------------------------------------
?>
<div class="container mt-5">
	<div class="row">
		<div class="col-6">
			<h3><?php echo $data['tajukAtas'] ?></h3>

			<?php foreach($data['mhs'] as $mhs):?>
			<ul>
			<li><?php $mhs['nama'] ?></li>
			<li><?php $mhs['nokp'] ?></li>
			<li><?php $mhs['email'] ?></li>
			<li><?php $mhs['jurusan'] ?></li>
			</ul>
			<?php endforeach;?>
		</div><!-- / class="col-6" -->
	</div><!-- / class="row" -->
</div><!-- class="container" -->

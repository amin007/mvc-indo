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

			<?php if( isset($data['mhs']) ):?>
			<?php foreach($data['mhs'] as $mhs):?>
			<ul>
			<li><?php echo $mhs['nama'] ?></li>
			<li><?php echo $mhs['nokp'] ?></li>
			<li><?php echo $mhs['email'] ?></li>
			<li><?php echo $mhs['jurusan'] ?></li>
			</ul>
			<?php endforeach;?>
			<?php endif;?>
		</div><!-- / class="col-6" -->
	</div><!-- / class="row" -->
</div><!-- class="container" -->

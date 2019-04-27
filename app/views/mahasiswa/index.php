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
			<ul class="list-group">
			<?php foreach($data['mhs'] as $mhs):
			$p = BASEURL . 'mahasiswa/detail/' . $mhs['id'];
			?>
			<li class="list-group-item d-flex justify-content-between align-items-center"><?php
				echo $mhs['nama'] ?>
				<a href="<?php echo $p ?>" class="badge badge-primary">detail</a>
			</li>
			<?php endforeach;?>
			</ul>
			<?php endif;?>
		</div><!-- / class="col-6" -->
	</div><!-- / class="row" -->
</div><!-- class="container" -->

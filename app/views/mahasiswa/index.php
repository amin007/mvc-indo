<?php
#-----------------------------------------------------------------------------------------------------------
//$fail = basename($_SERVER['PHP_SELF']);//Returns The Current PHP File Name
$fail = 'Index';
$folder = basename(__DIR__);//Returns The Current PHP Folder
//semakPembolehubah($data,'data');
#-----------------------------------------------------------------------------------------------------------
?>
<div class="container mt-5">
	<div class="row"><div class="col-lg-6">
		<?php Flasher::flash(); echo "\n";
	?></div><!-- / class="col-lg-6"> -->
	</div><!-- / class="row" -->
	<div class="row"><div class="col-lg-6">
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal"
		data-target="#formModal">Tambah Data Mahasiswa</button>
	</div><!-- / class="col-lg-6"> -->
	</div><!-- / class="row" -->
	<div class="row"><div class="col-lg-6">
		<form method="POST" action="<?php echo BASEURL ?>mahasiswa" autocomplete="off">
		<div class="input-group">
			<input type="text" class="form-control" name="keyword" id="keyword" placeholder="cari mahasiswa">
			<div class="input-group-append">
				<button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
			</div>
		</div>
		</form>
	</div><!-- / class="col-lg-6"> -->
	</div><!-- / class="row" -->
	<div class="row">
		<div class="col-6">
			<h3><?php echo $data['tajukAtas'] ?></h3>

			<?php if( isset($data['mhs']) ):?><ul class="list-group">
			<?php foreach($data['mhs'] as $mhs):
			$p1 = BASEURL . 'mahasiswa/detail/' . $mhs['id'];
			$p2 = BASEURL . 'mahasiswa/hapus/' . $mhs['id'];
			$p3 = BASEURL . 'mahasiswa/ubah/' . $mhs['id'];
			$p4 = BASEURL . 'mahasiswa/ubahdata/' . $mhs['id'];
			?><li class="list-group-item"><?php
				echo $mhs['nama'] . "\n\t\t\t\t";
			?><a href="<?php echo $p2 ?>" class="badge badge-danger float-right ml-1"
				onclick="return confirm('yakin');">hapus</a>
			<a href="<?php echo $p3 ?>" class="badge badge-success float-right ml-1 tampilModalUbah"
				data-toggle="modal" data-target="#formModal" data-id="<?php echo $mhs['id'] ?>">ubah</a>
			<!-- a href="<?php echo $p4 ?>" class="badge badge-success float-right ml-1">ubah</a -->
			<a href="<?php echo $p1 ?>" class="badge badge-primary float-right ml-1">detail</a>
			</li><?php endforeach; echo "\n\t\t\t"; ?></ul><?php endif; echo "\n"; ?>
		</div><!-- / class="col-6" -->
	</div><!-- / class="row" -->
</div><!-- class="container" -->

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog"
aria-labelledby="judulModal" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content"><?php $post = BASEURL . 'mahasiswa/tambah'; ?>
		<form method="POST" action="<?php echo $post ?>" class="borangdaa" autocomplete="off">
			<div class="modal-header">
				<h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////// -->
<input type="hidden" name="id" id="id">
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="form-group row">
	<label for="kodNama" class="col-sm-2 col-form-label">Nama</label>
	<div class="col-sm-10"><div class="input-group mb-2">
		<div class="input-group-prepend"><div class="input-group-text" id="Nama">@</div></div>
		<input type="text" name="nama" class="form-control" id="kodInputNama" placeholder="nama">
	</div></div>
</div>
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="form-group row">
	<label for="kodNoKP" class="col-sm-2 col-form-label">No KP</label>
	<div class="col-sm-10"><div class="input-group mb-2">
		<div class="input-group-prepend"><div class="input-group-text" id="NoKP">@</div></div>
		<input type="number" name="nokp" class="form-control" id="kodInputNoKP" placeholder="nokp">
	</div></div>
</div>
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="form-group row">
	<label for="kodEmail" class="col-sm-2 col-form-label">Email</label>
	<div class="col-sm-10"><div class="input-group mb-2">
		<div class="input-group-prepend"><div class="input-group-text" id="Email">@</div></div>
		<input type="email" name="email" class="form-control" id="kodInputEmail" placeholder="email">
	</div></div>
</div>
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="form-group row">
	<label for="kodJurusan" class="col-sm-2 col-form-label">Jurusan</label>
	<div class="col-sm-10"><div class="input-group mb-2">
		<div class="input-group-prepend"><div class="input-group-text" id="Jurusan">@</div></div>
		<select name="jurusan" class="form-control" id="kodInputJurusan">
		<option>Art</option>
		<option>Akaun</option>
		<option>Perniagaan</option>
		<option>Komputer</option>
		<option>Muzik</option>
		</select>
	</div></div>
</div>
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////// -->
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Tambah Data</button>
			</div>
		</form>
		</div>
	</div>
</div>
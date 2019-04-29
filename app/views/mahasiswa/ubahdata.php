<?php
#-----------------------------------------------------------------------------------------------------------
//$fail = basename($_SERVER['PHP_SELF']);//Returns The Current PHP File Name
//$folder = basename(__DIR__);//Returns The Current PHP Folder
$p = BASEURL . 'mahasiswa';
#-----------------------------------------------------------------------------------------------------------
?>
<div class="container">
<div class="row"><div class="col-lg-6">
	<h3><?php echo $data['tajukAtas'] ?></h3>
</div><!-- / class="col-lg-6"> -->
</div><!-- / class="row" -->

<div class="row">
	<div class="col-sm-3">
		<div class="card"><div class="card-body">
			<h5 class="card-title"><?php echo $data['mhs']['nama'] ?></h5>
			<h6 class="card-subtitle mb-2 text-muted"><?php echo $data['mhs']['nokp'] ?></h6>
			<p class="card-text"><?php echo $data['mhs']['email'] ?></p>
			<p class="card-text"><?php echo $data['mhs']['jurusan'] ?></p>
			<a href="<?php echo $p ?>"  class="badge badge-primary">Kembali</a>
		</div></div>
	</div>
	<div class="col-sm-6">
		<div class="card"><div class="card-body">
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<?php borangubah($data['mhs']); ?>
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		</div></div>
	</div>
</div>
</div><!-- / class="container mt-5" -->

<?php
function borangubah($data)
{
	$post = BASEURL . 'mahasiswa/ubah';
?>
		<form method="POST" action="<?php echo $post ?>" class="borangdaa" autocomplete="off">
			<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////// -->
			<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
			<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////// -->
			<div class="form-group row">
				<label for="kodNama" class="col-sm-2 col-form-label">Nama</label>
				<div class="col-sm-10"><div class="input-group mb-2">
					<div class="input-group-prepend"><div class="input-group-text" id="Nama">
						<?php echo $data['nama'] ?>
					</div></div>
					<input type="text" class="form-control" name="nama" value="<?php echo $data['nama'] ?>">
				</div></div>
			</div>
			<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////// -->
			<div class="form-group row">
				<label for="kodNoKP" class="col-sm-2 col-form-label">No KP</label>
				<div class="col-sm-10"><div class="input-group mb-2">
					<div class="input-group-prepend"><div class="input-group-text" id="NoKP">
						<?php echo $data['nokp'] ?>
					</div></div>
					<input type="number" class="form-control" name="nokp" value="<?php echo $data['nokp'] ?>">
				</div></div>
			</div>
			<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////// -->
			<div class="form-group row">
				<label for="kodEmail" class="col-sm-2 col-form-label">Email</label>
				<div class="col-sm-10"><div class="input-group mb-2">
					<div class="input-group-prepend"><div class="input-group-text" id="Email">
						<?php echo $data['email'] ?>
					</div></div>
					<input type="email" class="form-control" name="email" value="<?php echo $data['email'] ?>">
				</div></div>
			</div>
			<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////// -->
			<div class="form-group row">
				<label for="kodJurusan" class="col-sm-2 col-form-label">Jurusan</label>
				<div class="col-sm-10"><div class="input-group mb-2">
					<div class="input-group-prepend"><div class="input-group-text" id="Jurusan">
						<?php echo $data['jurusan'] ?>
					</div></div>
					<select class="form-control" name="jurusan">
					<?php
					$ulangData = ['Art','Akaun','Perniagaan','Komputer','Muzik'];
					echo inputOption($data['jurusan'],$ulangData); ?>
					</select>
				</div></div>
			</div>
			<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////// -->
			<div class="form-group row">
				<label for="kodJurusan" class="col-sm-2 col-form-label">&nbsp;</label>
				<div class="col-sm-10"><div class="input-group mb-2">
					<button type="submit" class="btn btn-primary">Ubah Data</button>
				</div></div>
			</div>
			<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////// -->
		</form>
<?php
}
#------------------------------------------------------------------------------------------
	function inputOption($data,$ulangData)
	{
		$dropmenu = ''; 
		$tab5 = "\n\t\t\t\t\t";
		foreach ($ulangData as $key => $semak)
		{# mula ulang $bil
			//echo "\r" . $bil['keterangan'] . '<br>';
			$p0 = ($data == $semak) ?  ' selected' : '';
			$dropmenu .= '<option' . $p0 . '>'
			. $semak . '</option>' . $tab5;
		}# tamat ulang $bil//*/

		return $dropmenu;
	}
#------------------------------------------------------------------------------------------

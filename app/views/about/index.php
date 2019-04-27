<?php
#-----------------------------------------------------------------------------------------------------------
//$fail = basename($_SERVER['PHP_SELF']);//Returns The Current PHP File Name
$fail = 'Index';
$folder = basename(__DIR__);//Returns The Current PHP Folder
#-----------------------------------------------------------------------------------------------------------
diatas();
/*echo '<p class="lead">Nama saya ' . $data['nama']
. ', umur saya ' . $data['umur']
. ', kerja saya ' . $data['kerja'] . '</p>//*/
print <<<END
<br><br>
<div class="container mt-10">
<div class="jumbotron jumbotron-fluid">
	<div class="container">
		<h1 class="display-4">Views: Ini Folder <strong>$folder</strong></h1>
		<h1 class="display-4">Views: Ini Fail <strong>$fail</strong></h1>
		<p class="lead">Nama saya $data[nama],
			umur saya $data[umur],
			kerja saya $data[kerja]</p>
		<a class="btn btn-primary btn-lg" href="../index.php" role="button">Kembali</a>
	</div>
</div>
</div><!-- class="container" -->
END;
dibawah();
#-----------------------------------------------------------------------------------------------------------

<?php
#-----------------------------------------------------------------------------------------------------------
function ditengah01($namafail)
{
	diatas();
print <<<END
<br><br>
<div class="container mt-10">
<div class="jumbotron jumbotron-fluid">
	<div class="container">
		<h1 class="display-4">Views: Ini Folder <strong>$namafail</strong></h1>
		<p class="lead">Sini adalah kawasan larangan merokok.</p>
		<a class="btn btn-primary btn-lg" href="../index.php" role="button">Kembali</a>
	</div>
</div>
</div><!-- class="container" -->
END;
	dibawah();
}
#-----------------------------------------------------------------------------------------------------------
//$namafail = basename($_SERVER['PHP_SELF']);//Returns The Current PHP File Name
$namafail = basename(__DIR__);//Returns The Current PHP Folder
ditengah01($namafail);
#-----------------------------------------------------------------------------------------------------------

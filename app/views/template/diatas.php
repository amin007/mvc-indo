<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title><?php echo isset($data['tajukAtas']) ? $data['tajukAtas'] : 'Halaman Utama' ?></title>
<!-- Bootstrap Core CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" -->
<!-- Custom Fonts -->
<link href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" rel="stylesheet" type="text/css">
</head>
<body<?php echo isset($data['bgcolor']) ? ' ' . $data['bgcolor'] : '' ?>>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container">
	<a class="navbar-brand" href="<?php echo BASEURL?>">PHP MVC</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
	aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		<div class="navbar-nav">
			<a class="nav-item nav-link active" href="<?php echo BASEURL?>">Home</a>
			<a class="nav-item nav-link active" href="<?php echo BASEURL?>login">Login</a>
			<a class="nav-item nav-link active" href="<?php echo BASEURL?>login/ruangtamu">Ruangtamu</a>
			<a class="nav-item nav-link" href="<?php echo BASEURL?>mahasiswa">Mahasiswa</a>
			<a class="nav-item nav-link" href="<?php echo BASEURL?>about">About</a>
		</div>
	</div>
</div><!-- class="container" -->
</nav>

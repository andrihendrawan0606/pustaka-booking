<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>The Easiest Way to Add Input Masks to Your Forms</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css"
		rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css2/stylep6.css">
</head>

<body>
	<div class="registration-form">
		<form>
			<div class="form-icon">
				<span><i class="icon icon-user"></i></span>
			</div>
			<div class="form-group">
			<div><?= $nama; ?></div>

			<div class="form-group mt-3">
			<div><?= $nis; ?></div>
			</div>
			<div class="form-group">
			<div><?= $kelas; ?></div>
			</div>
			<div class="form-group">
			<div><?= $kelamin; ?></div>
			</div>
			<div class="form-group">
			<div><?= $agama; ?></div>
			</div>
			<div class="form-group">
				<div><?= $date; ?></div>
			</div>
			<div class="form-group">
				<div><?= $tmptlhr; ?></div>
			</div>
			<div class="form-group">
				<div><?= $alamat; ?></div>
			</div>
			<div class="form-group">
				<a href="<?= base_url('matakuliah'); ?>"><button type="button" class="btn btn-block create-account">Balik</button></a>
			</div>
		</form>
	</div>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js">
	</script>
	<!-- <script src="assets/js/script.js"></script> -->
</body>

</html>
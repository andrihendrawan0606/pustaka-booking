<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Input Daftar Riwayat Hidup</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css"
		rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css2/stylep6.css">
</head>

<body>
	<div class="registration-form">
		<form action="<?= base_url('matakuliah/cetak'); ?>" method="POST">
			<div class="form-icon">
				<span><i class="icon icon-user"></i></span>
			</div>
			<!-- <div class="form-group">
				<input type="text" name="nim" id="nim" class="form-control item" placeholder="NIM">
				<div class="col-sm-8 col-danger" <?= form_error('nim')?>></div>
			</div> -->
			<div class="form-group">
				<input type="text" name="nama" class="form-control item" id="nama" placeholder="Nama Lengkap">
				<div class="col-sm-8 col-danger" <?= form_error('nama')?>></div>
			</div>
			<div class="form-group">
				<input type="text" name="nis" class="form-control item" id="nis" placeholder="NIS">
				<div class="col-sm-8 col-danger" <?= form_error('nis')?>></div>
			</div>
			<div class="form-group">
				<input type="text" name="kelas" class="form-control item" id="kelas" placeholder="kelas">
				<div class="col-sm-8 col-danger" <?= form_error('kelas')?>></div>
			</div>
			<div class="form-group">
				<input type="date" name="date" class="form-control item" id="date">
				<div class="col-sm-8 col-danger" <?= form_error('date')?>></div>
			</div>
			<div class="form-group">
				<input type="text" name="tmptlhr" class="form-control item" id="tmptlhr" placeholder="Tempat Lahir">
				<div class="col-sm-8 col-danger" <?= form_error('tmptlhr')?>></div>
			</div>
			<div class="form-group">
				<input type="text" name="alamat" class="form-control item" id="alamat" placeholder="alamat">
				<div class="col-sm-8 col-danger" <?= form_error('alamat')?>></div>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="kelamin" value="Cowok">
				<label class="form-check-label">Cowok</label>
				<input class="form-check-input ml-4" type="radio" name="kelamin" value="Cewek">
				<label class="form-check-label ml-5">Cewek</label>
			</div>
			<select name="agama" class="form-control mt-4">
				<option value="islam" >Islam</option>
				<option value="Kristen">Kristen</option>
				<option value="Katholik">Katholik</option>
				<option value="Budha">Budha</option>
				<option value="Hindu">Hindu</option>
				<option value="Protestan">Protestan</option>
				<option value="Khonghucu">Khonghucu</option>
			</select>
			<div class="form-group">
				<button type="submit" value="Submit" class="btn btn-block create-account">Submit</button>
			</div>
		</form>
	</div>
	<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script> -->
	<!-- <script src="assets/js/script.js"></script> -->
</body>

</html>
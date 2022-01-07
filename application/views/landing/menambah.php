<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
</head>

<body>
	<form action="<?php base_url();?>tambah_data" method="post" class="mt-5">
		<div class="mb-3">
			<label for="email" class="form-label">Email address</label>
			<input type="email" class="form-control" id="email" name="email">
		</div>
		<div class="mb-3">
			<label for="nim" class="form-label">NIM</label>
			<input type="number" class="form-control" id="nim" name="nim">
		</div>
		<div class="mb-3">
			<label for="fullname" class="form-label">Full Name</label>
			<input type="text" class="form-control" id="fullname" name="fullname">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	<script src="<?= base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<title>PHP OOP</title>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12 mt-5">
<h2 class="text-center">CRUD OOP PADA PHP - TAMBAH DATA</h2>
<hr style="height: 1px;color: black;background-color: black;">
</div>
</div>
<div class="row">
<div class="col-md-5 mx-auto">
<?php
include 'koneksi.php';
$model = new Data();
$insert = $model->insert();
?>
<form action="" method="post">
<div class="form-group">
<label for="">Nim</label>
<input type="text" name="nim" class="form-control">
</div>
<div class="form-group">
<label for="">Nama Mahasiswa</label>
<input type="text" name="nama" class="form-control">
</div>
<div class="form-group">
<label for="">Alamat</label>
<input type="text" name="alamat" class="form-control">
</div>
<div class="form-group">
<label for="">Jurusan</label>
<input type="text" name="jurusan" class="form-control">
</div>
<div class="form-group">
<button type="submit" name="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
</div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-
q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
integrity="sha384-
UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
integrity="sha384-
JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
crossorigin="anonymous"></script>
</body>
</html>
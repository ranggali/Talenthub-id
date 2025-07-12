<?php
include 'koneksi.php';
$model = new Data();
$id = $_REQUEST['id'];
$delete = $model->delete($id);
if ($delete) {
echo "<script>alert('Data Berhasil Dihapus');</script>";
echo "<script>window.location.href = 'index.php';</script>";
}

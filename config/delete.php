<?php
require_once 'koneksi.php';

$d=$_GET['d'];

$con=mysqli_query($koneksi, "delete from mhs where nim='$d'");
if ($con) {
  echo "<script>alert('data berhasil dihapus');window.location='../index.php'</script>";
}else {
  echo "<script>alert('gagal menghapus data');window.location='../index.php'</script>";
}
 ?>

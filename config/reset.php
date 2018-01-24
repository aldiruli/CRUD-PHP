<?php
require_once "koneksi.php";

$reset=mysqli_query($koneksi,"DELETE FROM mhs");

if ($reset) {
  echo "<script>alert('data berhasil direset');window.location='../index.php'</script>";
}else {
  echo "<script>alert('data gagal di reset');window.location='../index.php'</script>";
}
 ?>

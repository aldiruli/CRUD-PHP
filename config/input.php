<?php
  require_once 'koneksi.php';

  $nama=$_POST['nama'];
  $nim=$_POST['nim'];
  $ipk=$_POST['ipk'];
  $smt=$_POST['smt'];

  if ($nama==null || $nim==null || $ipk==null || $smt==null) {
    echo "<script>alert('silahkan lengkapi data');window.location='../tambahdata.php'</script>";
  }else {
    $con= mysqli_query($koneksi, "INSERT INTO mhs (nama, nim, ipk, smt)
    values ('$nama', '$nim', '$ipk','$smt')");
    echo "<script>alert('terima kasih, data berhasil di masukkan');window.location='../index.php'</script>";
  }
 ?>

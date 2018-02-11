  <?php
require_once "koneksi.php";

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$ipk = $_POST['ipk'];
$smt = $_POST['smt'];

  $u=mysqli_query($koneksi, "UPDATE mhs SET nama='$nama', nim='$nim', ipk='$ipk', smt='$smt' where nim='$nim'");
  if ($u) {
    echo "<script>alert('terima kasih, data berhasil di edit');window.location='../index.php'</script>";
  }else {
    echo "<script>alert('maaf, data gagal diedit');window.location='../index.php'</script>";
  }
 ?>

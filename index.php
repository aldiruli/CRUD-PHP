<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Struktur Data</title>
  </head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <body>

    <a href="tambahdata.php"><button type="button" name="button" class="btn btn-primary">Tambah Data</button></a>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive">
              <table class="table table-striped">
                <tr>
                  <td>Nama</td>
                  <td>Nim</td>
                  <td>Ipk</td>
                  <td>Smt</td>
                  <td colspan="2">Aksi</td>
                </tr>
                <?php
                  require_once 'config/koneksi.php';
                  $con=mysqli_query($koneksi, "SELECT*FROM mhs");
                  while ($data =mysqli_fetch_array($con)) {
                  ?>
                  <tr>
                    <td><?= $data['nama']?></td>
                    <td><?= $data['nim']?></td>
                    <td><?= $data['ipk']?></td>
                    <td><?= $data['smt']?></td>
                    <td><a href="config/delete.php?d=<?= $data['nim'] ?>">Hapus</a></td>
                  </tr>
                <?php } ?>
              </table>
             </div>
        </div>
      </div>
    </div>

       <?php
        //jumlah mahasiswa
        echo "<p>Total mahasiswa berjumlah ".mysqli_num_rows($con)." orang.";
        //ratarata IPk
        $sql 	= 'SELECT AVG(ipk) as ratarata, MAX(ipk) as terbesar , MIN(ipk) as terkecil FROM mhs';
        $query 	= mysqli_query($koneksi, $sql);
        while ($row = mysqli_fetch_array($query))
        {
        	echo "<br>IPK rata-rata dari ".mysqli_num_rows($con)." mahasiswa : ".number_format($row['ratarata'],2);
          echo "<br>IPK Terbesar dari " .mysqli_num_rows($con) ." mahasiswa : ".number_format($row['terbesar'],2);
          echo "<br>IPK Terkecil dari " .mysqli_num_rows($con) ." mahasiswa : ".number_format($row['terkecil'],2);
        }
       ?>

       <form action="config/reset.php" method="post">
         <input type="submit" name="submit" class="btn btn-danger" value="Reset">
       </form>
  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tambah data</title>
  </head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form action="config/input.php" method="post">
            <div class="form-group">
              <input type="text" class="form-control" name="nama" placeholder="Nama">
            </div>
            <div class="form-group">
              <input type="number" min="0" max="99999999" class="form-control" name="nim" placeholder="Nim">
            </div>
            <div class="form-group">
              <input type="number" step="0.01" min="0" min="1" max="4.0" class="form-control" name="ipk" placeholder="Ipk">
            </div>
            <div class="form-group">
              <input type="number" min="1" max="12" class="form-control" name="smt" placeholder="Smt">
            </div>
            <div class="form-group">
              <input type="submit" name="submit" value="Simpan" class="btn btn-success">
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>

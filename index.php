<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <title>minimarket</title>
</head>
<style>
.padding-topBot20px{
    padding:20px 5px 20px 5px;
}
</style>
<body>
  <header class="navbar flex">
    <div id="judul">
        <h3><a style="color:black;" href="#">minimarket</a></h3>
    </div>
    </header>
    
<div class="row container ">
  <div class="col-sm-3 padding-topBot20px">
    <div class="card">
      <div class="card-body text-center ">
        <a href="halaman/snack.php">Snack</a>
      </div>
    </div>
  </div>

  <div class="col-sm-3 padding-topBot20px">
    <div class="card">
      <div class="card-body text-center ">
        <a href="halaman/rt.php"  >Rumah Tangga</a>
      </div>
    </div>
  </div>

  <div class="col-sm-3 padding-topBot20px">
    <div class="card">
      <div class="card-body text-center ">
        <a href="halaman/elec.php"  >Elektronik</a>
      </div>
    </div>
  </div>

  <div class="col-sm-3 padding-topBot20px">
    <div class="card">
      <div class="card-body text-center ">
        <a href="halaman/dapur.php"  >Bahan Dapur</a>
      </div>
    </div>
  </div>

  <div class="col-sm-3 padding-topBot20px">
    <div class="card">
      <div class="card-body text-center ">
        <a href="halaman/kantor.php"  >Kantor dan Sekolah</a>
      </div>
    </div>
  </div>

  <div class="col-sm-3 padding-topBot20px">
    <div class="card">
      <div class="card-body text-center ">
        <a href="#"  >Aksesoris</a>
      </div>
    </div>
  </div>

  <div class="col-sm-3 padding-topBot20px">
    <div class="card">
      <div class="card-body text-center ">
        <a href="halaman/obat.php"  >Obat-obatan</a>
      </div>
    </div>
  </div>
</div>

</body>
</html>
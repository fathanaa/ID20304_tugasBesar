<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
    <title>rumahtangga | edit</title>
    <style>
      a {
        color:black;
      }
      #judul{
        display: flex;
        justify-content: space-around;
        align-items: center;
        height: 100%;
      }
      .form-list{
          padding-top:47px;
      }
      .container{
          width:550px;
      }
      .felk{
          
          display:flex;
          justify-content: space-around;
      }
      .form-group{
          padding:10px;
      }
    </style>
</head>

<body>
  <header class="navbar container padding-top20px" >
    <div id="judul">
        <h3 class="padding-topBot20px">
          <a href="halaman/rt.php"> <i class="bi bi-arrow-left"></i></a>
          <h3><?php echo "edit ".$d['kode_barang'] ?></h3>
        </h3>
    </div>
  </header>

  <?php
require '../config.php';
$collection = $db->coll_rt;
$cursor = $collection->find();
$no=0;
foreach($cursor as $d){
$no++;

?>


<form method="POST" class="form-list container">
    <div class="felk">
        <div class="form-group">
            <strong>kode_barang :</strong>
            <input type="text" name="kode_barang" value="<?php echo $d["kode_barang"]; ?>" required="" class="form-control" readonly>
        </div>
        
        <div class="form-group">
            <strong>berat :</strong>
            <input type="text" name="berat" value="<?php echo $d["berat"]; ?>" required="" class="form-control" readonly>
        </div>

        <div class="form-group">
            <strong>kategori :</strong>
            <input type="text" name="kategori" value="<?php echo $d["kategori"]; ?>" required="" class="form-control" readonly>
        </div>
    </div>
    
    <div class="form-group">
        <strong>nama_barang :</strong>
        <input type="text" name="nama_barang" value="<?php echo $d["nama_barang"]; ?>" required="" class="form-control">
    </div>
    <div class="form-group">
        <strong>jumlah :</strong>
        <input type="number" name="jumlah" value="<?php echo $d["jumlah"]; ?>" required="" class="form-control">
    </div>
    <div class="form-group">
        <strong>harga :</strong>
        <input type="number" name="jumlah" value="<?php echo $d["harga"]; ?>" required="" class="form-control">
    </div>
    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-success">Submit</button>
    </div>

</form>
<?php
}
?>
</body>
</html>
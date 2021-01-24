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

<?php
if(isset($_SESSION['success'])){
  echo "<div class='alert alert-success'>".$_SESSION['success']."</div>";
}
require 'config.php';
;
?>

<body>
  <header class="navbar flex">
    <div id="judul">
        <h3><a style="color:black;" href="#">minimarket</a></h3>
    </div>
    <div id="menu">
        <ul>
            <li><a href="#">kategori</a></li>
        </ul>
    </div>
  </header>

  <div class="totalBelanja container">
    <h4>Total : </h4>
  </div>

<table class="table table-borderd container">
<tr>
  <th>No</th>
  <th>Nama Barang</th>
  <th>Gambar</th>
  <th>Berat/pcs (g)</th>
  <th>Jumlah</th>
  <th>Harga/pcs (Rp)</th>
  
</tr>
<?php
  $no=0;
 $cursor = $collection->find(
  [],
  [
    'limit'=>10,
  ]
  );
foreach($cursor as $barang) {
  $no++;
  echo "<tr>";
    echo "<td>".$no."</td>";
    echo "<td>".$barang->kode_barang."</td>";
    echo "<td>".$barang->nama_barang."</td>";
    echo "<td><img style='width:100px;' class='gambar' src='image/kb_0".$no.".jpeg'></td>";
    echo "<td>".$barang->berat."</td>";
    echo "<td>".$barang->jumlah."</td>";
    echo "<td>".$barang->harga."</td>";
    echo "<td><button class='plus' ;'>+</button><button class='min'  >-</button></td>";
  echo "</tr>";
};

?>

</table>


<style>
  .totalBelanja h4{
    padding: 20px;
}
  .plus, .min{
    padding:10px;
    font-size: 20px;
  }
</style>
</body>
</html>
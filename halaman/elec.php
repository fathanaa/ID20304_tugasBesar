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
    <title>minimarket | elektronik</title>
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

    </style>
</head>

<body>
  <header class="navbar container padding-top20px" >
    <div id="judul">
        <h3 class="padding-topBot20px">
          <a href="../index.php"> <i class="bi bi-arrow-left"></i></a>
          <h3>elektronik</h3>
        </h3>
    </div>
  </header>

<table class="table table-borderd container">
<tr>
  <th>No</th>
  <th>Kode Barang</th>
  <th>Nama Barang</th>
  <th>Gambar</th>
  <th>Berat/pcs (g)</th>
  <th>Jumlah</th>
  <th>Harga/pcs (Rp)</th>
</tr>
<?php
require '../config.php';
$collection = $db->coll_elec;
// echo "Collection 'barang' selected";
$cursor = $collection->find();
$no=0;
foreach($cursor as $d){
$no++;
?>

<tr>

  <td><?php echo $no; ?></td>
  <td><?php echo $d["kode_barang"]; ?></td>
  <td><?php echo $d["nama_barang"]; ?></td>
  <?php echo "<td><img style='width:100px;' class='gambar' src='../image/kb_".$d['kategori']."_0".$no.".jpeg'></td>"; ?>
  <td><?php echo $d["berat"]; ?></td>
  <td><?php echo $d["jumlah"]; ?></td>
  <td><?php echo $d["harga"]; ?></td>
  <td><?php echo "<a href='../edit/snack-edit.php?id=".$d["_id"]."' class='btn btn-primary'>Edit</a>"; ?></td>
  <td><?php echo "<a href='delete.php?id=".$d["kode_barang"]."' class='btn btn-danger'>Delete</a>"; ?></td>
  <td>
    
  </td>
</tr>

<?php

}
?>
</table>
</body>
</html>
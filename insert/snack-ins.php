<?php
require '../config.php';
$collection = $db->coll_snack;
// echo "Collection 'barang' selected";
$insertManyResult = $collection->insertMany([
  [
    'kode_barang'=>"KB-01",
    'nama_barang'=> "Silverqueen Coklate",
    'kategori'=> "snack",
    'berat'=> 200,
    'jumlah'=> 91,
    'harga'=> 43000
  ],
  [
    'kode_barang'=>"KB-02",
    'nama_barang'=> "Tango Vanila",
    'kategori'=> "snack",
    'berat'=> 185,
    'jumlah'=> 66,
    'harga'=> 24500
  ],
  [
    'kode_barang'=>"KB-03",
    
    'nama_barang'=> "Pota Bee",
    'kategori'=> "snack",
    'berat'=> 175,
    'jumlah'=> 121,
    'harga'=> 18000
  ],
  [
    'kode_barang'=>"KB-04",
    
    'nama_barang'=> "Jetz Choco Fiesta",
    'kategori'=> "snack",
    'berat'=> 175,
    'jumlah'=> 214,
    'harga'=> 9000
  ],
  [
    'kode_barang'=>"KB-05",
    
    'nama_barang'=> "Taro Potato BBQ",
    'kategori'=> "snack",
    'berat'=> 205,
    'jumlah'=> 24,
    'harga'=> 17600
  ],
  [
    'kode_barang'=>"KB-06",
    
    'nama_barang'=> "Cheetos Cruncy BBQ",
    'kategori'=> "snack",
    'berat'=> 200,
    'jumlah'=> 73,
    'harga'=> 19200
  ],
  [
    'kode_barang'=>"KB-07",
    
    'nama_barang'=> "Chiki Balls",
    'kategori'=> "snack",
    'berat'=> 65 ,
    'jumlah'=> 488,
    'harga'=> 1200
  ],
  [
    'kode_barang'=>"KB-08",
    
    'nama_barang'=> "Chitato BBQ",
    'kategori'=> "snack",
    'berat'=> 200,
    'jumlah'=> 68,
    'harga'=> 14500
  ]
]);

?>
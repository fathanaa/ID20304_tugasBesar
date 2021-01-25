<?php
require '../config.php';
$collection = $db->coll_rt;

$insertManyResult = $collection->insertMany([
  [
    'kode_barang'=>"KB-09",
    'nama_barang'=> "Rinso Detergen",
    'kategori'=> "rt",
    'berat'=> 780,
    'jumlah'=> 125,
    'harga'=> 34000
  ],
  [
    'kode_barang'=>"KB-10",
    'nama_barang'=> "So Klin Lemon",
    'kategori'=> "rt",
    'berat'=> 120,
    'jumlah'=> 67,
    'harga'=> 12500
  ],
  [
    'kode_barang'=>"KB-11", 
    'nama_barang'=> "Sunlight",
    'kategori'=> "rt",
    'berat'=> 155,
    'jumlah'=> 278,
    'harga'=> 9800
  ],
  [
    'kode_barang'=>"KB-12",
    'nama_barang'=> "Molto",
    'kategori'=> "rt",
    'berat'=> 217,
    'jumlah'=> 290,
    'harga'=> 32000
  ],
  [
    'kode_barang'=>"KB-13",
    'nama_barang'=> "Vanish",
    'kategori'=> "rt",
    'berat'=> 217,
    'jumlah'=> 158,
    'harga'=> 21500
  ],
  [
    'kode_barang'=>"KB-14",
    'nama_barang'=> "Bayclin Pemutih",
    'kategori'=> "rt",
    'berat'=> 415,
    'jumlah'=> 86,
    'harga'=> 42600
  ],
  [
    'kode_barang'=>"KB-15",
    'nama_barang'=> "Pepsodent Cool",
    'kategori'=> "rt",
    'berat'=> 102 ,
    'jumlah'=> 927,
    'harga'=> 11500
  ],
  [
    'kode_barang'=>"KB-16",
    'nama_barang'=> "Dettol",
    'kategori'=> "rt",
    'berat'=> 165,
    'jumlah'=> 172,
    'harga'=> 19700
  ]
]);

?>
<?php
require '../config.php';
$collection = $db->coll_dapur;

$insertManyResult = $collection->insertMany([
  [
    'kode_barang'=>"KB-025",
    'nama_barang'=> "Garam",
    'kategori'=> "dapur",
    'berat'=> 87,
    'jumlah'=> 2691,
    'harga'=> 600
  ],
  [
    'kode_barang'=>"KB-26",
    'nama_barang'=> "Masako Ayam",
    'kategori'=> "dapur",
    'berat'=> 12,
    'jumlah'=> 878,
    'harga'=> 2500
  ],
  [
    'kode_barang'=>"KB-27", 
    'nama_barang'=> "Royco Sapi",
    'kategori'=> "dapur",
    'berat'=> 13,
    'jumlah'=> 862,
    'harga'=> 2400
  ],
  [
    'kode_barang'=>"KB-28",
    'nama_barang'=> "Telur",
    'kategori'=> "dapur",
    'berat'=> 1000,
    'jumlah'=> 721,
    'harga'=> 23000
  ],
  [
    'kode_barang'=>"KB-29",
    'nama_barang'=> "Gulaku",
    'kategori'=> "dapur",
    'berat'=> 205,
    'jumlah'=> 621,
    'harga'=> 39000
  ],
  [
    'kode_barang'=>"KB-30",
    'nama_barang'=> "Kecap Bango",
    'kategori'=> "dapur",
    'berat'=> 75,
    'jumlah'=> 668,
    'harga'=> 4700
  ],
  [
    'kode_barang'=>"KB-31",
    'nama_barang'=> "Ladaku",
    'kategori'=> "dapur",
    'berat'=> 9,
    'jumlah'=> 3651,
    'harga'=> 2000
  ],
  [
    'kode_barang'=>"KB-32",
    'nama_barang'=> "Kara Santan",
    'kategori'=> "dapur",
    'berat'=> 70,
    'jumlah'=> 760,
    'harga'=> 5600
  ]
]);

?>
<?php
require '../config.php';
$collection = $db->coll_elec;

$insertManyResult = $collection->insertMany([
  [
    'kode_barang'=>"KB-017",
    'nama_barang'=> "Speaker Advance 2.0",
    'kategori'=> "elec",
    'berat'=> 500,
    'jumlah'=> 113,
    'harga'=> 80000
  ],
  [
    'kode_barang'=>"KB-18",
    'nama_barang'=> "Terminal 3 Slot",
    'kategori'=> "elec",
    'berat'=> 67,
    'jumlah'=> 81,
    'harga'=> 32000
  ],
  [
    'kode_barang'=>"KB-19", 
    'nama_barang'=> "Kabel USB",
    'kategori'=> "elec",
    'berat'=> 20,
    'jumlah'=> 971,
    'harga'=> 6000
  ],
  [
    'kode_barang'=>"KB-20",
    'nama_barang'=> "Headset Sades",
    'kategori'=> "elec",
    'berat'=> 300,
    'jumlah'=> 70,
    'harga'=> 145000
  ],
  [
    'kode_barang'=>"KB-21",
    'nama_barang'=> "Keyboard Genius",
    'kategori'=> "elec",
    'berat'=> 189,
    'jumlah'=> 16,
    'harga'=> 76000
  ],
  [
    'kode_barang'=>"KB-22",
    'nama_barang'=> "Earphone JBL",
    'kategori'=> "elec",
    'berat'=> 65,
    'jumlah'=> 517,
    'harga'=> 25000
  ],
  [
    'kode_barang'=>"KB-23",
    'nama_barang'=> "Philip Neon 5W",
    'kategori'=> "elec",
    'berat'=> 80 ,
    'jumlah'=> 62,
    'harga'=> 44000
  ],
  [
    'kode_barang'=>"KB-24",
    'nama_barang'=> "Kipas Angin Mini",
    'kategori'=> "elec",
    'berat'=> 132,
    'jumlah'=> 42,
    'harga'=> 78000
  ]
]);

?>
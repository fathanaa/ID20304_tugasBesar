<?php
require '../config.php';
$collection = $db->coll_acc;

$insertManyResult = $collection->insertMany([
  [
    'kode_barang'=>"KB-041",
    'nama_barang'=> "Pulpen Joyko",
    'kategori'=> "acc",
    'berat'=> 12,
    'jumlah'=> 7589,
    'harga'=> 3500
  ],
  [
    'kode_barang'=>"KB-42",
    'nama_barang'=> "Tipe X",
    'kategori'=> "acc",
    'berat'=> 14,
    'jumlah'=> 2152,
    'harga'=> 6000
  ],
  [
    'kode_barang'=>"KB-43", 
    'nama_barang'=> "Pencil 2B",
    'kategori'=> "acc",
    'berat'=> 6,
    'jumlah'=> 7110,
    'harga'=> 6000
  ],
  [
    'kode_barang'=>"KB-44",
    'nama_barang'=> "Penghapus",
    'kategori'=> "acc",
    'berat'=> 10,
    'jumlah'=> 8590,
    'harga'=> 2500
  ],
  [
    'kode_barang'=>"KB-45",
    'nama_barang'=> "Stabilo",
    'kategori'=> "acc",
    'berat'=> 33,
    'jumlah'=> 194,
    'harga'=> 7000
  ],
  [
    'kode_barang'=>"KB-46",
    'nama_barang'=> "Steples",
    'kategori'=> "acc",
    'berat'=> 140,
    'jumlah'=> 82,
    'harga'=> 12000
  ],
  [
    'kode_barang'=>"KB-47",
    'nama_barang'=> "Buku Tulis 38",
    'kategori'=> "acc",
    'berat'=> 42,
    'jumlah'=> 620,
    'harga'=> 4000
  ],
  [
    'kode_barang'=>"KB-48",
    'nama_barang'=> "Crayon",
    'kategori'=> "acc",
    'berat'=> 82,
    'jumlah'=> 422,
    'harga'=> 27800
  ]
]);

?>
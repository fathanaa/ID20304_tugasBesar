<?php
require '../config.php';
$collection = $db->coll_kantor;

$insertManyResult = $collection->insertMany([
  [
    'kode_barang'=>"KB-033",
    'nama_barang'=> "Pulpen Joyko",
    'kategori'=> "kantor",
    'berat'=> 12,
    'jumlah'=> 7589,
    'harga'=> 3500
  ],
  [
    'kode_barang'=>"KB-34",
    'nama_barang'=> "Tipe X",
    'kategori'=> "kantor",
    'berat'=> 14,
    'jumlah'=> 2152,
    'harga'=> 6000
  ],
  [
    'kode_barang'=>"KB-35", 
    'nama_barang'=> "Pencil 2B",
    'kategori'=> "kantor",
    'berat'=> 6,
    'jumlah'=> 7110,
    'harga'=> 6000
  ],
  [
    'kode_barang'=>"KB-36",
    'nama_barang'=> "Penghapus",
    'kategori'=> "kantor",
    'berat'=> 10,
    'jumlah'=> 8590,
    'harga'=> 2500
  ],
  [
    'kode_barang'=>"KB-37",
    'nama_barang'=> "Stabilo",
    'kategori'=> "kantor",
    'berat'=> 33,
    'jumlah'=> 194,
    'harga'=> 7000
  ],
  [
    'kode_barang'=>"KB-38",
    'nama_barang'=> "Steples",
    'kategori'=> "kantor",
    'berat'=> 140,
    'jumlah'=> 82,
    'harga'=> 12000
  ],
  [
    'kode_barang'=>"KB-39",
    'nama_barang'=> "Buku Tulis 38",
    'kategori'=> "kantor",
    'berat'=> 42,
    'jumlah'=> 620,
    'harga'=> 4000
  ],
  [
    'kode_barang'=>"KB-40",
    'nama_barang'=> "Crayon",
    'kategori'=> "kantor",
    'berat'=> 82,
    'jumlah'=> 422,
    'harga'=> 27800
  ]
]);

?>
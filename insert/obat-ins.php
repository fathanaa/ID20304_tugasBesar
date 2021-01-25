<?php
require '../config.php';
$collection = $db->coll_obat;

$insertManyResult = $collection->insertMany([
  [
    'kode_barang'=>"KB-49",
    'nama_barang'=> "Hufagrip",
    'kategori'=> "obat",
    'berat'=> 132,
    'jumlah'=> 49,
    'harga'=> 14200
  ],
  [
    'kode_barang'=>"KB-50",
    'nama_barang'=> "Mixagrip",
    'kategori'=> "obat",
    'berat'=> 8,
    'jumlah'=> 6621,
    'harga'=> 7400
  ],
  [
    'kode_barang'=>"KB-51", 
    'nama_barang'=> "Panadol Merah",
    'kategori'=> "obat",
    'berat'=> 10,
    'jumlah'=> 10922,
    'harga'=> 4900
  ],
  [
    'kode_barang'=>"KB-52",
    'nama_barang'=> "Sanmol",
    'kategori'=> "obat",
    'berat'=> 45,
    'jumlah'=> 871,
    'harga'=> 15400
  ],
  [
    'kode_barang'=>"KB-53",
    'nama_barang'=> "OBH",
    'kategori'=> "obat",
    'berat'=> 78,
    'jumlah'=> 280,
    'harga'=> 16900
  ],
  [
    'kode_barang'=>"KB-54",
    'nama_barang'=> "Fix Formula 44",
    'kategori'=> "obat",
    'berat'=> 4,
    'jumlah'=> 7099,
    'harga'=> 4800
  ],
  [
    'kode_barang'=>"KB-55",
    'nama_barang'=> "Neozep",
    'kategori'=> "obat",
    'berat'=> 12,
    'jumlah'=> 6021,
    'harga'=> 5400
  ],
  [
    'kode_barang'=>"KB-56",
    'nama_barang'=> "Betadine Kumur",
    'kategori'=> "obat",
    'berat'=> 96,
    'jumlah'=> 577,
    'harga'=> 28400
  ]
]);

?>
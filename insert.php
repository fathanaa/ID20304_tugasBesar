<?php
require 'config.php';

$insertManyResult = $collection->insertMany([
  [
    'kode_barang'=>"KB-01",
    'kode_produsen'=>"Produsen-01",
    'nama_barang'=> "Silverqueen Coklate",
    'berat'=> 200,
    'kategori_barang'=> ["Snack","Makanan Ringan"],
    'jumlah'=> 91,
    'harga'=> 43000
  ],
  [
    'kode_barang'=>"KB-02",
    'kode_produsen'=>"Produsen-02",
    'nama_barang'=> "Tango Vanila",
    'berat'=> 185,
    'kategori_barang'=> ["Snack","Makanan Ringan"],
    'jumlah'=> 66,
    'harga'=> 24500
  ],
  [
    'kode_barang'=>"KB-03",
    'kode_produsen'=>"Produsen-03",
    'nama_barang'=> "Pota Bee",
    'berat'=> 175,
    'kategori_barang'=> ["Snack","Makanan Ringan"],
    'jumlah'=> 121,
    'harga'=> 18000
  ]
]);

?>
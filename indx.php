<?php

require('./Propertyconstant.php');

use Pbo\Marketplace\produk;

// object
$produk = new produk();

$produk->setkode("p001")
->setnama("Laptop")
->setharga(1000000)
->setstok(5);

// output
echo "produk: ".$produk->getNama();
echo "<br/>";

echo "harga: ".$produk->getHarga();
echo "<br/>";

echo "stok: ".$produk->getStok();
echo "<br/>";

echo "pajak: ".$produk->pajak() . "%";
echo "<br/>";

echo "total harga setelah pajak: Rp." . $produk->total();
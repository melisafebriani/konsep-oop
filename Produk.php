<?php

class Produk {

    public $judul = "judul",
            $penulis = "penulis", 
            $penerbit = "penerbit",
            $harga = 0;


   public function getLabel()

   {

      return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
   }

} 

$produk1 = new Produk();
$produk1->judul = "Hujan";
$produk1->penulis = "Tere Liye";
$produk1->penerbit = "Gramedia";
$produk1->harga = 40000;

echo "<hr>";

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 25000;

echo "Komik: " . $produk1->getLabel();
// echo "Komik: " . $produkaja->getLabel();
echo "<br>";
echo "Game: " . $produk4->getLabel();






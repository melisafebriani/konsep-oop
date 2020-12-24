<?php

class Produk {

    public $judul,
            $penulis , 
            $penerbit ,
            $harga ;

   public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){ //variable lokal

      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;

   } 


   public function getLabel()

   {

      return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
   }

} 

$produk1 = new Produk("Hujan","Tere Liye", "Gramedia",40000);
echo "<hr>";
$produk2 = new Produk("Uncharted","Neil Druckmann", "Sony Computer",20000);

$produk3 = new Produk("Pelangi");


echo "Komik: " . $produk1->getLabel();
echo "<br>";
echo "Game: " . $produk2->getLabel();
echo "<br>";

var_dump($produk3);
echo "Game: " . $produk2->getLabel();





<?php

/* KITA BISA MEMBUAT OBJECT DENGAN TIPE DATA SENDIRI,
   POIN NYA ADA DI PARAMETER CETAKINFO PRODUK

   MEMBUAT CLASS BARU LAGI DIGUNAKAN UNTUK MENAMPILKAN
*/

class Produk {

    public $judul,
            $penulis, 
            $penerbit,
            $harga;

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

class CetakInfoProduk {
   public function cetak(Produk $produk ){ //tipe produk yang menerima spesifikasi class produk, jadi bacanya class cetak hanya menerima parameter yang jenisnya class produk lalu object nya $produk

      $string = " GTA | {$produk->getLabel()}, (Rp. {$produk->harga})";

      return $string;
   }
}

$produk1 = new Produk("Hujan","Tere Liye", "Gramedia",40000);
echo "<hr>";
$produk2 = new Produk("Uncharted","Neil Druckmann", "Sony Computer",20000);

echo "Komik: " . $produk1->getLabel();
echo "<br>";
echo "Game: " . $produk2->getLabel();
echo "<br>";

$infoProduk1 = new CetakInfoProduk(); //object infoProduk1 instansiasi dari class CetakInfoProduk

echo $infoProduk1->cetak($produk2); //mencetak function cetak yang parameternya instans dari produk2






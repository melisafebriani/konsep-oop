<?php
/*DIMANA NANTI SUDY KASUS YANG MEMBUTUHKAN
INHERITANCE*/

class Produk {

    public  $judul,
            $penulis, 
            $penerbit,
            $harga,
            $jumlahHalaman, //jumlah halaman milik komik
            $waktuMain,
            $tipe;

   public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0, $waktuMain = 0, $tipe){

      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
      $this->jumlahHalaman = $jumlahHalaman;
      $this->waktuMain = $waktuMain;
      $this->tipe = $tipe;

   } 



   public function getLabel()

   {

      return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
   }


   public function getInfoLengkap(){ //
      //cara ngambil komik gimana ?
      $str = "{$this->tipe} : {$this->getLabel()}";
      if( $this->tipe == "Komik") {
         $str .= " - {$this->jumlahHalaman} Halaman.";
      } else {
         $str .= " ~ {$this->waktuMain} Jam.";
      }

      return $str;
   }


} 

class CetakInfoProduk {
   public function cetak(Produk $produk ){ //tipe produk yang menerima spesifikasi class produk, jadi bacanya class cetak hanya menerima parameter yang jenisnya class produk lalu object nya $produk

      $string = "{$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";

      return $string;
   }
}

$produk1 = new Produk("Hujan","Tere Liye", "Gramedia",40000, 100, null, "Komik" );
echo "<hr>";
$produk2 = new Produk("Uncharted","Neil Druckmann", "Sony Computer",20000, 0, 50, "Game");


echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
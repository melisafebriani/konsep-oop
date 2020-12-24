<?php
/*
STUDY KASUS
kategori :  komik dan game
parent class : Produk
child class : komik dan game

*/

class Produk {

    public  $judul,
            $penulis, 
            $penerbit,
            $harga,
            $jumlahHalaman, 
            $waktuMain;

   public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0, $waktuMain = 0){

      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
      $this->jumlahHalaman = $jumlahHalaman;
      $this->waktuMain = $waktuMain;
   } 

   public function getLabel()

   {

      return " $this->penulis, $this->penerbit";
   }

   public function getInfoProduk(){ 
      //cara ngambil komik gimana ?
      $str = "{$this->judul} : {$this->getLabel()} (Rp. {$this->harga})";
      return $str;
   }


} 
/*==================================================================*/

class Komik extends Produk
{

         public function getInfoProduk(){ //ini untuk manggil getInfoProduk khusus yang komik aja
            $str = "Komik : " . parent::getInfoProduk() . " - {$this->jumlahHalaman} Halaman.";

            return $str;
   }

}

/*===============================================================================*/

class Game extends Produk
{
         public function getInfoProduk(){ //ini untuk manggil getInfoProduk khusus yang komik aja
            $str = "Game : {$this->getLabel()} (Rp. {$this->harga} ~ {$this->waktuMain} Jam.";

             return $str;
   }

}

/*-----------------------------------------------------------------------------------------------------*/


class CetakInfoProduk {
   public function cetak(Produk $produk ){ 

      $string = "{$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";

      return $string;
   }
}


/*===========================================================================================*/


$produk1 = new Komik("Hujan","Tere Liye", "Gramedia",40000, 100, null);
echo "<hr>";
$produk2 = new Game("Uncharted","Neil Druckmann", "Sony Computer",20000, 0, 50);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

<?php
/*
STUDY KASUS
JANGAN MEMBIARKAN SESUATU DI LUAR CLASS MEMODIFIKASI ISI DARI PROPERTY KITA,KL MEMANG KITA NGGA MAU ITU 

*/

class Produk {

    public  $judul,
            $penulis, 
            $penerbit;



   protected $harga;

   public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 00){

      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
   } 

   public function getLabel()

   {

      return " $this->penulis, $this->penerbit";
   }

   public function getInfoProduk(){ 
      //cara ngambil komik gimana ?
      $str = "{$this->judul} ... {$this->getLabel()} (Rp. {$this->harga})";
      return $str;
   }

} 
/*==================================================================*/

class Komik extends Produk
{
    public $jumlahHalaman;

          public function __construct($judul , $penulis, $penerbit  ,$harga , $jumlahHalaman ) {
               parent::__construct($judul, $penulis , $penerbit, $harga );

               $this->jumlahHalaman = $jumlahHalaman;

          }

         public function getInfoProduk(){ //method ini digunakan untuk menampilkan informasi lengkap dari sebuah produk ~ komik
            $str = "Komik : " . parent::getInfoProduk() . " - {$this->jumlahHalaman} Halaman.";

            return $str;
   }

}

/*===============================================================================*/

class Game extends Produk
{
   public $waktuMain;

         public function __construct($judul, $penulis , $penerbit , $harga , $waktuMain){

               parent::__construct($judul , $penulis, $penerbit , $harga );

               $this->waktuMain = $waktuMain;
         }

        public function getHarga() {
         return $this->
        }

         public function getInfoProduk(){ //method ini digunakan untuk menampilkan informasi lengkap dari sebuah produk - game
            $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";

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
echo "<hr>";

echo $produk2->getHarga();
  
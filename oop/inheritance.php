<?php

class Produk {
    public $judul,
        $penulis,
        $penerbit,
        $harga,

    public function _construct($judul = 'judul', $penulis = 'penulis', $penerbit ='penerbit', $harga = 0){
        //echo "Hello"
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    public function getLabel(){
        return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
        //return $this->judul .','. $this->penulis;

    }
    public function getInfoProduk(){
        $str = "$this->judul : $this->penulis, $this->penerbit (Rp.$this->harga,-)";
        return $str;
    }
}
class Komik extends Produk {
    public $jmlHalaman;

    public function _construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $jmlHalaman = 0){
        //$this->judul = $judul;
        //$this->penulis = $penulis;
        //$this->penerbit = $penerbit;
        //$this->harga = $harga;
        //$this->jmlHalaman = $jmlHalaman;

        parent::_construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman=$jmlHalaman;
    }

    public function getInfoProduk(){
        $str = "Komik" . parent::getInfoProduk()."-$this->jmlHalaman Halaman";
        return $str; 
    }
}
class Game extends Produk {
    public $waktumain;

    public function _construct($judul = 'judul', $penulis ='penulis', $penerbit = 'penerbit', $harga = 0, $waktumain = 0) {
        //$this->judul = $judul;
        //$this->penulis = $penulis;
        //$this->penerbit = $penerbit;
        //$this->harga = $harga;
        //$this->waktuMain = $waktuMain;
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain=$waktuMain; 
    }
    public function getInfoProduk() {
        $str = "Game" . parent::getInfoProduk() . " - $thiis->waktuMain Jam";
        return $str;
    }
}

class CetakInfoProduk {
    public function cetak(Produk $produk) {
        $str = "$produk->judul $produk->penuis, $produk->penerbit (Rp.$produk->harga) - $produk->waktuMain Jam";
        return $str;
    }
}

$produk1 = new Komik("Naruto", "Masahi Nishimoto", "Erlangga", 10000, 150);
$produk2 = new Game("Uncharted", "Neil", "Pusaka Ilmu", 50000, 50);
$produk3 = new Produk("Doraemon", "Faisal", "Tri Suaka");
$produk4 = new Produk();

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";
echo $produk3->getInfoProduk();

//$infoproduk = new CetakInfoProduk();
//echo $infoproduk->cetak($produk1);
//echo "Naruto / Masahi Nishimoto, Erlangga (Rp.30000)";
?>
   
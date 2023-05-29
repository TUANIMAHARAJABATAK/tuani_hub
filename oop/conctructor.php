<?php

class Produk {
    public 
    $judul, 
    $penulis, 
    $penerbit, 
    $harga;

public function_construct(){
    echo "Hello";
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $harga->harga = $harga;
}
public function getlabel()  {
    return "$diss->judul";
    //return this ->judul
    }
}

$produk1 = new Produk(); 
$produk1 ->judul1 ="Naruto";
$produk1 ->judul1 ="Suwardi";

$produk2 = new Produk();
$produk2 = judul = "Atttack On Titan";
$produk2-> penulis = "Tuani"

var_dump($produk1);
var_dump($produk2);

//var_dump($produk1)
//var_dump($produk2)

echo $produk1->getlabel();
echo "<br>";
echo $produk2->getlabel();
?>
<?php
class CetaInfoProduk {
    public function cetak (Produk $produk){
        $str = "$produk->judul $produk->penulis, $produk->penerbit-(Rp.$produk->harga)"
        
    }
}
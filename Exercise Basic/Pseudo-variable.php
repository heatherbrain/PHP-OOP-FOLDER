<?php 
class produk {
    public $jenis;
    public $merek;
    public $stok;

    public function pesanProduk(){
        $this->stok = $this->stok - 1;
    }

    public function cekStok(){
        return "Sisa Stock:" . $this->stok . "<br>";
    }
}

$produk01 = new produk();
$produk01->jenis = "Televisi";
$produk01->merek = "Samsung";
$produk01->stok = 54;

echo $produk01->cekStok();

$produk01->pesanProduk();
$produk01->pesanProduk();
$produk01->pesanProduk();

echo $produk01->cekStok();

?>
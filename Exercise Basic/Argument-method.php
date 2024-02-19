<?php 
class produk {
    public $jenis;
    public $merek;
    public $stok;

    public function tambahstok($jumlah = 10){
 
        $totalstok = $this->stok + $jumlah;

        if ($totalstok <= 100){
            $this->stok= $totalstok;
            $pesan = "Stok Berhasil di tambah <br>";
            $pesan .= "Jumlah stok saat ini: ". $this->stok."<br>";
        }
        else{
            $pesan = "Maaf stok sudah penuh. Penambahan stok dibatalkan <br>";
            $pesan .= "Jumlah stok saat ini: ".$this->stok."<br>";
        } return $pesan;
    }
}

$produk01 = new produk();
$produk01->jenis = "Televisi";
$produk01->merek = "Samsung";
$produk01->stok = 54;

echo $produk01->tambahstok();
echo "<br>";
echo $produk01->tambahstok(20);
echo "<br>";
echo $produk01->tambahstok(15);

?>
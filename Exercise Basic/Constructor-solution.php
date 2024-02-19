<?php 
class produk {
    public $jenis;
    public $merek;
    public $stok;

    public function __construct($a, $b, $c){
        $this->jenis = $a;
        $this->merek = $b;
        $this->stok = $c;
    }
}

$produk01 = new produk("Televisi", "Samsung", 20);
$produk02 = new produk("Mesin Cuci", "LG", 10);

print_r ($produk01);
echo "<br>";
print_r ($produk02);

?>
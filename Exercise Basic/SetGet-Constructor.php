<?php 
   class produk {
    private $sku = "";
    private $stok = 0;

    private function setSku ($sku){
        if (preg_match("/^[A-Z]{3}[0-9]{3}$/", $sku)){
            $this->sku = $sku;
        } else {
            die("Error: sku harus 6 digit (3 huruf dan 3 angka), seperti AAA000");
        }
    }
    private function setStok ($stok){
        if(is_int($stok) && ($stok>0)){
            $this->stok = $stok;
        } else {
            die("Error: stok harus angka bulat positif <br>");
        }
    }
   
    public function __construct($sku,$stok){
        $this->setSku($sku);
        $this->setStok($stok);
    }

    public function getsku(){
        return $this->sku;
    }

    public function getstok(){
        return $this->stok;
    }
   }

   $produk01 = new produk ('ABC012', 10);
   echo "Stok produk ".$produk01->getsku().": ".$produk01->getstok()." buah";
?>
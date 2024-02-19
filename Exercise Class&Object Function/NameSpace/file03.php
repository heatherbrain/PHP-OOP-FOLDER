<?php 

namespace Elektronik;

class Televisi {
    private $merek;
    private $harga;
    public function __construct($merek, $harga){
        $this->merek = $merek;
        $this->harga = $harga;
    }
    public function getInfo(){
        return "Televisi ".$this->merek.", Harga: ".$this->harga;
    }
}

?>
<?php 
// namespace Elektronik\Komputer;
include("file02.php");
include("file03.php");

$produk1 = new Elektronik\Komputer\Laptop("Vivobook");
echo $produk1->getInfo();
echo "<br/>";
$produk2 = new Elektronik\Televisi("Samsung", 10000000);
echo $produk2->getInfo();

?>
<?php 

$mysqli = new mysqli("localhost", "root", "", "ilkoom");

$query = "SELECT * FROM food";
$result = $mysqli->query($query);

$i=0;
while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $arr[$i]['id_makanan'] = $row['id_makanan'];
    $arr[$i]['nama_makanan'] = $row['nama_makanan'];
    $arr[$i]['jumlah_makanan'] = $row['jumlah_makanan'];
    $arr[$i]['harga_makanan'] = $row['harga_makanan'];
    $arr[$i]['tanggal_update'] = $row['tanggal_update'];
    $i++;
}
$result->free();

echo "<pre>";
print_r($arr);
echo "</pre>";

?>
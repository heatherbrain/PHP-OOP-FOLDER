<?php 
require 'input.php';

if(!empty($_POST)){
    echo input::get('nama_barang'). "<br>";
    echo input::get('jumlah_barang'). "<br>";
    echo input::get('harga_barang'). "<br>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "post">
        <div>
             <label for="nama_barang">Nama barang</label>
             <input type="text" name = "nama_barang" value="<?php echo input::get('nama_barang') ?>">
        </div>
        <div>
        <label for="jumlah_barang">Jumlah barang</label>
             <input type="text" name = "jumlah_barang" value="<?php echo input::get('jumlah_barang') ?>">
        </div>
        <div>
        <label for="harga_barang">Harga barang</label>
             <input type="text" name = "harga_barang" value="<?php echo input::get('harga_barang') ?>">
        </div>
        <div>
            <input type="submit" value = "submit">
        </div>
    </form>
</body>
</html>
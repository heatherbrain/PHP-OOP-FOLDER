<?php
mysqli_report(MYSQLI_REPORT_STRICT);

try {
  $mysqli = new mysqli("localhost", "root", "","ilkoom");

  // Ambil semua data di tabel barang
  $query = "SELECT * FROM food";
  $result = $mysqli->query($query);
  $arr = $result->fetch_all(MYSQLI_ASSOC);
  $result->free();
}
catch (Exception $e) {
  echo "Koneksi / Query bermasalah: ".$e->getMessage(). " (".$e->getCode().")";
}
finally {
  if (isset($mysqli)) {
    $mysqli->close();
  }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Menampilkan Tabel MySQL</title>
</head>
<style>
  table {
    border-collapse: collapse;
    margin: 0 auto;
  }
  td, th {
    border-bottom: 1px solid black;
  }
  th, td {
    padding: 10px 15px;
  }
  tr:nth-child(even) {background-color: #f2f2f2};
</style>
<body>
<table>
  <tr>
    <th>ID</th>
    <th>Nama</th>
    <th>Stok</th>
    <th>Harga</th>
    <th>Update</th>
  </tr>
  <?php foreach ($arr as $key => $val) {?>
  <tr>
    <td><?php echo $val['id_makanan']; ?></td>
    <td><?php echo $val['nama_makanan']; ?></td>
    <td><?php echo $val['jumlah_makanan']; ?></td>
    <td><?php echo $val['harga_makanan']; ?></td>
    <td><?php echo $val['tanggal_update']; ?></td>
  </tr>
  <?php } ?>
</table>
</body>
</html>
<?php
mysqli_report(MYSQLI_REPORT_STRICT);

try {
  $mysqli = new mysqli("localhost", "root", "","ilkoom");
  
  // Tampilkan semua data di tabel barang
  $query = "DELETE FROM food WHERE id_makanan = 3";
  $mysqli->query($query);
}
catch (Exception $e) {
  echo "Koneksi / Query bermasalah: ".$e->getMessage(). " (".$e->getCode().")";
}
finally {
  if (isset($mysqli)) {
    $mysqli->close();
  }
}
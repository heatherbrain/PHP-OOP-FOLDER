<?php 
try {
    $pdo = new PDO("mysql:host=localhost;dbname=ilkoom", "root", "",);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "SELECT * FROM mahasiswa";
    $stmt = $pdo->query($query);

    $mahasiswaData = $stmt->fetchAll(PDO::FETCH_NUM);

 } catch(PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
 }
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Menampilkan Tabel</title>
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
    <th>Nim</th>
    <th>Nama</th>
    <th>Tempat Lahir</th>
    <th>Tanggal Lahir</th>
    <th>Fakultas</th>
  </tr>
  <?php foreach ($mahasiswaData as $key => $val) {?>
  <tr>
    <td><?php echo $val[0]; ?></td>
    <td><?php echo $val[1]; ?></td>
    <td><?php echo $val[2]; ?></td>
    <td><?php echo $val[3]; ?></td>
    <td><?php echo $val[4]; ?></td>
  </tr>
  <?php } ?>
</table>
</body>
</html>
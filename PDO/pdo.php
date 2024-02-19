<?php 
try {
   $pdo = new PDO("mysql:host=localhost;dbname=ilkoom", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch(PDOException $e) {
   die('Connection failed: ' . $e->getMessage());
}

$query = "CREATE DATABASE IF NOT EXISTS ilkoom";
  $stmt = $pdo->query($query);
  if ($stmt !== FALSE){
    echo "Database 'ilkoom' berhasil di buat / sudah tersedia <br>";
  }

$query = "USE ilkoom";
   $stmt = $pdo->query($query);
   if ($stmt !== FALSE){
      echo "Database 'ilkoom' berhasil dipilih <br>";
    }

$query = "DROP TABLE IF EXISTS mahasiswa";
   $stmt = $pdo->query($query);
   
   $query = "CREATE TABLE mahasiswa (
      nim CHAR(8) PRIMARY KEY,
      nama VARCHAR(50),
      tempat_lahir VARCHAR(50),
      tanggal_lahir DATE,
      fakultas VARCHAR(50))";
   $stmt = $pdo->query($query);
   if ($stmt !== FALSE){
      echo "Berhasil membuat table <br>";
    }

   $query = "INSERT INTO mahasiswa VALUES 
   ('12345678', 'Zia Athifa', 'rumah sakit', '2008-09-12', 'RPL'),
   ('13579246', 'Zia Athifa', 'rumah sakit', '2008-09-12', 'RPL')";
   $stmt = $pdo->query($query);
   if ($stmt !== FALSE){
      echo "Berhasil menambahkan data <br>";
    }

    echo "<hr>";

try {
   $query = "SELECT * FROM mahasiswa";
      $stmt = $pdo->query($query);
   
   while ($row = $stmt->fetch(PDO::FETCH_NUM)){
      echo $row[0]. " | ".$row[1]. " | ".$row[2]." | ".$row[3]." | ".$row[4];
      echo "<br>";
   }
   
}

?>



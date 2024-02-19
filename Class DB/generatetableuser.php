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

$query = "DROP TABLE IF EXISTS user";
   $stmt = $pdo->query($query);
   
   $query = "CREATE TABLE user (
      username VARCHAR(50) PRIMARY KEY,
      password VARCHAR(255),
      email VARCHAR(100))";
   $stmt = $pdo->query($query);
   if ($stmt !== FALSE){
      echo "Berhasil membuat table <br>";
    }
   

?>



 <?php
 mysqli_report(MYSQLI_REPORT_STRICT);

 try {
  $mysqli = new mysqli("localhost", "root", "");
  
  // Buat database "ilkoom" (jika belum ada)
   $query = "CREATE DATABASE IF NOT EXISTS ilkoom";
   $mysqli->query($query);
   if ($mysqli->error){
     throw new Exception($mysqli->error, $mysqli->errno);
   }
   else {
     echo "Database 'ilkoom' berhasil di buat / sudah tersedia <br>";
   };
 
   // Pilih database "ilkoom"
   $mysqli->select_db("ilkoom");
   if ($mysqli->error){
     throw new Exception($mysqli->error, $mysqli->errno);
   }
   else {
     echo "Database 'ilkoom' berhasil di pilih <br>";
   };
 
   $query = "DROP TABLE IF EXISTS food";
   $mysqli->query($query);
   if($mysqli->error){
    throw new Exception($mysqli->error, $mysqli->errno);
   }

   $query = "CREATE TABLE food (
             id_makanan INT PRIMARY KEY AUTO_INCREMENT,
             nama_makanan VARCHAR(50),
             jumlah_makanan INT,
             harga_makanan DEC,
             tanggal_update TIMESTAMP)";

    $mysqli->query($query);
    if($mysqli->error){
      throw new Exception($mysqli->error, $mysqli->errno);
    }
    else {
      echo "Table berhasil dibuat <br>";
    }

    $now = new DateTime('now', new DateTimeZone("Asia/Jakarta"));
    $timestamp = $now->format('Y-m-d H:i:s');

    $query = "INSERT INTO food
          (nama_makanan, jumlah_makanan, harga_makanan, tanggal_update) VALUES
          ('Bakso Bakar', 10, 10000,'$timestamp'),
          ('Bakso Goreng', 10, 10000,'$timestamp'),
          ('Mie Kuah', 1, 10000,'$timestamp'),
          ('Mie Goreng', 1, 10000,'$timestamp');";

   $mysqli->query($query);
  if ($mysqli->error){
    throw new Exception($mysqli->error, $mysqli->errno);
  }
  else {
    echo "Tabel 'barang' berhasil di isi <br>";
  };

}
catch (Exception $e) {
  echo "Koneksi / Query bermasalah: ".$e->getMessage(). " (".$e->getCode().")";
}
finally {
  if (isset($mysqli)) {
    $mysqli->close();
  }
}

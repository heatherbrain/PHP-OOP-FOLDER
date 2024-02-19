<?php 
require 'dbconnect.php';
$DB = DB::getInstance();

// $result = $DB->insert('user', [
//             'username' => 'alex',
//             'password' => 'alex123',
//             'email' => 'alex@gmail.com'
//             ]);

//             if($result) {
//                 echo "Terdapat ".$DB->count()." data yang ditambah";
//                 // Terdapat 1 data yang ditambah
//               }

    $result = $DB->get('user');

    echo "<pre>";
    print_r($result);
    echo "</pre>";

    $tableuser = $DB->get('user');

    foreach ($tableuser as $user) {
      echo "$user->username | $user->password | $user->email <br>";
    }
    
    echo "<hr>";
    
    $DB->select('username, email');
    $tableuser = $DB->get('user');

    foreach ($tableuser as $user) {
        echo "$user->username | $user->email <br>";
    }

    echo "<hr>";

    $result = $DB->update('user',['email' => 'alex999@gmail.com'],
                     ['username','=','alex']);

    if($result) {
        echo "Terdapat ".$DB->count()." data yang diupdate";
    }

    echo "<hr>";

    $tabelUser = $DB->getWhereOnce('user',['username','=','alex']);
        echo "$user->username | $user->email <br>";

    echo "<hr>";

    $result = $DB->delete('user',['username','=','alex']);

    if($result) {
        echo "Terdapat ".$DB->count()." data yang dihapus";
    }

?>
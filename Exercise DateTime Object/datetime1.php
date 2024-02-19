<?php 
$now = new DateTime(null, new DateTimeZone('Asia/Jakarta'));
$periode = new DateInterval('P1000D');
echo $now->add($periode)->format('l, j F Y H:i:s');

echo "<br/>";

$independencedate = new DateTime('17-08-1945 10:30', new DateTimeZone('Asia/Jakarta'));
$periode = new DateInterval('P9Y9M9DT9H9M9S');
echo $independencedate->add($periode)->format('l, j F Y H:i:s');

?>
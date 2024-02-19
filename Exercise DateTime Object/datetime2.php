<?php

date_default_timezone_set("Asia/Jakarta");

$now = new DateTime();
$born = new DateTime('12-09-2008 20:45');

$format = '%y tahun %m bulan %d hari %h jam %i menit %s detik';
echo $now->diff($born)->format($format);

?>
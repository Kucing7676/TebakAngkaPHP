<?php
session_start();
include('cek.php');

echo "<h1>Homepage</h1>";
// menampilkan nama lengkap usernya
echo "<p>Hallo selamat datang ".$_COOKIE['namauser']."</p>";
// tampilkan jumlah kunjungan saat ini = jumlah visit sebelumnya + 1
echo "<p>Ini kunjungan Anda yang ke-".($_COOKIE['visits']+1)."</p>";
// tampilkan datetime kunjungan sebelumnya, baca dari cookie
echo "<p>Kunjungan Anda sebelumnya adalah pada tanggal ".$_COOKIE['lastvisit']."</p>";

// setelah cookie sebelumnya dibaca, lakukan update cookie yang baru
date_default_timezone_set('Asia/Bangkok');
setcookie("namauser", $_COOKIE['namauser'], time()+3*30*24*3600,"/");
setcookie("visits", $_COOKIE['visits'], time()+3*30*24*3600,"/");
setcookie("lastvisit", date("d-m-Y H:i:s"), time()+3*30*24*3600,"/");

echo "<h2>Menu Utama</h2>";
echo "<p><a href='logout.php'>Logout</a></p>";

?>
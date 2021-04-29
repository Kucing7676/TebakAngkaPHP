<?php
session_start();
// bagian yang dieksekusi ketika pengunjung submit nama
if (isset($_POST['submit'])){
    //mengeset zona waktu, agar waktu kunjungan sesuai
    date_default_timezone_set('Asia/Bangkok');
	// mengeset cookie namauser dari namanya, lama cookie 3 bulan
	setcookie("namauser", $_POST['namauser'], time()+3*30*24*3600,"/");
	// mengeset cookie jumlah kunjungan -> 0 (mula-mula)
	setcookie("visits", 0, time()+3*30*24*3600,"/");
	// mengeset cookie kunjungan terakhir
	setcookie("lastvisit", date("d-m-Y H:i:s"), time()+3*30*24*3600,"/");
	// setelah mengeset cookie awal di atas, redirect ke halaman depan myapp.php
	header("Location:myapp.php");
}

// jika sudah ada cookie namauser
if (isset($_COOKIE['namauser'])){
	header("Location: homepage.php");
} else {
	// jika cookie username belum ada, munculkan form
?>
	<h1>Welcome to my site</h1>
	<p>Ini kunjungan Anda pertama kali di situs ini ya?</p>
	<p>Kita kenalan dulu ya, silakan masukkan nama Anda</p>
	<form method="post" action="myapp.php">
		Nama Anda <input type="text" name="namauser">
		<input type="submit" name="submit" value="Submit">
	</form>	
<?php	
}

?>
<?php
session_start();
// daftar users
$users = array(
			array("username1", "123456"),
			array("username2", "654321"),
			array("username3", "112233")
		 );

// jika form login sudah submitted
if (isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	// proses pengecekan ada tidaknya username dan password 
	// dalam daftar user
	foreach ($users as $profile_user) {
		if (($profile_user[0] == $username) && ($profile_user[1] == $password)) {
			// jika ada yg match maka bikin session untuk simpan nama user
			$_SESSION['user'] = $profile_user[0];
			// redirect halaman ke page1.php
			header("Location: myapp.php");
		}
	}

	// jika tidak ada username dan password yg match
	echo "<h3>Login gagal</h3>";
	echo "<p>Silakan <a href='form.html'>login kembali</a></p>";
}

?>

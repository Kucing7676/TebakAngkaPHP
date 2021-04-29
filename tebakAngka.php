<?php
if (isset($_POST['submit'])){
    if (isset($_COOKIE['angka'])) {
        if ($_POST['tebakan'] == $_COOKIE['angka']) {
            echo "<p>Selamat ya… Anda benar, saya telah memilih bilangan ".$_COOKIE['angka'].".</p>";
            echo "<p><a href='set.php'>Ulang Lagi</a></p>";
        } else if ($_POST['tebakan'] > $_COOKIE['angka']) {
            echo "<p>Waaah… masih salah ya, bilangan tebakan Anda terlalu tinggi.</p>";
            echo "<form action='' method='post'>
                        Bilangan tebakan Anda <input type='number' name='tebakan'>
                        <input type='submit' name='submit' value='Submit'>
                </form>";
        } else if ($_POST['tebakan'] < $_COOKIE['angka']) {
            echo "<p>Waaah… masih salah ya, bilangan tebakan Anda terlalu rendah.</p>";
            echo "<form action='' method='post'>
                        Bilangan tebakan Anda <input type='number' name='tebakan'>
                        <input type='submit' name='submit' value='Submit'>
                </form>";
        }
    } else {
        setcookie("angka", rand(0, 100));
    }
} else {
?>
<html>
<head>
    <title>GAME TEBAK ANGKA</title>
</head>
<body>
    <h3> Hallo, nama saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat. Silakan Anda menebak ya!" </h3>
    <form action="" method="post">
        Bilangan tebakan Anda <input type="number" name="tebakan">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
<?php
}
?>
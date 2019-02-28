<?php
    session_start();

    if(!isset($_SESSION['username'])){
        //belum daftar
        die ("Anda Belum Terdafatar");
    }
?>
<h2>Selamat Datang</h2>

<?php
    //sudah terdaftar
    echo $_SESSION['username'];
    echo "<br>";
    echo '<a href=logout.php>Logout</a>';
?>
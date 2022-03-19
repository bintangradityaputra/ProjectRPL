<?php
include ("koneksi.php");
date_default_timezone_set('Asia/Jakarta');

session_start();

$username = $_POST['username'];
$password1 = $_POST['password'];
$password = sha1($password1);

//$username = mysqli_real_escape_string($username);
//$password = mysqli_real_escape_string($password);

if (empty($username) && empty($password)) {
    header('location:index.php?error=Username dan Password Kosong!');
} else if (empty($username)) {
    header('location:index.php?error=Username Kosong!');
} else if (empty($password)) {
    header('location:index.php?error=Password Kosong!');
}

$q = mysqli_query($conn, "select * from data_register where username='$username' and password='$password'");
$row = mysqli_fetch_array ($q);

if (mysqli_num_rows($q) == 1) {
    $_SESSION['ID'] = $row['ID'];
    $_SESSION['username'] = $username;
    $_SESSION['nama'] = $row['Nama'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['alamat'] = $row['Alamat'];
    $_SESSION['tanggalLahir'] = $row['Tanggal_Lahir'];
    $_SESSION['umur'] = $row['Umur'];
    $_SESSION['jenis kelamin'] = $row['jenis_kelamin'];
    $_SESSION['password'] = $row['password'];    
    
} else {
    header('Location:dashboard.php?error=Anda Belum Terdaftar!');
}
?>
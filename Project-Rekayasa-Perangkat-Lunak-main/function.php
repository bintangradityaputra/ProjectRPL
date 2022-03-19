<?php
require "koneksi.php";
 function registrasi($data) {
    global $conn;  
    $username = strtolower(stripcslashes($data["user"]));
    $nama = mysqli_real_escape_string($conn,$data["name"]);
    $email = mysqli_real_escape_string($conn,$data["email"]);
    $alamat = mysqli_real_escape_string($conn,$data["alamat"]);
    $tanggalLahir = mysqli_real_escape_string($conn,$data["tanggal"]);
    $umur = mysqli_real_escape_string($conn,$data["umur"]);
    $jenis = mysqli_real_escape_string($conn,$data["jenis"]);
    $password = mysqli_real_escape_string($conn,$data["password"]);
    $password2 = mysqli_real_escape_string($conn,$data["password2"]);

    //cek username sudah ada atau belum
    $result=mysqli_query($conn,"SELECT username FROM data_register WHERE username ='$username'");
    if(mysqli_fetch_assoc($result)){
        echo "<script>
        alert('Username sudah terdaftar!')
        </script>";    
        return false;
    }
    //cek password
    if($password !== $password2){
        echo "<script>
        alert('Konfirmasi Password Tidak sesuai');
        </script>";
        return false;
    }
    
    session_start();
    header("Location:dashboard.php");
    
    // enkripsi password
    #$password =password_hash($password,PASSWORD_DEFAULT);

    //input user baru ke database
    mysqli_query($conn,"INSERT INTO data_register (ID,Nama,email,Alamat,Tanggal_Lahir,umur,jenis_kelamin,username,password) VALUES ('','$nama','$email','$alamat','$tanggalLahir','$umur','$jenis','$username','$password')");

    return mysqli_affected_rows($conn);



 }
?>
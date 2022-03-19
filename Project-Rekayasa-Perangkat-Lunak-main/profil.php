<?php
session_start();
include"koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body{
            background-image: url("http://wisatabojonegoro.com/wp-content/uploads/2017/03/Waduk-Pacal.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .profil{
            margin:50px auto;
            width: 415px;
            margin-top: 40px;
            padding: 40px;
            background: #f4e298;
            color: black;
            border-radius: 10px;

        }
        tr{
            margin-right: 30px;
        }
        .stroke {
            text-align: center;
            font-size: 25px;
            color:cornflowerblue;
            font-weight: bolder;
            padding-top: 7px;  
            background:thistle;   
            height: 50px;     
            border-radius: 15px;  
            border-bottom: yellow 7px;     
        }
        .butt{
          text-align: center;
          padding-top: 30px;
        }

    </style>
</head>
<body>
<nav class="navbar navbar-light" style="background-color: #123f6f">
        <div class="container-fluid">
          <a class="navbar-brand" href="#" style="font-family: Verdana, Geneva, Tahoma, sans-serif; text-align:center; color:white"><b>Pembelian E-Tiket Wisata Waduk Pacal</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Tiket
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-menu" href="#">E-Tiket</a>
                    <li><a class="dropdown-item" href="pembelian1.php">Pembelian 1 Tiket</a></li>
                    <li><a class="dropdown-item" href="pembelian2.php">pembelian 2 Tiket</a></li>     
                </li>
                  <li><a class="dropdown-item" href="etiket.php">Beli Tiket</a></li>
                  <li><hr class="dropdown-divider"></li>
                </ul>            
              </li>
              <li class="nav-item">
                <a class="nav-link" href="explore.php">Explore</a>
              </li>   
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Akun
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="profil.php">Profil</a></li>
                  <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                  <li><hr class="dropdown-divider"></li>
                </ul>            
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <div class="profil" >
        <div style="text-align: center; background-color:#95e2e7 ;color:#123f6f; border-radius:12px; height:80px;"><h2><b>Your Account</b></h2><h5><?=$_SESSION['user']?></h5></div><br>
        
      <table border="0" cellpadding="4" style="margin-left: 25px;">
        <tr>
            <td>Nama Lengkap</td>
            <td>: <?=$_SESSION['name']?></td>
        </tr>
        <tr>
            <td>Username</td>
            <td>: <?=$_SESSION['user']?></td>
        </tr>
        <tr>
            <td>E-Mail</td>
            <td>: <?=$_SESSION['email']?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: <?=$_SESSION['alamat']?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>: <?=$_SESSION['tanggal']?></td>
        </tr>
        <tr>
            <td>Umur</td>
            <td>: <?=$_SESSION['umur']?> tahun</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>: <?=$_SESSION['jenis']?></td>
        </tr>
        <tr height="80">
            <td style="text-align: center; padding-top:50px;" colspan="4">
            <a href="Username.php"><button type="button" class="btn btn-primary" name="login" id="logout" style="width: 100px; margin-top:30px;">Logout</button></a>
            </td>
        </tr>
    </table>
      </div>
</body>
</html>
    
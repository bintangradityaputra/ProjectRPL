<?php
require"koneksi.php";
session_start();
$jumlahTiket3=$_SESSION['tiket'];
$hargaTiket=10000;
$total3 =$jumlahTiket3*$hargaTiket;
$_SESSION['total3'] = $total3;
$metode2=$_SESSION['metode2'];
if($_POST){
    header('location:pembelian2.php');
    $_SESSION['nama3'] = $_POST['nama3'];
    $_SESSION['tanggal3'] = $_POST['tanggal3'];
    $_SESSION['metode3'] = $_SESSION['metode2'];

    $nama3 = $_SESSION['nama3'];
    $tanggal3 = $_SESSION['tanggal3'];
    $metode3= $_SESSION['metode3'];

    mysqli_query($conn,"INSERT INTO data_etiket (nama,tanggal_berkunjung,metode_pembayaran) VALUES ('$nama3','$tanggal3','$metode3')");

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Tiket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body{
            background-color:#e5703c;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        form{
            background-image: url("http://wisatabojonegoro.com/wp-content/uploads/2017/03/Waduk-Pacal.jpg");
			      margin:40px auto;
            width: fit-content;
            height: fit-content;
            padding: 20px;
            color:#123f6f;
            border-radius: 15px;
            margin-top: 0px;
        }
        .butt{
          text-align: center;
        }
    </style>
</head>
<body>
	<nav class="navbar navbar-light" style="background-color: #123f6f;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#" style="font-family: Verdana, Geneva, Tahoma, sans-serif; color:white;"><b>Pembelian E-Tiket Wisata Waduk Pacal</b></a>
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
            <form class="d-flex"">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit" style="background-color: wheat;">Search</button>
            </form>
          </div>
        </div>
      </nav>
    
      <p></p><br>

    <form method="POST" action="">
        <fieldset>
			<legend style="color: blanchedalmond;"><b>Tiket Masuk Wisata Waduk Pacal</b></legend>

            <div class="mb-3">
			    <label for="InputNama" class="form-label"><b>Nama Pengunjung</b></label>
			    <input type="text" class="form-control" id="InputNama" name="nama3" required>
			</div>
			
			<div class="mb-3">
			    <label for="InputTanggalBerkunjung" class="form-label"><b>Tanggal Berkunjung</b></label>
			    <input type="date" class="form-control" id="InputTanggalBerkunjung" name="tanggal3" required>
			</div>

		    <div class="butt">
                <a href="etiket.php"><button type="button" class="btn btn-primary">Cancel</button></a>
		        <a href=""><button type="submit" class="btn btn-primary" name="lanjut3">Selanjutnya</button></a>
            </div>
		</fieldset>
    </form>

</body>
</html>
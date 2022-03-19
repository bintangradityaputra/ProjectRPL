<?php
require"koneksi.php";
session_start();
$jumlahTiket=$_SESSION['tiket'];
$hargaTiket=10000;
$total =$jumlahTiket*$hargaTiket;
$_SESSION['total'] = $total;
if($_POST){
    header('location:pembelian1.php');
    $_SESSION['total'] = $total;
    $_SESSION['nama'] = $_POST['nama1'];
    $_SESSION['tanggal'] = $_POST['tanggal1'];
    $_SESSION['metode'] = $_POST['metode1'];
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
			    <input type="text" class="form-control" id="InputNama" name="nama1" required>
			</div>
			
			<div class="mb-3">
			    <label for="InputTanggalBerkunjung" class="form-label"><b>Tanggal Berkunjung</b></label>
			    <input type="date" class="form-control" id="InputTanggalBerkunjung" name="tanggal1" required>
			</div>

            <div style="background-color:#95e2e7; border-radius:15px;">
                <b><p style="margin-left: 40px;">Harga tiket      : Rp.10000/Orang <br>
                Tiket yang dibeli        : <?php echo $_SESSION['tiket']?> Tiket<br>
                Total yang harus dibayar : Rp.<?php echo $_SESSION['total']?></p></b>
            </div>

            <div class="mb-3" style="text-align: center;">
			         <label for="InputPilihMetodeBayar" class="form-label"><b>Pilih Metode Bayar</b></label><br>
			         <select id="InputPilihMetodeBayar" list="metode" name="metode1" style="border-radius:10px;text-align:center;">
			      		<option value="Transfer Bank">Transfer Bank</option>
			      		<option value="Indomart/Alfamart">Indomart/Alfamart</option>
			      		<option value="Dana">Dana</option>
			      		<option value="Link Aja">Link Aja</option> 
			      		<option value="Ovo">Ovo</option>
			      	</select>
			      </div>

		    <div class="butt">
                <a href="etiket.php"><button type="button" class="btn btn-primary">Cancel</button></a>
			    <a href=""><button type="submit" class="btn btn-primary" name="lanjut2">Selanjutnya</button></a>
            </div>
		</fieldset>
    </form>
</body>
</html>
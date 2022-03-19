<?php
include"koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Tiket Waduk Pacal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body{
            background-image: url("https://sda.pu.go.id/balai/bbwsbengawansolo/portal/wp-content/uploads/2021/05/unnamed-1-1024x682.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        p{
          margin-top: 20px;
          padding-top: 20px;
          padding-bottom: 50px;
          padding-left: 40px;
          padding-right: 60px;
          text-decoration: none;
          color:black;
          font-weight: bold;
          font-family: sans-serif;
          text-align: center;
        }
        h1{
          text-align: center;
          font-weight: bolder;
        }

        a.navbar-brand b{
          color: white;
        }




        
    </style>
</head>

<body>
    <nav class="navbar navbar-light" style="background-color: #123f6f;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#" style="font-family: Verdana, Geneva, Tahoma, sans-serif; text-align:center;"><b>Pembelian E-Tiket Wisata Waduk Pacal</b></a>
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
      <p>Wisata waduk pacal merupakan salah satu wisata yang ada di kabupaten Bojonegoro, tepatnya di Kecamatan Temayang Desa kedungsumber. Waduk Pacal sendiri merupakan bangunan peninggalan Belanda yang dibangun pada tahun 1933. Pepohonan rindang yang menghiasi kawasan Waduk Pacal menambah suasana sejuk dan nyaman. Luas waduk mencapai 3878 km persegi dengan kedalaman 25 m. <br> Tiket masuknya sebesar Rp.5000. Untuk menjelajahi waduk, para pengunjung dapat menaiki sampan. tidak ada tarif pasti untuk itu, namun biasanya para nelayan mematok harga sebesar Rp.15.000 untuk waktu sekitar 30 menit. Pengunjung juga dimanjakan dengan banyak spot foto. Selain itu pengunjung juga dapat memancing.<br>Namun pada musim kemarau, debit air menurun drastis. Bahkan pada puncak musim kemarau, waduk mengalami kekeringan yang sangat parah. Hingga dapat dimanfaatkan oleh warga sekita untuk bercocok tanam.</p>
    </body>
</html>
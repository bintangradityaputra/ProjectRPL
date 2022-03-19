
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tiket</title>
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
            width: 400px;
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
                    <li><a class="dropdown-item" href="pembelian2.php">Pembelian 2 Tiket</a></li>     
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
    <div class="profil">
    <h5 style="text-align: center;padding-bottom:10px;">Anda Belum Melakukan Pembelian Tiket</h5>
    <div class="butt">
            <a href="etiket.php"><button type="button" class="btn btn-primary" name="beli">Beli Tiket</button></a>
            <a href="dashboard.php"><button type="button" class="btn btn-primary">Cancel</button></a>
          </div> 
    </div>
          
</h1>
</body>
</html>

<?php
require 'function.php';
if(isset($_POST['daftar'])){
  if(registrasi($_POST)>0){
    echo "<script>
    alert('Selamat,registrasi anda berhasil')
    </script>";
    header("Location:dashboard.php");
    $_SESSION['user'] = $data['username'];
		$_SESSION['password'] = $data['password'];
    $_SESSION['email'] = $data['email'];
		$_SESSION['alamat'] = $data['Alamat'];
		$_SESSION['name'] = $data['Nama'];
		$_SESSION['tanggal'] = $data['Tanggal_Lahir'];
		$_SESSION['umur'] = $data['umur'];
		$_SESSION['jenis'] = $data['jenis_kelamin'];
  } else {
  echo mysqli_error($conn);
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body{
            background-image: url("http://wisatabojonegoro.com/wp-content/uploads/2017/03/Waduk-Pacal.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        form{
            margin:50px auto;
            width: 400px;
            margin-top: 40px;
            padding: 40px;
            background: #f4e298;
            color: white;
            border-radius: 15px;
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
    <form method="POST" action="">
    <h2 class="stroke">Mendaftar Akun</h2>
        <div class="mb-3">
          <label for="InputNama1" class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control" id="InputNama1" name="name" placeholder="Name" required>
        </div>

        <div class="mb-3">
            <label for="input" class="form-label">E-Mail</label>
            <div class="input-group">
              <div class="input-group-text">@</div>
              <input type="email" class="form-control" id="InputEmail1" name="email" placeholder="Email" required>
            </div>
          </div>

        <div class="mb-3">
          <label for="InputAlamat1" class="form-label">Alamat</label>
          <input type="text" class="form-control" id="InputAlamat1" name="alamat" placeholder="Alamat" required>
        </div>

        <div class="mb-3">
            <label for="InputTanggalLahir1" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="InputTanggalLahir1" name="tanggal" placeholder="Tanggal lahir" required>
          </div>

        <div class="mb-3">
           <label for="InputUmur1" class="form-label">Umur</label>
           <input type="number" class="form-control" id="InputUmur1" name="umur" placeholder="Umur" required>
        </div>

        
			<div class="mb-3">
			   <label for="InputPilihJenisKelamin1" class="form-label">Pilih Jenis Kelamin</label><br>
			   <select id="InputPilihJenisKelamin1" list="metode" name="jenis" required>
					<option value="Laki-laki">Laki-laki</option>
					<option value="Perempuan">Perempuan</option>
				</select>
			</div>

        <!-- <div>
          <label for="InputJenisKelamin1" class="form-label">Jenis Kelamin</label><br>
            <input type="text" class="form-control" name="jenis" id="InputJK1" placeholder="Jenis Kelamin">
        </div> -->

        <div class="mb-3">
          <label for="InputUser1" class="form-label">Username</label>
          <input type="text" class="form-control" id="InputNama1" name="user" placeholder="User" required>
        </div>

        <div class="mb-3">
            <label for="InputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="InputPassword1" name="password" placeholder="Password" required>
        </div>    

        <div class="mb-3">
            <label for="InputPassword2" class="form-label">Konfirmasi Password</label>
            <input type="password" class="form-control" id="InputPassword2" name="password2" placeholder="Konfirmasi Password" required>
        </div>    
          <!-- <button type="submit" >submit</button> -->
          <div class="butt">
            <button type="submit" class="btn btn-primary" name="daftar">Sign Up</button>
            <button type="reset" class="btn btn-primary">Reset</button>
            <a href="Username.php"><button type="button" class="btn btn-primary">Cancel</button></a>
          </div>          
    </form>

</body>
</html>
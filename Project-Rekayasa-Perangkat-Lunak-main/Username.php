<?php
session_start();
require"function.php";
if(isset($_POST["login"])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn,"SELECT*FROM data_register WHERE username='$username'");
    $data = mysqli_fetch_array($result);
    if (($password === $data['password']) AND ($username === $data['username'])){
        $_SESSION['user'] = $data['username'];
		$_SESSION['password'] = $data['password'];
        $_SESSION['email'] = $data['email'];
		$_SESSION['alamat'] = $data['Alamat'];
		$_SESSION['name'] = $data['Nama'];
		$_SESSION['tanggal'] = $data['Tanggal_Lahir'];
		$_SESSION['umur'] = $data['umur'];
		$_SESSION['jenis'] = $data['jenis_kelamin'];
        header("Location:dashboard.php");
        exit;
    } elseif(($password !== $data['password']) AND ($username !== $data['username'])){
        echo "<script>
        alert('Password dan Username Salah')
        </script>";
    } elseif(($username !== $data['username'])){
        echo "<script>
        alert('Username Salah')
        </script>";
    } else{
        echo "<script>
        alert('Password Salah')
        </script>";
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
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
            margin: 20px auto;
            margin-top: 60px;
            padding: 50px;
            background: #f4e298;      
            color: black;
            font-family: sans-serif;
            border-radius: 15px;
            width: fit-content;
            height: fit-content;
            opacity: 80%;
            border: cornflowerblue;
        }
        .stroke {
            text-align: center;
            font-size: 25px;
            color:cornflowerblue;
            font-weight: bolder;
            margin-bottom: 30px;                 
        }

    </style>
</head>
<body>
<div>
    <form method="POST" action="">
    <h2 class="stroke">Halaman Login</h2>
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" required class="form-control" id="username" name="username" placeholder="Username" aria-describedby="emailHelp" style="border-radius: 20px;">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" required class="form-control" id="password" name="password" placeholder="Password" style="border-radius: 20px;">
        </div>
        <div style="text-align: center;">
        <a href="dashboard.php"><button type="submit" class="btn btn-primary" name="login" id="login" style="width: 100px; margin-top:20px;">Login</button></a>
        <button type="reset" class="btn btn-primary" id="cancel" style="margin-top:20px; width: 100px;">Cancel</button><br>
        <p style="text-align: center; margin-top:30px; padding-top:10px; ">Belum memiliki akun? <a href="sign_up.php"><b>Daftar</b></a> </p>
        </div>
    </form>
</div>
</body>
</html>
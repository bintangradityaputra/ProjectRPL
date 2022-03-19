#<?php
#  include "koneksi.php";
#  $nama  = $_REQUEST['nama'];
#  $tiket = $_REQUEST['tiket'];
#  $total  = $_REQUEST['total'];
#  $tgl  = $_REQUEST['tanggal'];
#  $mtd  = $_REQUEST['metode'];
#  
#  $mysqli  = "INSERT INTO data_etiket (nama,tiket,total,tanggal,metode) VALUES ('$nama', '$tiket', '$total', '$tgl', '$mtd')";
#  $result  = mysqli_query($conn,$mysqli);
#
#  if ($result) {
#    session_start();
#    if(session_destroy()){
#        header("Location:tersedia.php");
#    }
#  } else {
#    echo "Input gagal";
#  }
#
#  mysqli_close($conn);
#?>
#
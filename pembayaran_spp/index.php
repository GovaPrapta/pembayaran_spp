<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    

    <title>Aplikasi Pembayaran SPP</title>
  </head>
  <body>
    <?php
    include("koneksi.php");
    include("function.php");
    menu();

    if(isset($_GET['caripeg'])){
    include("pegawai.php");
  }else if(isset($_GET['carisis'])){
    include("siswa.php");
  }else if(isset($_GET['caripem'])){
    include("pembayaran.php");
  }else if(isset($_GET['caritun'])){
    include("tunggakan.php");
  }else if(isset($_GET['hal'])){
  $hal=$_GET['hal'];
  if($hal=='pegawai'){
    include('pegawai.php');
  }else if($hal=='pegtambah'){
    include('pegawai_tambah.php');
  }else if($hal=='pegedit'){
    include('pegawai_edit.php');
  }else if($hal=='peghapus'){
    include('pegawai_hapus.php');
  }else if($hal=='siswa'){
    include('siswa.php');
  }else if($hal=='sistambah'){
    include('siswa_tambah.php');
  }else if($hal=='sisedit'){
    include('siswa_edit.php');
  }else if($hal=='sishapus'){
    include('siswa_hapus.php');
  }else if($hal=='pembayaran'){
    include('pembayaran.php');
  }else if($hal=='pemtambah'){
    include('pembayaran_tambah.php');
  }else if($hal=='pemedit'){
    include('pembayaran_edit.php');
  }else if($hal=='pemhapus'){
    include('pembayaran_hapus.php');
  }else if($hal=='tunggakan'){
    include('tunggakan.php');
  }else if($hal=='tuntambah'){
    include('tunggakan_tambah.php');
  }else if($hal=='tunedit'){
    include('tunggakan_edit.php');
  }else if($hal=='tunhapus'){
    include('tunggakan_hapus.php');
  }
 }else{
  beranda();
 }
  footer();
  

    ?>

    <script src="bootstrap/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="bootstrap/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="bootstrap/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
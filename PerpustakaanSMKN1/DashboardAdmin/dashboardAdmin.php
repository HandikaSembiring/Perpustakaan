<?php
session_start();

if(!isset($_SESSION["signIn"]) ) {
  header("Location: ../sign/admin/sign_in.php");
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
     <title>Admin Dashboard</title>
  </head>
  <body>
    
    <nav class="navbar fixed-top bg-body-tertiary shadow-sm">
      <div class="container-fluid p-3">
        <a class="navbar-brand" href="#">
          <img src="../assets/smkn1.png" alt="logo" width="50px">
        </a>
  
        <div class="dropdown">
          <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="../assets/adminLogo.png" alt="adminLogo" width="40px">
          </button>
        <ul style="margin-left: -7rem;" class="dropdown-menu position-absolute mt-2 p-2">
          <li>
            <a class="dropdown-item text-center" href="#">
            <img src="../assets/adminLogo.png" alt="adminLogo" width="30px">
            </a>
          </li>
          <li>
            <a class="dropdown-item text-center text-secondary" href="#"> <span class="text-capitalize"><?php echo $_SESSION['admin']['nama_admin']; ?></a>
            </span>
          </li>
          <hr>
          <li>
            <a class="dropdown-item text-center mb-2" href="#">Akun Terverifikasi <span class="text-primary"><i class="fa-solid fa-circle-check"></i></span></a>
          </li>
          <li>
            <a class="dropdown-item text-center p-2 bg-danger text-light rounded" href="signOut.php">Sign Out <i class="fa-solid fa-right-to-bracket"></i></a>
          </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="mt-5 p-4">
      <?php
      // Mendapatkan tanggal dan waktu saat ini
      $date = date('Y-m-d H:i:s'); // Format tanggal dan waktu default (tahun-bulan-tanggal jam:menit:detik)
      // Mendapatkan hari dalam format teks (e.g., Senin, Selasa, ...)
      $day = date('l');
      // Mendapatkan tanggal dalam format 1 hingga 31
      $dayOfMonth = date('d');
      // Mendapatkan bulan dalam format teks (e.g., Januari, Februari, ...)
      $month = date('F');
      // Mendapatkan tahun dalam format 4 digit (e.g., 2023)
      $year = date('Y');
      ?>

      <h1 class="mt-5 fw-bold">Dashboard - <span class="fs-4 text-secondary"> <?php echo $day. " ". $dayOfMonth." ". " ". $month. " ". $year; ?> </span></h1>
    
      <div class="alert alert-success" role="alert">Selamat datang admin - <span class="fw-bold text-capitalize"><?php echo $_SESSION['admin']['nama_admin']; ?></span> di Dashboard Perpustakaan Satoe</div>
      
      <div class="mt-4 p-3">

        <!-- <div class="row gap-2">
        <div class="col bg-info p-5 rounded">
          <a class="text-center text-decoration-none fs-2 text-light" href="member/member.php">Member</a>
        </div>
        <div class="col bg-success p-5 rounded">
          <a class="text-center text-decoration-none fs-2 text-light" href="buku/daftarBuku.php">Buku</a>
        </div>
        </div>
        <div class="row gap-2 mt-2">
        <div class="col bg-warning p-5 rounded">
          <a class="text-center text-decoration-none fs-2 text-light" href="peminjaman/peminjamanBuku.php">Peminjaman</a>
        </div>
        <div class="col bg-dark p-5 rounded">
          <a class="text-center text-decoration-none fs-2 text-light" href="pengembalian/pengembalianBuku.php">Pengembalian</a>
        </div>
        </div>
        <div class="row mt-2">
        <div class="col bg-danger p-5 rounded">
          <a class="text-center text-decoration-none fs-2 text-light" href="denda/daftarDenda.php">Denda</a>
        </div>
        </div> -->

        <div class="d-flex flex-wrap justify-content-center gap-3">
  <a href="member/member.php" class="btn btn-primary p-4 text-center shadow-sm" style="width: 250px; border-radius: 10px;">
    <i class="fa-solid fa-user fa-2x mb-2"></i>
    <div class="fw-bold">Member</div>
  </a>
  <a href="buku/daftarBuku.php" class="btn btn-success p-4 text-center shadow-sm" style="width: 250px; border-radius: 10px;">
    <i class="fa-solid fa-book fa-2x mb-2"></i>
    <div class="fw-bold">Daftar Buku</div>
  </a>
  <a href="peminjaman/peminjamanBuku.php" class="btn btn-warning p-4 text-center shadow-sm" style="width: 250px; border-radius: 10px;">
    <i class="fa-solid fa-hand-holding fa-2x mb-2"></i>
    <div class="fw-bold">Peminjaman</div>
  </a>
  <a href="pengembalian/pengembalianBuku.php" class="btn btn-info p-4 text-center shadow-sm" style="width: 250px; border-radius: 10px;">
    <i class="fa-solid fa-rotate-left fa-2x mb-2"></i>
    <div class="fw-bold">Pengembalian</div>
  </a>
  <a href="denda/daftarDenda.php" class="btn btn-danger p-4 text-center shadow-sm" style="width: 250px; border-radius: 10px;">
    <i class="fa-solid fa-money-bill fa-2x mb-2"></i>
    <div class="fw-bold">Denda</div>
  </a>
</div>



      </div>
      
    </div>
    
    <footer class="shadow-lg bg-subtle p-3">
      <div class="container-fluid d-flex justify-content-between">
      <p class="mt-2">Created by <span class="text-primary">Tim IT SMKN 1 KOTA BEKASI</span> © 2024</p>
      <p class="mt-2">versi 1.0</p>
      </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
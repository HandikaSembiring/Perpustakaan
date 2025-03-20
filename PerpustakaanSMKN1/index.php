<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
    <title>Perpustakaan SMKN 1 Kota Bekasi</title>
    <link rel="icon" href="assets/logoSMKN1Bekasi.png" type="image/png">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    
    <style>
      body {
        font-family: 'Poppins', sans-serif;
        background: #f3f4f6;
        color: #333;
        line-height: 1.6;
      }
      nav {
        background: #0d47a1;
        padding: 15px;
      }
      .navbar-nav .nav-link {
        color: #fff;
        font-weight: 500;
      }
      .navbar-nav .nav-link.active {
        font-weight: bold;
        text-decoration: underline;
      }
      h2 span {
        color: #ff9800;
      }
      #homeSection {
        background: linear-gradient(to right, #0d47a1, #64b5f6);
        color: white;
        padding: 80px 20px;
        border-radius: 8px;
        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
      }
      #homeSection h2 {
        font-size: 2.8rem;
      }
      #homeSection .btn {
        background: #ff9800;
        border: none;
        padding: 10px 30px;
        font-size: 16px;
        transition: background 0.3s ease;
      }
      #homeSection .btn:hover {
        background: #e65100;
        transform: scale(1.05);
      }
      #aboutSection {
        padding: 60px 20px;
        background: #e3f2fd;
      }
      .card {
        background: #ffffff;
        border: 2px solid #0d47a1;
        border-radius: 10px;
        transition: transform 0.3s ease;
      }
      .card:hover {
        transform: scale(1.05);
        box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.15);
      }
      .card-header {
        background: #0d47a1;
        color: #fff;
        font-weight: bold;
      }
      footer {
        background: #0d47a1;
        color: white;
        padding: 20px 0;
      }
      footer a {
        color: #ff9800;
        text-decoration: none;
      }
      footer a:hover {
        text-decoration: underline;
      }
      footer .social-icons i {
        font-size: 1.5rem;
        margin: 0 10px;
        transition: color 0.3s ease;
      }
      footer .social-icons i:hover {
        color: #ff9800;
      }
    </style>
  </head>
  <body>
    <!--Navbar-->
    <nav class="navbar fixed-top navbar-expand-lg">
      <div class="container-fluid">
        <img src="assets/smkn1.png" alt="logo" width="50px">
        <a href="/sign/link_login.php" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#homeSection">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#aboutSection">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#footer">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section id="homeSection" class="text-center">
      <div class="container">
        <h2 class="fw-bold"><span>Perpustakaan</span> SMKN 1 Kota Bekasi</h2>
        <p class="mb-4">"Menyediakan Akses Mudah ke Dunia Pengetahuan: <br> Perpustakaan Digital <span class="fw-bold">SMKN 1 Kota Bekasi</span> untuk Generasi Pembelajar Masa Depan."</p>
        <a class="btn btn-warning" href="sign/link_login.html">Get started</a>
      </div>
    </section>

    <section id="aboutSection">
      <div class="container text-center">
        <h2 class="mb-4">About</h2>
        <p>Kami percaya bahwa literasi dan pengetahuan adalah fondasi masa depan yang lebih cerah. Perpustakaan SMKN 1 Kota Bekasi hadir untuk mendukung pembelajaran dengan koleksi buku fisik dan digital yang kaya, dilengkapi dengan fitur pencarian dan sistem peminjaman yang mudah diakses. Kami berdedikasi untuk menciptakan lingkungan belajar yang inklusif dan memberdayakan generasi muda dengan sumber daya pendidikan terbaik.</p>
        <div class="d-flex justify-content-center flex-wrap gap-4 mt-4">
          <div class="card p-3 text-center" style="width: 18rem;">
            <div class="card-header">Tim IT Perpustakaan</div>
            <div class="card-body">
              <h5 class="card-title">SMKN 1 Kota Bekasi</h5>
              <p class="card-text">Kami adalah tim yang berfokus pada pengelolaan dan inovasi teknologi untuk mempermudah akses perpustakaan digital.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      <div class="container text-center">
        <img src="assets/smkn1.png" width="150px" alt="logo">
        <h3 class="mt-3">Alamat</h3>
        <p>Jalan Bintara 8 No.2, Bintara, Bekasi Barat, Bintara, Bekasi Barat, Bintara, Bekasi Bar., Kota Bekasi, Jawa Barat 17134, Indonesia</p>
        <div class="social-icons d-flex justify-content-center gap-4 my-3">
          <a href="#" class="fs-4"><i class="fa-brands fa-github"></i></a>
          <a href="#" class="fs-4"><i class="fa-brands fa-telegram"></i></a>
          <a href="#" class="fs-4"><i class="fa-brands fa-instagram"></i></a>
        </div>
        <p>Made by <a href="#">SMKN 1 Kota Bekasi</a> 2024</p>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

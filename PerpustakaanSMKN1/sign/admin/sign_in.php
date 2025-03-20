<?php
session_start();

if (isset($_SESSION["signIn"])) {
  header("Location: ../../DashboardAdmin/dashboardAdmin.php");
  exit;
}

require "../../loginSystem/connect.php";

if (isset($_POST["signIn"])) {
  $nama = strtolower($_POST["nama_admin"]);
  $password = $_POST["password"];

  // Prepare query to prevent SQL injection
  $stmt = $connect->prepare("SELECT * FROM admin WHERE nama_admin = ? AND password = ?");
  $stmt->bind_param("ss", $nama, $password);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows === 1) {
    // Set session data
    $_SESSION["signIn"] = true;
    $_SESSION["admin"]["nama_admin"] = $nama;
    header("Location: ../../DashboardAdmin/dashboardAdmin.php");
    exit;
  }
  $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
    <title>Sign In || Admin</title>
    <style>
      body {
        font-family: 'Poppins', sans-serif;
        background: #f4f6f9;
      }
      .card {
        border-radius: 15px;
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
      }
      .btn-custom {
        background-color: #0d47a1;
        color: white;
      }
      .btn-custom:hover {
        background-color: #003366;
      }
      .form-control:focus {
        box-shadow: none;
        border-color: #0d47a1;
      }
      .alert-danger {
        margin-top: 15px;
        text-align: center;
      }
    </style>
  </head>

  <body>
    <div class="container">
      <div class="card p-4 mt-5">
        <div class="position-absolute top-0 start-50 translate-middle">
          <img src="../../assets/adminLogo.png" alt="adminLogo" width="85px">
        </div>
        <h1 class="pt-5 text-center fw-bold">Sign In</h1>
        <hr>
        <form action="" method="post" class="row g-3 p-4 needs-validation" novalidate>
          <label for="validationCustom01" class="form-label">Nama Lengkap</label>
          <div class="input-group">
            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
            <input type="text" class="form-control" name="nama_admin" id="validationCustom01" required>
            <div class="invalid-feedback">
                Masukkan Nama anda!
            </div>
          </div>

          <label for="validationCustom02" class="form-label">Password</label>
          <div class="input-group">
            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
            <input type="password" class="form-control" id="validationCustom02" name="password" required>
            <div class="invalid-feedback">
                Masukkan Password anda!
            </div>
          </div>

          <div class="col-12">
            <button class="btn btn-custom" type="submit" name="signIn">Sign In</button>
            <a class="btn btn-success" href="../link_login.html">Batal</a>
          </div>
        </form>
      </div>

      <?php if (isset($error)): ?>
        <div class="alert alert-danger" role="alert">Nama atau Password Salah!</div>
      <?php endif; ?>
    </div>

    <script>
      (() => {
        'use strict'
        const forms = document.querySelectorAll('.needs-validation')
        Array.from(forms).forEach(form => {
          form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }
            form.classList.add('was-validated')
          }, false)
        })
      })()
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

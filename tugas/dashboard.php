<?php
session_start();
if (!isset($_SESSION["login"])){
  header ("Location: index.php");
  exit;
}
require 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard Administrator Pendaftaran Murid</title>
    <!--CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  </head>
  <body>
    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: #0B2Fa6">
      <div class="container">
        <a class="navbar-brand" href="dashboard.php" style="color: white; font-weight: 700">Administrator Pendaftaran Murid</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="logOut nav-link" href="logout.php" style="color: #FF0000; font-weight: 700">Log Out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir NavBar -->

    <!-- Menu Admin -->
    <section id="Menu Admin">
      <div class="container pt-5 pb-5">
        <div class="row text-center">
          <div class="col Proto">
            <h2>Menu Administrator</h2>
          </div>
        </div>
      </div>
      <div class="container pb-5">
        <div class="row justify-content-center text-center">
          <div class="col-md-5 mb-4">
            <a class="nav-link" href="dataMurid.php">
              <div class="card p-2" style="background-color: #b6ccff">
                <h5 class="fw-bolder"><i class="bi bi-people" style = "font-size : 3rem;"></i><br> Lihat Data Murid</h5>
              </div>
            </a>
          </div>
          <div class="col-md-5 mb-4">
            <a class="nav-link" href="FormRegistrasi.php">
              <div class="card p-2" style="background-color: #b6ccff">
                <h5 class="fw-bolder"><i class="bi bi-person-add" style = "font-size : 3rem;"></i><br>Tambah Data Murid</h5>
              </div>
            </a>
          </div>
        </div>
    </section>
    <!-- Akhir Menu Admin -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
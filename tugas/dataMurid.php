<?php
session_start();
if (!isset($_SESSION["login"])){
  header ("Location: index.php");
  exit;
}
require 'functions.php';
$murid  = query("SELECT * FROM murid ORDER BY NIS DESC");
//tombol cari
if ( isset($_POST["cari"])){
  $murid = carimurid($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>DATA MURID</title>
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
      </div>
    </nav>
    <!-- Akhir NavBar -->

    <!-- Keterangan -->
    <div class="container pt-2 pb-2">
      <div class="d-flex justify-content-start">
        <a href="dashboard.php"><button type="button" class="btn btn-light"><i class="bi bi-back"></i> Kembali</button></a>
      </div>
      <div class="d-flex justify-content-center pt-3 pb-1">
        <h1 class="fw-bolder">DATA MURID</h1>
      </div>
      <div class="d-flex justify-content-center pt-1 pb-3">
        <p class="text-start">Berikut adalah Daftar Murid yang telah terdaftar di SMPN 3 Wakanda.</p>
      </div>
    <!-- Akhir Keterangan --> 
    
    <!-- Pencarian -->
      <div class="col-md-auto d-flex justify-content-start pt-2 pb-2">
        <form action="" method ="post" class="row g-3">
          <div class="col-md-auto">
            <input class="form-control" type="text" name ="keyword" autofocus placeholder ="Input NIS / Nama Lengkap" autocomplete ="off" required>
          </div>
          <div class="col-md-auto">
            <button class="btn btn-secondary" type ="submit" name="cari">Cari</button>
          </div>
        </form>
      </div>
    <!-- Akhir Pencarian -->

    <!-- Tabel dan Kontrol -->
      <div class="pt-2 pb-2 table-responsive">
        <table class="table table-striped table-bordered align-middle">
          <tr class="text-center">
            <th>No.</th>
            <th>NIS</th>
            <th>Nama Lengkap</th>
            <th>Nama Ayah</th>
            <th>Nama Ibu</th>
            <th>Aksi</th>
          </tr>
          <?php $i = 1 ?>
          <?php foreach ($murid as $row) : ?>
          <tr>
            <td><?= $i ?></td>
            <td><?= $row["NIS"]?></td>
            <td><?= $row["namaLengkap"]?></td>
            <td><?= $row["namaAyah"]?></td>
            <td ><?= $row["namaIbu"]?></td>
            <td class="text-center">
            <a class="p-1" href="hapus.php?NIS=<?= $row["NIS"];?>" onclick="return confirm('Yakin?');"><button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-trash"></i></button></a>
            <a class="p-1" href="cekDataMurid.php?NIS=<?= $row["NIS"];?>"><button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-eye"></i></button></a>
            </td>
          </tr>
          <?php $i++ ?>
          <?php endforeach ?>
        </table>
      </div>
    <!-- Akhir Tabel dan Kontrol -->
    </div>
  </body>
</html>
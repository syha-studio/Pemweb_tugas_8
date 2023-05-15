<?php
session_start();
if (!isset($_SESSION["login"])){
  header ("Location: index.php");
  exit;
}
require 'functions.php';
$id = $_GET["NIS"];
$show  = query("SELECT * FROM murid WHERE NIS = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Data <?= $show["namaLengkap"]?></title>
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

    <!-- BioData -->
    <div class="container pt-2 pb-2">
      <div class="d-flex justify-content-start">
        <a href="dataMurid.php"><button type="button" class="btn btn-light"><i class="bi bi-back"></i> Kembali</button></a>
      </div>
      <div class="d-flex justify-content-center pt-3 pb-3">
        <h1 class="fw-bolder">Data Murid : <?= $show["namaLengkap"]?></h1>
      </div>
      <div class="justify-content-start pt-3 pb-3">
        <p>Tanggal Pengisian Formulir : <?= $show["tanggalPengisian"]?></p>

        <h2>Registrasi Peserta Didik</h2>
        <table class="table">
          <tr><th width ="275">Jenis Pendaftaran</th><th width ="50">:</th><td><?= $show["jenisPendaftaran"]?></td></tr>
          <tr><th width ="275">Tanggal Masuk Sekolah</th><th width ="50">:</th><td><?= $show["tanggalMasuk"]?></td></tr>
          <tr><th width ="275">NIS</th><th width ="50">:</th><td><?= $show["NIS"]?></td></tr>
          <tr><th width ="275">Nomor Peserta Ujian</th><th width ="50">:</th><td><?= $show["noPesertaUjian"]?></td></tr>
          <tr><th width ="275">Apakah Pernah PAUD</th><th width ="50">:</th><td><?= $show["paud"]?></td></tr>
          <tr><th width ="275">Apakah Pernah TK</th><th width ="50">:</th><td><?= $show["tk"]?></td></tr>
          <tr><th width ="275">No. Seri SKHUN Sebelumnya</th><th width ="50">:</th><td><?= $show["noSKHUN"]?></td></tr>
          <tr><th width ="275">No. Seri Ijazah Sebelumnya</th><th width ="50">:</th><td><?= $show["noIjazah"]?></td></tr>
          <tr><th width ="275">Hobi</th><th width ="50">:</th><td><?= $show["hobi"]?></td></tr>
          <tr><th width ="275">Cita-cita</th><th width ="50">:</th><td><?= $show["citaCita"]?></td></tr>
        </table>

        <h2>Data Pribadi</h2>
        <table class="table">
          <tr><th width ="275">Nama Lengkap</th><th width ="50">:</th><td><?= $show["namaLengkap"]?></td></tr>
          <tr><th width ="275">Jenis Kelamin</th><th width ="50">:</th><td><?= $show["jenisKelamin"]?></td></tr>
          <tr><th width ="275">NISN</th><th width ="50">:</th><td><?= $show["NISN"]?></td></tr>
          <tr><th width ="275">NIK</th><th width ="50">:</th><td><?= $show["NIK"]?></td></tr>
          <tr><th width ="275">Tempat Lahir</th><th width ="50">:</th><td><?= $show["tempatLahir"]?></td></tr>
          <tr><th width ="275">Tanggal Lahir</th><th width ="50">:</th><td><?= $show["tanggalLahir"]?></td></tr>
          <tr><th width ="275">Agama</th><th width ="50">:</th><td><?= $show["agama"]?></td></tr>
          <tr><th width ="275">Berkebutuhan Khusus</th><th width ="50">:</th><td><?= $show["muridBerkebutuhan"]?></td></tr>
          <tr><th width ="275">Alamat Jalan</th><th width ="50">:</th><td><?= $show["alamatJalan"]?></td></tr>
          <tr><th width ="275">RT</th><th width ="50">:</th><td><?= $show["rt"]?></td></tr>
          <tr><th width ="275">RW</th><th width ="50">:</th><td><?= $show["rw"]?></td></tr>
          <tr><th width ="275">Nama Dusun</th><th width ="50">:</th><td><?= $show["dusun"]?></td></tr>
          <tr><th width ="275">Nama Kelurahan/Desa</th><th width ="50">:</th><td><?= $show["desa"]?></td></tr>
          <tr><th width ="275">Kecamatan</th><th width ="50">:</th><td><?= $show["kecamatan"]?></td></tr>
          <tr><th width ="275">Kode Pos</th><th width ="50">:</th><td><?= $show["kodePos"]?></td></tr>
          <tr><th width ="275">Tempat Tinggal</th><th width ="50">:</th><td><?= $show["tempatTinggal"]?></td></tr>
          <tr><th width ="275">Moda Transportasi</th><th width ="50">:</th><td><?= $show["transportasi"]?></td></tr>
          <tr><th width ="275">Nomor HP</th><th width ="50">:</th><td><?= $show["hp"]?></td></tr>
          <tr><th width ="275">Nomor Telepon</th><th width ="50">:</th><td><?= $show["telp"]?></td></tr>
          <tr><th width ="275">E-mail Pribadi</th><th width ="50">:</th><td><?= $show["email"]?></td></tr>
          <tr><th width ="275">Penerima KPS/PKH/KIP</th><th width ="50">:</th><td><?= $show["bantuan"]?></td></tr>
          <tr><th width ="275">No. KPS/KKS/PKH/KIP</th><th width ="50">:</th><td><?= $show["noBantuan"]?></td></tr>
          <tr><th width ="275">Kewarganegaraan</th><th width ="50">:</th><td><?= $show["Kewarganegaraan"]?></td></tr>
        </table>

        <h2>Data Ayah Kandung</h2>
        <table class="table">
          <tr><th width ="275">Nama Ayah Kandung</th><th width ="50">:</th><td><?= $show["namaAyah"]?></td></tr>
          <tr><th width ="275">Tahun Lahir</th><th width ="50">:</th><td><?= $show["lahirAyah"]?></td></tr>
          <tr><th width ="275">Pendidikan</th><th width ="50">:</th><td><?= $show["pendidikanAyah"]?></td></tr>
          <tr><th width ="275">Pekerjaan</th><th width ="50">:</th><td><?= $show["pekerjaanAyah"]?></td></tr>
          <tr><th width ="275">Penghasilan Bulanan</th><th width ="50">:</th><td><?= $show["penghasilanAyah"]?></td></tr>
          <tr><th width ="275">Berkebutuhan Khusus</th><th width ="50">:</th><td><?= $show["kebutuhanAyah"]?></td></tr>
        </table>

        <h2>Data Ibu Kandung</h2>
        <table class="table">
          <tr><th width ="275">Nama Ibu Kandung</th><th width ="50">:</th><td><?= $show["namaIbu"]?></td></tr>
          <tr><th width ="275">Tahun Lahir</th><th width ="50">:</th><td><?= $show["lahirIbu"]?></td></tr>
          <tr><th width ="275">Pendidikan</th><th width ="50">:</th><td><?= $show["pendidikanIbu"]?></td></tr>
          <tr><th width ="275">Pekerjaan</th><th width ="50">:</th><td><?= $show["pekerjaanIbu"]?></td></tr>
          <tr><th width ="275">Penghasilan Bulanan</th><th width ="50">:</th><td><?= $show["penghasilanIbu"]?></td></tr>
          <tr><th width ="275">Berkebutuhan Khusus</th><th width ="50">:</th><td><?= $show["kebutuhanIbu"]?></td></tr>
        </table>
      </div>
    <!-- Akhir BioData -->
    </div>
  </body>
</html>

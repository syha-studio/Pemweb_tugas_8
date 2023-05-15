<?php
session_start();
if (!isset($_SESSION["login"])){
  header ("Location: index.php");
  exit;
}
require 'functions.php';
$NISgenerate = query("SELECT max(NIS) as NISterakhir FROM murid");
// mengambil angka dari kode barang terbesar, menggunakan fungsi substr
// dan diubah ke integer dengan (int)
$angkatan1 = (int) substr($NISgenerate[0]['NISterakhir'],0,2);
$urutan = (int) substr($NISgenerate[0]['NISterakhir'], 2,4);
// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
$urutan++;

// membentuk kode barang baru
// perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
// misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015' 
$angkatan = date('y') ;
if ($angkatan == $angkatan1){
  $NISbaru = $angkatan . sprintf("%04s", $urutan);
} else {
  $NISbaru = $angkatan . sprintf("%04s", 1);
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Formulir - Registrasi</title>
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
        <a href="dashboard.php"><button type="button" class="btn btn-light"><i class="bi bi-x-square-fill"></i> Batal</button></a>
      </div>
      <div class="d-flex justify-content-center pt-3 pb-3">
        <h1 class="fw-bolder">Formulir - Registrasi</h1>
      </div>
    <!-- Akhir Keterangan --> 
    
    <!-- Formulir -->
      <form action="FormDataDiri.php" method ="post" enctype="multipart/form-data" class="row g-3">
        <div class="mb-2">
          <label for="tanggalPengisian" class="form-label">Tanggal : <?= date('Y-m-d')?></label>
          <input type="text" name="tanggalPengisian" id="tanggalPengisian" value="<?= date('Y-m-d')?>" hidden>  
        </div>
        <div class="mb-2">
          <label for="jenisPendaftaran" class="form-label">Jenis Pendaftaran</label>
          <select class="form-select" name="jenisPendaftaran" id="jenisPendaftaran" required>
            <option selected></option>
            <option value="Siswa Baru">Siswa Baru</option>
            <option value="Pindahan">Pindahan</option>
          </select>
        </div>
        <div class="mb-2">
          <label for="tanggalMasuk" class="form-label">Tanggal Masuk</label>
          <input class="form-control" type="date" name="tanggalMasuk" id="tanggalMasuk" required autocomplete ="off">  
        </div>
        <div class="mb-2">
          <label for="NIS" class="form-label">NIS</label>
          <input class="form-control" style="background-color: #d2d2d2" type="text" name="NIS" id="NIS" value="<?= $NISbaru ?>" readonly>  
        </div>
        <div class="mb-2">
          <label for="noPesertaUjian" class="form-label">Nomor Peserta Ujian</label>
          <input class="form-control" type="text" name="noPesertaUjian" id="noPesertaUjian" required autocomplete ="off">
        </div>
        <div class="mb-2">
          <label for="paud" class="form-label">Apakah Pernah PAUD?</label>
          <select class="form-select" name="paud" id="paud" required>
            <option selected></option>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
        </div>
        <div class="mb-2">
          <label for="tk" class="form-label">Apakah Pernah TK?</label>
          <select class="form-select" name="tk" id="tk" required>
            <option selected></option>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
        </div>
        <div class="mb-2">
          <label for="noSKHUN" class="form-label">No. Seri SKHUN Sebelumnya</label>
          <input class="form-control" type="text" name="noSKHUN" id="noSKHUN" required autocomplete ="off">
        </div>
        <div class="mb-2">
          <label for="noIjazah" class="form-label">No. Seri Ijazah Sebelumnya</label>
          <input class="form-control" type="text" name="noIjazah" id="noIjazah" required autocomplete ="off">
        </div>
        <div class="mb-2">
          <label for="hobi" class="form-label">Hobi</label>
          <select class="form-select" name="hobi" id="hobi" required>
            <option selected></option>
            <option value="Olah Raga">Olah Raga</option>
            <option value="Kesenian">Kesenian</option>
            <option value="Membaca">Membaca</option>
            <option value="Menulis">Menulis</option>
            <option value="Travelling">Travelling</option>
            <option value="Lainnya">Lainnya</option>
          </select>
        </div>
        <div class="mb-2">
          <label for="citaCita" class="form-label">Cita-cita</label>
          <select class="form-select" name="citaCita" id="citaCita" required>
            <option selected></option>
            <option value="PNS">PNS</option>
            <option value="TNI/POLRI">TNI/POLRI</option>
            <option value="Guru/Dosen">Guru/Dosen</option>
            <option value="Dokter">Dokter</option>
            <option value="Politikus">Politikus</option>
            <option value="Wiraswasta">Wiraswasta</option>
            <option value="Seni/Lukis/Artis/Sejenisnya">Seni/Lukis/Artis/Sejenisnya</option>
            <option value="Lainnya">Lainnya</option>
          </select>
        </div>
        <div class="d-flex justify-content-center mb-3">
          <button type="submit" name="next1" class="btn btn-primary">Next</button>
        </div>
      </form>
    <!-- Akhir Formulir -->
    </div>
  </body>
</html>
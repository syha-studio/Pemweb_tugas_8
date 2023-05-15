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
        <h1 class="fw-bolder">Formulir - Data Diri</h1>
      </div>
    <!-- Akhir Keterangan --> 
    
    <!-- Formulir -->
      <form action="FormDataAyah.php" method ="post" enctype="multipart/form-data" class="row g-3">
        <input type="text" name="tanggalPengisian" value="<?=$_POST["tanggalPengisian"]?>" hidden>
        <input type="text" name="NIS" value="<?=$_POST["NIS"]?>" hidden>
        <input type="text" name="jenisPendaftaran" value="<?=$_POST["jenisPendaftaran"]?>" hidden>
        <input type="text" name="tanggalMasuk" value="<?=$_POST["tanggalMasuk"]?>" hidden>
        <input type="text" name="noPesertaUjian" value="<?=$_POST["noPesertaUjian"]?>" hidden>
        <input type="text" name="paud" value="<?=$_POST["paud"]?>" hidden>
        <input type="text" name="tk" value="<?=$_POST["tk"]?>" hidden>
        <input type="text" name="noSKHUN" value="<?=$_POST["noSKHUN"]?>" hidden>
        <input type="text" name="noIjazah" value="<?=$_POST["noIjazah"]?>" hidden>
        <input type="text" name="hobi" value="<?=$_POST["hobi"]?>" hidden>
        <input type="text" name="citaCita" value="<?=$_POST["citaCita"]?>" hidden>
        <div class="mb-2">
          <label for="namaLengkap" class="form-label">Nama Lengkap</label>
          <input class="form-control" type="text" name="namaLengkap" id="namaLengkap" required autocomplete ="off">
        </div>
        <div class="mb-2">
          <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
          <select class="form-select" name="jenisKelamin" id="jenisKelamin" required>
            <option selected></option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>
        <div class="mb-2">
          <label for="NISN" class="form-label">NISN</label>
          <input class="form-control" type="text" name="NISN" id="NISN" required autocomplete ="off">  
        </div>
        <div class="mb-2">
          <label for="NIK" class="form-label">NIK</label>
          <input class="form-control" type="text" name="NIK" id="NIK" required autocomplete ="off">
        </div>
        <div class="mb-2">
          <label for="tempatLahir" class="form-label">Tempat Lahir</label>
          <input class="form-control" type="text" name="tempatLahir" id="tempatLahir" required autocomplete ="off">  
        </div>
        <div class="mb-2">
          <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
          <input class="form-control" type="date" name="tanggalLahir" id="tanggalLahir" required autocomplete ="off">  
        </div>
        <div class="mb-2">
          <label for="agama" class="form-label">Agama</label>
          <select class="form-select" name="agama" id="agama" required>
            <option selected></option>
            <option value="Islam">Islam</option>
            <option value="Kristen/ Protestan">Kristen/ Protestan</option>
            <option value="Katholik">Katholik</option>
            <option value="Hindu">Hindu</option>
            <option value="Budha">Budha</option>
            <option value="Khong Hu Chu">Khong Hu Chu</option>
            <option value="Lainnya">Lainnya</option>
          </select>
        </div>
        <div class="mb-2">
          <label for="muridBerkebutuhan" class="form-label">Berkebutuhan Khusus</label>
          <select class="form-select" name="muridBerkebutuhan" id="muridBerkebutuhan" required>
            <option selected></option>
            <option value="Tidak">Tidak</option>
            <option value="Netra">Netra</option>
            <option value="Rungu">Rungu</option>
            <option value="Grahita Ringan">Grahita Ringan</option>
            <option value="Grahita Sedang">Grahita sedang</option>
            <option value="Daksa Ringan">Daksa Ringan</option>
            <option value="Daksa Sedang">Daksa Sedang</option>
            <option value="Laras">Laras</option>
            <option value="Wicara">Wicara</option>
            <option value="Tuna Ganda">Tuna Ganda</option>
            <option value="Hiper Aktif">Hiper Aktif</option>
            <option value="Cerdas Istimewa">Cerdas Istimewa</option>
            <option value="Bakat Istimewa">Bakat Istimewa</option>
            <option value="Kesulitan Belajar">Kesulitan Belajar</option>
            <option value="Narkoba">Narkoba</option>
            <option value="Indigo">Indigo</option>
            <option value="Down Sindrome">Down Sindrome</option>
            <option value="Autis">Autis</option>
          </select>
        </div>
        <div class="mb-2">
          <label for="alamatJalan" class="form-label">Alamat Jalan</label>
          <input class="form-control" type="text" name="alamatJalan" id="alamatJalan" required autocomplete ="off">
        </div>
        <div class="mb-2">
          <label for="rt" class="form-label">RT</label>
          <input class="form-control" type="text" name="rt" id="rt" required autocomplete ="off">
        </div>
        <div class="mb-2">
          <label for="rw" class="form-label">RW</label>
          <input class="form-control" type="text" name="rw" id="rw" required autocomplete ="off">
        </div>
        <div class="mb-2">
          <label for="dusun" class="form-label">Nama Dusun</label>
          <input class="form-control" type="text" name="dusun" id="dusun" required autocomplete ="off">
        </div>
        <div class="mb-2">
          <label for="desa" class="form-label">Nama Kelurahan/Desa</label>
          <input class="form-control" type="text" name="desa" id="desa" required autocomplete ="off">
        </div>
        <div class="mb-2">
          <label for="kecamatan" class="form-label">Kecamatan</label>
          <input class="form-control" type="text" name="kecamatan" id="kecamatan" required autocomplete ="off">
        </div>
        <div class="mb-2">
          <label for="kodePos" class="form-label">Kode Pos</label>
          <input class="form-control" type="text" name="kodePos" id="kodePos" required autocomplete ="off">
        </div>
        <div class="mb-2">
          <label for="tempatTinggal" class="form-label">Tempat Tinggal</label>
          <select class="form-select" name="tempatTinggal" id="tempatTinggal" required>
            <option selected></option>
            <option value="Bersama orang tua">Bersama orang tua</option>
            <option value="Wali">Wali</option>
            <option value="Kos">Kos</option>
            <option value="Asrama">Asrama</option>
            <option value="Panti Asuhan">Panti Asuhan</option>
            <option value="Lainnya">Lainnya</option>
          </select>
        </div>
        <div class="mb-2">
          <label for="transportasi" class="form-label">Moda Transportasi</label>
          <select class="form-select" name="transportasi" id="transportasi" required>
            <option selected></option>
            <option value="Jalan kaki">Jalan kaki</option>
            <option value="Kendaraan Pribadi">Kendaraan Pribadi</option>
            <option value="Kendaraan Umum/angkot/Pete-pete">Kendaraan Umum/angkot/Pete-pete</option>
            <option value="Jemput Sekolah">Jemput Sekolah</option>
            <option value="Kereta Api">Kereta Api</option>
            <option value="Ojek">Ojek</option>
            <option value="Andong/Bendi/Sado/Dokar/Delma/Becak">Andong/Bendi/Sado/Dokar/Delma/Becak</option>
            <option value="Perahu Penyebrangan/Rakit/Getek">Perahu Penyebrangan/Rakit/Getek</option>
            <option value="Lainnya">Lainnya</option>
          </select>
        </div>
        <div class="mb-2">
          <label for="hp" class="form-label">Nomor HP</label>
          <input class="form-control" type="text" name="hp" id="hp" required autocomplete ="off">
        </div>
        <div class="mb-2">
          <label for="telp" class="form-label">Nomor Telepon</label>
          <input class="form-control" type="text" name="telp" id="telp" required autocomplete ="off">
        </div>
        <div class="mb-2">
          <label for="email" class="form-label">E-mail Pribadi</label>
          <input class="form-control" type="text" name="email" id="email" required autocomplete ="off">
        </div>
        <div class="mb-2">
          <label for="bantuan" class="form-label">Penerima KPS/PKH/KIP</label>
          <select class="form-select" name="bantuan" id="bantuan" required>
            <option selected></option>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
        </div>
        <div class="mb-2">
          <label for="noBantuan" class="form-label">No. KPS/KKS/PKH/KIP</label>
          <input class="form-control" type="text" name="noBantuan" id="noBantuan" autocomplete ="off">
        </div>
        <div class="mb-2">
          <label for="Kewarganegaraan" class="form-label">Kewarganegaraan</label>
          <input class="form-control" type="text" name="Kewarganegaraan" id="Kewarganegaraan" required autocomplete ="off">
        </div>
        <div class="d-flex justify-content-center mb-3">
          <button type="submit" name="next2" class="btn btn-primary">Next</button>
        </div>
      </form>
    <!-- Akhir Formulir -->
    </div>
  </body>
</html>
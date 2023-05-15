<?php
session_start();
if (!isset($_SESSION["login"])){
  header ("Location: index.php");
  exit;
}
require 'functions.php';

if ( isset($_POST["submit"])){
  if (tambahmurid($_POST) > 0){
    echo "
      <script>
        alert('Data Berhasil Ditambahkan!');
        document.location.href = 'cekDataMurid.php?NIS=".$_POST["NIS"]."'
      </script>
    ";
  }else {
    echo "
      <script>
        alert('Data Gagal Ditambahkan!');
        document.location.href = 'dashboard.php';
      </script>
    ";
  }
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
        <h1 class="fw-bolder">Formulir - Data Ibu</h1>
      </div>
    <!-- Akhir Keterangan --> 
    
    <!-- Formulir -->
    <form action="" method ="post" enctype="multipart/form-data" class="row g-3">
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
        <input type="text" name="namaLengkap" value="<?=$_POST["namaLengkap"]?>" hidden>
        <input type="text" name="jenisKelamin" value="<?=$_POST["jenisKelamin"]?>" hidden>
        <input type="text" name="NISN" value="<?=$_POST["NISN"]?>" hidden>
        <input type="text" name="NIK" value="<?=$_POST["NIK"]?>" hidden>
        <input type="text" name="tempatLahir" value="<?=$_POST["tempatLahir"]?>" hidden>
        <input type="text" name="tanggalLahir" value="<?=$_POST["tanggalLahir"]?>" hidden>
        <input type="text" name="agama" value="<?=$_POST["agama"]?>" hidden>
        <input type="text" name="muridBerkebutuhan" value="<?=$_POST["muridBerkebutuhan"]?>" hidden>
        <input type="text" name="alamatJalan" value="<?=$_POST["alamatJalan"]?>" hidden>
        <input type="text" name="rt" value="<?=$_POST["rt"]?>" hidden>
        <input type="text" name="rw" value="<?=$_POST["rw"]?>" hidden>
        <input type="text" name="dusun" value="<?=$_POST["dusun"]?>" hidden>
        <input type="text" name="desa" value="<?=$_POST["desa"]?>" hidden>
        <input type="text" name="kecamatan" value="<?=$_POST["kecamatan"]?>" hidden>
        <input type="text" name="kodePos" value="<?=$_POST["kodePos"]?>" hidden>
        <input type="text" name="tempatTinggal" value="<?=$_POST["tempatTinggal"]?>" hidden>
        <input type="text" name="transportasi" value="<?=$_POST["transportasi"]?>" hidden>
        <input type="text" name="hp" value="<?=$_POST["hp"]?>" hidden>
        <input type="text" name="telp" value="<?=$_POST["telp"]?>" hidden>
        <input type="text" name="email" value="<?=$_POST["email"]?>" hidden>
        <input type="text" name="bantuan" value="<?=$_POST["bantuan"]?>" hidden>
        <input type="text" name="noBantuan" value="<?=$_POST["noBantuan"]?>" hidden>
        <input type="text" name="Kewarganegaraan" value="<?=$_POST["Kewarganegaraan"]?>" hidden>
        <input type="text" name="namaAyah" value="<?=$_POST["namaAyah"]?>" hidden>
        <input type="text" name="lahirAyah" value="<?=$_POST["lahirAyah"]?>" hidden>
        <input type="text" name="pendidikanAyah" value="<?=$_POST["pendidikanAyah"]?>" hidden>
        <input type="text" name="pekerjaanAyah" value="<?=$_POST["pekerjaanAyah"]?>" hidden>
        <input type="text" name="penghasilanAyah" value="<?=$_POST["penghasilanAyah"]?>" hidden>
        <input type="text" name="kebutuhanAyah" value="<?=$_POST["kebutuhanAyah"]?>" hidden>
        <div class="mb-2">
          <label for="namaIbu" class="form-label">Nama Ibu Kandung</label>
          <input class="form-control" type="text" name="namaIbu" id="namaIbu" required autocomplete ="off">
        </div>
        <div class="mb-2">
          <label for="lahirIbu" class="form-label">Tahun Lahir</label>
          <select class="form-select" name="lahirIbu" id="lahirIbu" required>
            <option selected></option>
            <?php for ($i=1900; $i<=2023 ; $i++) { ?>
            <option value="<?= $i; ?>"><?= $i; ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="mb-2">
          <label for="pendidikanIbu" class="form-label">Pendidikan</label>
          <select class="form-select" name="pendidikanIbu" id="pendidikanIbu" required>
            <option selected></option>
            <option value="Tidak Sekolah">Tidak Sekolah</option>
            <option value="Putus SD">Putus SD</option>
            <option value="SD Sederajat">SD Sederajat</option>
            <option value="SMP Sederajat">SMP Sederajat</option>
            <option value="SMA Sederajat">SMA Sederajat</option>
            <option value="D1">D1</option>
            <option value="D2">D2</option>
            <option value="D3">D3</option>
            <option value="D4/S1">D4/S1</option>
            <option value="S2">S2</option>
            <option value="S3">S3</option>
          </select>
        </div>
        <div class="mb-2">
          <label for="pekerjaanIbu" class="form-label">Pekerjaan</label>
          <select class="form-select" name="pekerjaanIbu" id="pekerjaanIbu" required>
            <option selected></option>
            <option value="Tidak Bekerja">Tidak Bekerja</option>
            <option value="Nelayan">Nelayan</option>
            <option value="Petani">Petani</option>
            <option value="Peternak">Peternak</option>
            <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
            <option value="Karyawan Swasta">Karyawan Swasta</option>
            <option value="Pedagang Kecil">Pedagang Kecil</option>
            <option value="Pedagang Besar">Pedagang Besar</option>
            <option value="Wiraswasta">Wiraswasta</option>
            <option value="Buruh">Buruh</option>
            <option value="Pensiunan">Pensiunan</option>
            <option value="Lain-lain">Lain-lain</option>
          </select>
        </div>
        <div class="mb-2">
          <label for="penghasilanIbu" class="form-label">Penghasilan Bulanan</label>
          <select class="form-select" name="penghasilanIbu" id="penghasilanIbu" required>
            <option selected></option>
            <option value="Kurang dari 500.000">Kurang dari 500.000</option>
            <option value="500.000-999.999">500.000-999.999</option>
            <option value="1 juta - 1.999.999">1 juta - 1.999.999</option>
            <option value="2 juta - 4.999.999">2 juta - 4.999.999</option>
            <option value="5 juta - 20 juta">5 juta - 20 juta</option>
            <option value="lebih dari 20 juta">lebih dari 20 juta</option>
          </select>
        </div>
        <div class="mb-2">
          <label for="kebutuhanIbu" class="form-label">Berkebutuhan Khusus</label>
          <select class="form-select" name="kebutuhanIbu" id="kebutuhanIbu" required>
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
        <div class="d-flex justify-content-center mb-3">
          <button type="submit" name="submit" class="btn btn-danger">Submit</button>
        </div>
      </form>
    <!-- Akhir Formulir -->
    </div>
  </body>
</html>
<?php
include 'koneksi.php';
//menyimpan data ke dalam variabel
$nama       = $_POST['nama'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$email      = $_POST['email'];
$alamat     = $_POST ['alamat'];
$kota     = $_POST ['kota'];
$pesan     = $_POST ['pesan'];
// query SQL untuk insert data
$query = "INSERT INTO kontak SET Nama='$nama', jkel='$jenis_kelamin',Email='$email',
Alamat='$alamat',Kota='$kota',Pesan='$pesan'";
mysqli_query($conn,$query);
//mengalihkan ke halaman tampilkontak.php
header("location: tampilkontak.php");
?>
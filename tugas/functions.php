<?php
//koneksi ke database ============================================================================
$conn = mysqli_connect("localhost","root","","latihan");
//umum ===========================================================================================
function query ($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows [] = $row;
    }
    return $rows;
}
//Murid ======================================================================================
function tambahmurid ($data) {
    global $conn;
    $tanggalPengisian = htmlspecialchars($data["tanggalPengisian"]);
    $NIS = htmlspecialchars($data["NIS"]);
    $jenisPendaftaran = htmlspecialchars($data["jenisPendaftaran"]);
    $tanggalMasuk = htmlspecialchars($data["tanggalMasuk"]);
    $noPesertaUjian = htmlspecialchars($data["noPesertaUjian"]);
    $paud = htmlspecialchars($data["paud"]);
    $tk = htmlspecialchars($data["tk"]);
    $noSKHUN = htmlspecialchars($data["noSKHUN"]);
    $noIjazah = htmlspecialchars($data["noIjazah"]);
    $hobi = htmlspecialchars($data["hobi"]);
    $citaCita = htmlspecialchars($data["citaCita"]);
    $namaLengkap = htmlspecialchars($data["namaLengkap"]);
    $jenisKelamin = htmlspecialchars($data["jenisKelamin"]);
    $NISN = htmlspecialchars($data["NISN"]);
    $NIK = htmlspecialchars($data["NIK"]);
    $tempatLahir = htmlspecialchars($data["tempatLahir"]);
    $tanggalLahir = htmlspecialchars($data["tanggalLahir"]);
    $agama = htmlspecialchars($data["agama"]);
    $muridBerkebutuhan = htmlspecialchars($data["muridBerkebutuhan"]);
    $alamatJalan = htmlspecialchars($data["alamatJalan"]);
    $rt = htmlspecialchars($data["rt"]);
    $rw = htmlspecialchars($data["rw"]);
    $dusun = htmlspecialchars($data["dusun"]);
    $desa = htmlspecialchars($data["desa"]);
    $kecamatan = htmlspecialchars($data["kecamatan"]);
    $kodePos = htmlspecialchars($data["kodePos"]);
    $tempatTinggal = htmlspecialchars($data["tempatTinggal"]);
    $transportasi = htmlspecialchars($data["transportasi"]);
    $hp = htmlspecialchars($data["hp"]);
    $telp = htmlspecialchars($data["telp"]);
    $email = htmlspecialchars($data["email"]);
    $bantuan = htmlspecialchars($data["bantuan"]);
    $noBantuan = htmlspecialchars($data["noBantuan"]);
    $Kewarganegaraan = htmlspecialchars($data["Kewarganegaraan"]);
    $namaAyah = htmlspecialchars($data["namaAyah"]);
    $lahirAyah = htmlspecialchars($data["lahirAyah"]);
    $pendidikanAyah = htmlspecialchars($data["pendidikanAyah"]);
    $pekerjaanAyah = htmlspecialchars($data["pekerjaanAyah"]);
    $penghasilanAyah = htmlspecialchars($data["penghasilanAyah"]);
    $kebutuhanAyah = htmlspecialchars($data["kebutuhanAyah"]);
    $namaIbu = htmlspecialchars($data["namaIbu"]);
    $lahirIbu = htmlspecialchars($data["lahirIbu"]);
    $pendidikanIbu = htmlspecialchars($data["pendidikanIbu"]);
    $pekerjaanIbu = htmlspecialchars($data["pekerjaanIbu"]);
    $penghasilanIbu = htmlspecialchars($data["penghasilanIbu"]);
    $kebutuhanIbu = htmlspecialchars($data["kebutuhanIbu"]);
    $query = "INSERT INTO murid VALUES (
        '$tanggalPengisian','$NIS','$jenisPendaftaran','$tanggalMasuk','$noPesertaUjian','$paud',
        '$tk','$noSKHUN','$noIjazah','$hobi','$citaCita','$namaLengkap','$jenisKelamin','$NISN',
        '$NIK','$tempatLahir','$tanggalLahir','$agama','$muridBerkebutuhan','$alamatJalan','$rt',
        '$rw','$dusun','$desa','$kecamatan','$kodePos','$tempatTinggal','$transportasi','$hp','$telp',
        '$email','$bantuan','$noBantuan','$Kewarganegaraan','$namaAyah','$lahirAyah','$pendidikanAyah',
        '$pekerjaanAyah','$penghasilanAyah','$kebutuhanAyah','$namaIbu','$lahirIbu','$pendidikanIbu',
        '$pekerjaanIbu','$penghasilanIbu','$kebutuhanIbu')";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
function hapusMurid ($id){
    global $conn;
    $query = "DELETE FROM murid WHERE NIS = $id";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
function carimurid($keyword) {
    $query = "SELECT * FROM murid WHERE NIS LIKE '%$keyword%' OR namaLengkap LIKE '%$keyword%'";
    return query($query);
}
?>
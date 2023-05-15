<?php
session_start();
if (!isset($_SESSION["login"])){
  header ("Location: index.php");
  exit;
}
require 'functions.php';

$id = $_GET["id"];

if ( hapusMurid($id)){
    echo "
      <script>
        alert('Data Berhasil Dihapus!');
        document.location.href = 'dataMahasiswa.php';
      </script>
    ";
  }else {
    echo "
      <script>
        alert('Data Gagal Dihapus!');
        document.location.href = 'dataMahasiswa.php';
      </script>
    ";
  }
?>
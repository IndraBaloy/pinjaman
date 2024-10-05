<?php 
include($_SERVER['DOCUMENT_ROOT'].'/pinjaman/database/koneksi.php');

$pemohon = $_POST['pemohon'];
$jenis_dokumen = $_POST['jenis_dokumen'];

$query = mysqli_query($koneksi,"INSERT INTO dokumen (pemohon, jenis_dokumen) VALUES ('$pemohon', '$jenis_dokumen')" );
header("Location: data_dokumen.php");
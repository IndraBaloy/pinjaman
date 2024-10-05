<?php 

    $koneksi = mysqli_connect("localhost","root", "", "pinjaman");

    if (!$koneksi) {
    echo "Koneksi Gagal";
    }
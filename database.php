<?php
session_start();
header('Access-Control-Allow-Origin: *');

// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "");

// Periksa koneksi
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

// Pilih database
$dbprocess = mysqli_select_db($conn, "bethania_school");

// Periksa apakah database berhasil dipilih
if (!$dbprocess) {
    die("Gagal memilih database: " . mysqli_error($conn));
}

?>
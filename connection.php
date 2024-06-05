<?php
// Set informasi koneksi database
$hostname = "localhost";
$user = "root";
$password = "";
$database = "kampus";
// Buat koneksi ke database
$con = mysqli_connect($hostname, $user, $password, $database);
// Periksa apakah koneksi berhasil dibuat
if (!$con) {
    // Tampilkan pesan error jika koneksi gagal
    die("Koneksi database gagal: " . mysqli_connect_error());
}

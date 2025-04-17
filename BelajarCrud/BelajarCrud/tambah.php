<?php
include 'koneksi.php';

$nama = $_POST['nama_barang'] ?? '';
$kategori = $_POST['kategori'] ?? '';
$jumlah = $_POST['jumlah'] ?? '';
$harga = $_POST['harga'] ?? '';
$tanggal = $_POST['tanggal'] ?? '';

if ($nama && $kategori && $jumlah && $harga && $tanggal) {
    $query = "INSERT INTO barang (nama_barang, kategori, jumlah, harga, tanggal_masuk) 
              VALUES ('$nama', '$kategori', '$jumlah', '$harga', '$tanggal')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header("Location: index.php");
        exit;
    } else {
        echo "Gagal menambahkan data: " . mysqli_error($koneksi);
    }
} else {
    echo "Data belum lengkap!";
}
?>

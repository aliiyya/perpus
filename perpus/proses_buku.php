<?php
include "koneksi.php";

$kode = $_POST['kode'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$jenis = $_POST['jenis'];
$penerbit = $_POST['penerbit'];

$query = mysqli_query($koneksi, 'INSERT INTO buku(kd_buku, judul_buku, pengarang, jenis_buku, penerbit) VALUES ("'.$kode.'", "'.$judul.'", "'.$pengarang.'", "'.$jenis.'", "'.$penerbit.'")');

if ($query) {
    echo "<script>alert('Data berhasil disimpan');</script>";
    echo "<script>document.location.href='buku.php';</script>";
} else {
    echo "<script>alert('Data gagal disimpan');</script>";
    echo "<script>document.location.href='input_buku.php';</script>";
}
?>

<?php
include "koneksi.php";

$anggota = $_POST['anggota'];
$buku = $_POST['buku'];

$tgl_pinjam = date('Y-m-d');
$tgl_kembali = date('Y-m-d', strtotime('+7 days')); // Misalnya, pengembalian dalam 7 hari

$query = mysqli_query($koneksi, 'INSERT INTO meminjam (tgl_pinjam, jumlah_pinjam, tgl_kembali, id_anggota, kd_buku, kembali) VALUES ("' . $tgl_pinjam . '", 1, "' . $tgl_kembali . '", "' . $anggota . '", "' . $buku . '", 1)');

if ($query) {
    echo "<script>alert('Data berhasil disimpan');</script>";
    echo "<script>document.location.href='pinjam.php';</script>";
} else {
    echo "<script>alert('Data gagal disimpan');</script>";
    echo "<script>document.location.href='pinjam.php';</script>";
}
?>

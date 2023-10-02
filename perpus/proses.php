<?php
include "koneksi.php";

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$ttl = $_POST['ttl'];
$status = $_POST['status'];

$query = mysqli_query($koneksi, 'INSERT INTO anggota(nm_anggota, alamat, ttl_anggota, status_anggota) VALUES ("' . $nama . '","' . $alamat . '","' . $ttl . '","' . $status . '")');

if ($query) {
    echo "<script>alert('Data berhasil disimpan');</script>";
    echo "<script>document.location.href='anggota.php';</script>";
} else {
    echo "<script>alert('Data gagal disimpan');</script>";
    echo "<script>document.location.href='input_anggota.php';</script>";
}
?>

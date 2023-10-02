<?php
include "koneksi.php";

$tgl = date('Y-m-d');

// Assuming $_GET['id'] is safe and properly sanitized
$id = $_GET['id'];

// Create a mysqli connection
$mysqli = new mysqli($servername, $username, $password, $db);

// Check the connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Prepare the SQL statement with a parameter
$query = "UPDATE meminjam SET tgl_kembali = ?, kembali = '2' WHERE id_pinjam = ?";
$stmt = $mysqli->prepare($query);

// Bind parameters
$stmt->bind_param("si", $tgl, $id);

// Execute the statement
if ($stmt->execute()) {
    echo "<script>alert('Buku Sudah Dikembalikan');</script>";
    echo "<script>document.location.href='pinjam.php';</script>";
} else {
    echo "<script>alert('Gagal: " . $mysqli->error . "');</script>";
    echo "<script>document.location.href='pinjam.php';</script>";
}

// Close the statement and the connection
$stmt->close();
$mysqli->close();
?>



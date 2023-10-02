<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <table width="1000" border="1">
        <tr>
            <td colspan="2" align="center">
                <h1>Sistem Informasi Perpustakaan</h1>
            </td>
        </tr>
        <tr>
            <td width="200">
                <ul>
                    <li><a href="anggota.php">Anggota</a></li>
                    <li><a href="buku.php">Buku</a></li>
                    <li><a href="pinjam.php">Pinjam</a></li>
                </ul>
            </td>
            <td width="500">
                <a href="input_buku.php">Input buku</a>
                <table border="1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Buku</th>
                            <th>Judul Buku</th>
                            <th>Pengarang</th>
                            <th>Jenis Buku</th>
                            <th>Penerbit</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "koneksi.php";
                        $query = "SELECT * FROM buku ORDER BY kd_buku";
                        $sql = mysqli_query($koneksi, $query); // Menggunakan mysqli_query
                        $no = 1;
                        while ($data = mysqli_fetch_array($sql)) { // Menggunakan mysqli_fetch_array
                        ?>
                            <tr class="odd gradeX">
                                <td><?php echo $no ?></td>
                                <td><?php echo $data['kd_buku']; ?></td>
                                <td><?php echo $data['judul_buku']; ?></td>
                                <td><?php echo $data['pengarang']; ?></td>
                                <td><?php echo $data['jenis_buku']; ?></td>
                                <td class="center"><?php echo $data['penerbit']; ?></td>
                                <td class="center">
                                    <a href="edit_buku.php?id=<?php echo $data['kd_buku']; ?>">Edit</a> |
                                    <a href="hapus_buku.php?id=<?php echo $data['kd_buku']; ?>"
                                        onClick="return confirm('Apakah Anda ingin menghapus <?php echo $data['judul_buku']; ?>?')">Hapus</a>
                                </td>
                            </tr>
                        <?php
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">Achmad Pidjar</td>
        </tr>
    </table>
</body>
</html>

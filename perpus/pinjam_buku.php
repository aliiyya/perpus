<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <table width="700" border="1">
        <tr>
            <td colspan="2" align="center">
                <h1>Selamat Datang Di Sistem Perpustakaan</h1>
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
                <?php include "koneksi.php"; ?>
                <form method="post" action="proses_pinjam.php">
                    <table border="0">
                        <tr>
                            <td>Nama Peminjam</td>
                            <td>:</td>
                            <td>
                                <?php
                                $sql_anggota = "SELECT * FROM anggota ORDER BY id_anggota";
                                $kueri_anggota = mysqli_query($koneksi, $sql_anggota) or die(mysqli_error($koneksi)); // Perbaikan query dan penanganan kesalahan
                                ?>
                                <select name="anggota">
                                    <?php
                                    while ($row = mysqli_fetch_assoc($kueri_anggota)) {
                                        ?>
                                        <option value="<?php echo $row['id_anggota']; ?>"><?php echo $row['nm_anggota']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Judul Buku</td>
                            <td>:</td>
                            <td>
                                <?php
                                $sql_buku = "SELECT * FROM buku ORDER BY kd_buku";
                                $kueri_buku = mysqli_query($koneksi, $sql_buku) or die(mysqli_error($koneksi)); // Perbaikan query dan penanganan kesalahan
                                ?>
                                <select name="buku">
                                    <?php
                                    while ($row = mysqli_fetch_assoc($kueri_buku)) {
                                        ?>
                                        <option value="<?php echo $row['kd_buku']; ?>"><?php echo $row['judul_buku']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><input type="submit" name="simpan" value="Simpan"></td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">Aliyyah Salma</td>
        </tr>
    </table>
</body>
</html>

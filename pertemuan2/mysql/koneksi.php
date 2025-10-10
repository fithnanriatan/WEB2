<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "web_week2";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi Gagal : " . mysqli_connect_error());
}

// Jika tombol hapus ditekan
if (isset($_GET['hapus'])) {
    $id = mysqli_real_escape_string($koneksi, $_GET['hapus']);
    mysqli_query($koneksi, "DELETE FROM users WHERE id='$id'");
    echo "<script>alert('Data berhasil dihapus!'); window.location.href='koneksi.php';</script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <tbody>
        <h2>Data Pesan</h2>
        <a href="index.php">Tambah Data +</a><br>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Pesan</th>
                <th>Hapus</th>
            </tr>
            <?php
            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM users");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $d['nama']; ?></td>
                    <td><?= $d['pesan']; ?></td>
                    <td>
                        <a href="?hapus=<?= urlencode($d['id']); ?>"
                            onclick="return confirm('Yakin ingin menghapus data ini?')">
                            Hapus
                        </a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </tbody>
</body>

</html>
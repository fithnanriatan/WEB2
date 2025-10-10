<?php 
// input data ke database
$nama = $_POST['nama'];
$pesan = $_POST['pesan'];
$sql = "INSERT INTO users (nama, pesan) VALUES ('$nama', '$pesan')";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>alert('Data berhasil ditambahkan!'); window.location.href='koneksi.php';</script>
</body>
</html>
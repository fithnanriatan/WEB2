<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (!empty($_POST['nama']) && !empty($_POST['email']) && !empty($_POST['gender']) && !empty($_POST['alamat'])) {
        echo "<h2>Registrasi Berhasil</h2>";
        $nama = htmlspecialchars($_POST['nama']);
        $email = htmlspecialchars($_POST['email']);
        $gender = htmlspecialchars($_POST['gender']);
        $alamat = htmlspecialchars($_POST['alamat']);

        echo "Nama : " . $nama . "<br>";
        echo "Email : " . $email . "<br>";
        echo "Gender : " . $gender . "<br>";
        echo "Alamat : " . $alamat . "<br>";
        echo "<br><a href='formRegistrasi.php'>Kembali ke Form Registrasi</a>";
    } else {
        echo "Semua data belum diisi dengan lengkap!";
        echo "<br><a href='formRegistrasi.php'>Kembali ke Form Registrasi</a>";
    }

    ?>
</body>

</html>
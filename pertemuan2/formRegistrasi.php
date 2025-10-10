<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
</head>

<body>
    <form action="registrasi.php" method="post">
        <h2>Input Data Registrasi</h2>
        <label for="">Nama</label>
        <input type="text" name="nama"><br>
        <label for="">Email</label>
        <input type="text" name="email"><br>
        <label for="">Gender</label>
        <input type="radio" name="gender" value="Laki-laki">Laki-laki</input>
        <input type="radio" name="gender" value="Perempuan">Perempuan</input> <br>
        <label for="">Alamat</label>
        <textarea name="alamat" cols="30" rows="5"></textarea> <br>
        <button type="submit" name="submit">Kirim</button>
        <button type="reset">Batal</button>
    </form>

    <?php
    if (!empty($_POST['nama']) && !empty($_POST['email']) && !empty($_POST['gender']) && !empty($_POST['alamat'])) {
    }
    ?>
</body>

</html>
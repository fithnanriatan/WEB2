<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Pesan</title>
</head>
<body>
    <h2>Selamat Datang</h2>
    <form action="input.php" method="post">
        <label for="">Nama</label>
        <input type="text" name="nama"><br>
        <label for="">Pesan</label>
        <textarea name="pesan" cols="30" rows="5"></textarea> <br>
        <button type="submit" name="submit">Kirim</button>
        <button type="reset">Batal</button>
    </form>
</body>
</html>
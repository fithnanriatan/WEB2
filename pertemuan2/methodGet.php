<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <div>
            <label for="">Username</label>  <br>
            <input type="text" name="username">
        </div>
        <div>
            <label for="">Password</label> <br>
            <input type="password" name="password">
        </div>
        <div>
            <button id="submit" type="submit">Kirim</button>
            <button type="reset">Batal</button>
        </div>
    </form>
    <?php
        if(isset($_POST['username']) && isset($_POST['password'])){
            echo "Username : " . $_POST['username'];
            echo "<br>";
            echo "Password : " . $_POST['password'];
        } else {
            echo "Data belum diisi";
        }
    ?>
</body>

</html>
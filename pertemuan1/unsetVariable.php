<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $nama = "FR";
        unset($nama);
        var_dump(isset($nama));
    ?>
</body>
</html>
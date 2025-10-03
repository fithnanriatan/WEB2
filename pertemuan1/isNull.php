<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>is NULL</title>
</head>
<body>
    <?php 
        $nama = "fithnan riatan";
        $nama = NULL;

        $isNull = is_null($nama);
        var_dump($isNull);
    ?>
</body>
</html>
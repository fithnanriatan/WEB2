<?php
include 'database.php';
$db = new Database;

$id = $_GET['id'];

mysqli_query($db->connect, "DELETE FROM tb_users WHERE id = $id");
echo "<script>
alert('Data berhasil dihapus!');
window.location.href = 'index.php';
</script>";

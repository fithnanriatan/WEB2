<?php 
$id = $_GET['id'];
$query = "DELETE FROM tb_produk WHERE id_produk='$id'";
$delete = mysqli_query($koneksi, $query);
if ($delete) {
    echo "<script>
            alert('Data produk berhasil dihapus!');
            window.location.href = '?page=produk';
          </script>";
    exit();
} else {
    echo "<script>
            alert('Gagal menghapus data!');
            window.location.href = '?page=produk';
          </script>";
}
?>
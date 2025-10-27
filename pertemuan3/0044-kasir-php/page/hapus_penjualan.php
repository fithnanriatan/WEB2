<?php
$id = $_GET['id'];
$query = "DELETE FROM tb_penjualan WHERE id_penjualan='$id'";
if (mysqli_query($koneksi, $query)) {
    echo "<script>
            alert('Data penjualan berhasil dihapus!');
            window.location.href = '?page=penjualan';
          </script>";
    exit();
} else {
    echo "<script>
            alert('Gagal menghapus data!');
            window.location.href = '?page=penjualan';
          </script>";
}

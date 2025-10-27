<?php
// hapus_pelanggan.php
$id = $_GET['id'];
$query = "DELETE FROM tb_pelanggan WHERE id_pelanggan='$id'";
try {
  $delete = mysqli_query($koneksi, $query);
  if ($delete) {
    echo "<script>
            alert('Data pelanggan berhasil dihapus!');
            window.location.href = '?page=pelanggan';
          </script>";
    exit();
  } else {
    echo "<script>
            alert('Gagal menghapus data!');
            window.location.href = '?page=pelanggan';
          </script>";
  }
} catch (\Throwable $th) {
    echo "<script>
            alert('Data pelanggan tidak dapat dihapus karena masih terkait dengan data lain!');
            window.location.href = '?page=pelanggan';
          </script>";
}

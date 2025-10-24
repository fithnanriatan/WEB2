<?php
$id = $_GET['id'];
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama_produk'];
    $harga = $_POST['harga_produk'];
    $stok = $_POST['stok_produk'];

    // ubah data pelanggan
    $query = "UPDATE tb_produk SET nama_produk='$nama', harga_produk='$harga', stok_produk='$stok' WHERE id_produk='$id'";

    $update = mysqli_query($koneksi, $query);
    if ($update) {
        echo "<script>
                alert('Data produk berhasil diubah!');
                window.location.href = '?page=produk';
              </script>";
        exit();
    } else {
        echo "<script>alert('Gagal mengubah data!');</script>";
    }
}

// ambil data produk berdasarkan id
$query = mysqli_query($koneksi, "SELECT * FROM tb_produk WHERE id_produk='$id'");
$data = mysqli_fetch_array($query);
?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Produk</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Edit Produk</li>
    </ol>
    <hr>
    <div class="col-md-6">
        <form action="" method="post">
            
            <div class="mb-3">
                <label for="nama_produk" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="<?= $data['nama_produk'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="harga_produk" class="form-label">Harga Produk</label>
                <input type="text" class="form-control" id="harga_produk" name="harga_produk" value="<?= $data['harga_produk'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="stok_produk" class="form-label">Stok Produk</label>
                <input type="number" class="form-control" id="stok_produk" name="stok_produk" value="<?= $data['stok_produk'] ?>" required>
            </div>
            <a href="?page=produk" class="btn btn-danger">Batal</a>
            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
        </form>
    </div>
</div>
<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama_produk'];
    $harga = $_POST['harga_produk'];
    $stok = $_POST['stok_produk'];

    $query = "INSERT INTO tb_produk (nama_produk, harga_produk, stok_produk) VALUES ('$nama', '$harga', '$stok')";

    $insert = mysqli_query($koneksi, $query);
    if ($insert) {
        echo "<script>
                alert('Data produk berhasil disimpan!');
                window.location.href = '?page=produk';
              </script>";
        exit();
    } else {
        echo "<script>alert('Gagal menyimpan data!');</script>";
    }
    
}
?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Tambah Produk</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Tambah Produk</li>
    </ol>
    <hr>
    <div class="col-md-6">
        <form action="" method="post">
            <div class="mb-3">
                <label for="nama_produk" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="nama_produk" name="nama_produk" required>
            </div>
            <div class="mb-3">
                <label for="harga_produk" class="form-label">Harga Produk</label>
                <input type="number" class="form-control" id="harga_produk" name="harga_produk" required>
            </div>
            <div class="mb-3">
                <label for="stok_produk" class="form-label">Stok Produk</label>
                <input type="number" class="form-control" id="stok_produk" name="stok_produk" required>
            </div>
            <a href="?page=Produk" class="btn btn-danger">Batal</a>
            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
        </form>
    </div>
</div>
<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama_pelanggan'];
    $alamat = $_POST['alamat_pelanggan'];
    $telepon = $_POST['telepon_pelanggan'];

    $query = "INSERT INTO tb_pelanggan (nama_pelanggan, alamat_pelanggan, no_telp_pelanggan) VALUES ('$nama', '$alamat', '$telepon')";

    $insert = mysqli_query($koneksi, $query);
    if ($insert) {
        echo "<script>
                alert('Data pelanggan berhasil disimpan!');
                window.location.href = '?page=pelanggan';
              </script>";
        exit();
    } else {
        echo "<script>alert('Gagal menyimpan data!');</script>";
    }
    
}
?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Tambah Pelanggan</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Tambah Pelanggan</li>
    </ol>
    <hr>
    <div class="col-md-6">
        <form action="" method="post">
            <div class="mb-3">
                <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
                <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" required>
            </div>
            <div class="mb-3">
                <label for="alamat_pelanggan" class="form-label">Alamat Pelanggan</label>
                <input type="text" class="form-control" id="alamat_pelanggan" name="alamat_pelanggan" required>
            </div>
            <div class="mb-3">
                <label for="telepon_pelanggan" class="form-label">Telepon Pelanggan</label>
                <input type="number" class="form-control" id="telepon_pelanggan" name="telepon_pelanggan" required>
            </div>
            <a href="?page=pelanggan" class="btn btn-danger">Batal</a>
            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
        </form>
    </div>
</div>
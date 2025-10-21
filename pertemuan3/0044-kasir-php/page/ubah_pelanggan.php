<?php
$id = $_GET['id'];
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama_pelanggan'];
    $alamat = $_POST['alamat_pelanggan'];
    $telepon = $_POST['telepon_pelanggan'];

    // ubah data pelanggan
    $query = "UPDATE tb_pelanggan SET nama_pelanggan='$nama', alamat_pelanggan='$alamat', no_telp_pelanggan='$telepon' WHERE id_pelanggan='$id'";

    $update = mysqli_query($koneksi, $query);
    if ($update) {
        echo "<script>
                alert('Data pelanggan berhasil diubah!');
                window.location.href = '?page=pelanggan';
              </script>";
        exit();
    } else {
        echo "<script>alert('Gagal mengubah data!');</script>";
    }
}

// ambil data pelanggan berdasarkan id
$query = mysqli_query($koneksi, "SELECT * FROM tb_pelanggan WHERE id_pelanggan='$id'");
$data = mysqli_fetch_array($query);
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
                <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" value="<?= $data['nama_pelanggan'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="alamat_pelanggan" class="form-label">Alamat Pelanggan</label>
                <input type="text" class="form-control" id="alamat_pelanggan" name="alamat_pelanggan" value="<?= $data['alamat_pelanggan'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="telepon_pelanggan" class="form-label">Telepon Pelanggan</label>
                <input type="number" class="form-control" id="telepon_pelanggan" name="telepon_pelanggan" value="<?= $data['no_telp_pelanggan'] ?>" required>
            </div>
            <a href="?page=pelanggan" class="btn btn-danger">Batal</a>
            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
        </form>
    </div>
</div>
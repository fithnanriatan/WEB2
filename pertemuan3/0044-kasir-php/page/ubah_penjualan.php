<?php
// Get the sales ID from URL parameter
$id = $_GET['id'];
// Fetch existing sale data
$query = mysqli_query($koneksi, "SELECT * FROM tb_penjualan WHERE id_penjualan = '$id'");
$data = mysqli_fetch_array($query);

if (isset($_POST['simpan'])) {
    $id_pelanggan = $_POST['id_pelanggan'];
    $tanggal = $_POST['tanggal_penjualan'];
    $total = $_POST['total_harga'];

    $query = "UPDATE tb_penjualan SET 
              id_pelanggan = '$id_pelanggan', 
              tanggal_penjualan = '$tanggal', 
              total_harga = '$total' 
              WHERE id_penjualan = '$id'";

    $update = mysqli_query($koneksi, $query);
    if ($update) {
        echo "<script>
                alert('Data penjualan berhasil diubah!');
                window.location.href = '?page=penjualan';
              </script>";
        exit();
    } else {
        echo "<script>alert('Gagal mengubah data!');</script>";
    }
}
?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Ubah Penjualan</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Ubah Penjualan</li>
    </ol>
    <hr>
    <div class="col-md-6">
        <form action="" method="post">
            <div class="mb-3">
                <label for="id_pelanggan" class="form-label">Nama Pelanggan</label>
                <select name="id_pelanggan" id="id_pelanggan" class="form-select" required>
                    <option value="" disabled>-- Pilih Pelanggan --</option>
                    <?php 
                    $pelanggan = mysqli_query($koneksi, "SELECT * FROM tb_pelanggan");
                    while($pel = mysqli_fetch_array($pelanggan)){
                        $selected = ($pel['id_pelanggan'] == $data['id_pelanggan']) ? 'selected' : '';
                    ?>
                        <option value="<?= $pel['id_pelanggan'] ?>" <?= $selected ?>><?= $pel['nama_pelanggan'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="tanggal_penjualan" class="form-label">Tanggal Penjualan</label>
                <input type="date" class="form-control" id="tanggal_penjualan" name="tanggal_penjualan" value="<?= $data['tanggal_penjualan'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="total_harga" class="form-label">Total Harga</label>
                <input type="number" class="form-control" id="total_harga" name="total_harga" value="<?= $data['total_harga'] ?>" required>
            </div>
            <div class="mb-3">
                <a href="?page=penjualan" class="btn btn-danger me-2">
                    <i class="fas fa-times"></i> Batal
                </a>
                <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
            </div>
        </form>
    </div>
</div>
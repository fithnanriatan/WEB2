<?php
if (isset($_POST['simpan'])) {
    $id_pelanggan = $_POST['id_pelanggan'];
    $tanggal = $_POST['tanggal_penjualan'];
    $total = $_POST['total_harga'];

    $query = "INSERT INTO tb_penjualan (id_pelanggan, tanggal_penjualan, total_harga) VALUES ('$id_pelanggan', '$tanggal', '$total')";

    $insert = mysqli_query($koneksi, $query);
    if ($insert) {
        echo "<script>
                alert('Data penjualan berhasil disimpan!');
                window.location.href = '?page=penjualan';
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
        <li class="breadcrumb-item active">Tambah Penjualan</li>
    </ol>
    <hr>
    <div class="col-md-6">
        <form action="" method="post">
            <div class="mb-3">
                <label for="id_pelanggan" class="form-label">Nama Pelanggan</label>
                <select name="id_pelanggan" id="id_pelanggan" class="form-select" required>
                    <option value="" selected disabled>-- Pilih Pelanggan --</option>
                    <?php 
                    $pelanggan = mysqli_query($koneksi, "SELECT * FROM tb_pelanggan");
                    while($data = mysqli_fetch_array($pelanggan)){
                    ?>
                        <option value="<?= $data['id_pelanggan'] ?>"><?= $data['nama_pelanggan'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="tanggal_penjualan" class="form-label">Tanggal Penjualan</label>
                <input type="date" class="form-control" id="tanggal_penjualan" name="tanggal_penjualan" required>
            </div>
            <div class="mb-3">
                <label for="total_harga" class="form-label">Total Harga</label>
                <input type="number" class="form-control" id="total_harga" name="total_harga" required>
            </div>
            <div class="mb-3">
                <a href="?page=pelanggan" class="btn btn-danger me-2">
                    <i class="fas fa-times"></i> Batal
                </a>
            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
        </form>
    </div>
</div>
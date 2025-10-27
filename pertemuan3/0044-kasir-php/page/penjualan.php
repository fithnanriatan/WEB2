<div class="container-fluid px-4">
    <h1 class="mt-4">Penjualan</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Penjualan</li>
    </ol>
    <a href="?page=tambah_penjualan" class="btn btn-primary">+ Tambah Data</a>
    <hr>
    <table class="table tabel-bordered">
        <tr>
            <th>No</th>
            <th>Nama Pelanggan</th>
            <th>Tanggal Penjualan</th>
            <th>Total Harga</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        $query = mysqli_query($koneksi, "SELECT p.id_penjualan, pl.nama_pelanggan, p.tanggal_penjualan, p.total_harga 
                                         FROM tb_penjualan p 
                                         JOIN tb_pelanggan pl ON p.id_pelanggan = pl.id_pelanggan");
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $data['nama_pelanggan']; ?></td>
                <td><?= $data['tanggal_penjualan']; ?></td>
                <td>Rp <?= number_format($data['total_harga'], 0, ',', '.'); ?></td>
                <td>
                    <a href="?page=ubah_penjualan&id=<?= $data['id_penjualan']; ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="?page=hapus_penjualan&id=<?= $data['id_penjualan']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
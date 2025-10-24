<div class="container-fluid px-4">
    <h1 class="mt-4">Produk</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Produk</li>
    </ol>
    <a href="?page=tambah_produk" class="btn btn-primary">+ Tambah Data</a>
    <hr>
    <table class="table tabel-bordered">
        <tr>
            <th>No</th>
            <th>Produk</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        $query = mysqli_query($koneksi, "SELECT * FROM tb_produk");
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $data['nama_produk']; ?></td>
                <td><?= $data['harga_produk']; ?></td>
                <td><?= $data['stok_produk']; ?></td>
                <td>
                    <a href="?page=ubah_produk&id=<?= $data['id_produk']; ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="?page=hapus_produk&id=<?= $data['id_produk']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
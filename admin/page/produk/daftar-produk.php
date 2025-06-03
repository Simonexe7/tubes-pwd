<h2 class="mt-4 mb-4"><i class="fas fa-shopping-basket"></i> Produk</h2>

<button type="button" class="btn btn-primary mb-2"onclick="window.location.href='dashboard.php?module=produk&page=tambah-produk'"><i class="fas fa-plus"></i> Tambah Produk</button>
<div class="row">
    <div class="col">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Subkategori</th>
                    <th>Gambar</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    require_once('../model/Produk.php');
                    $produk = new Produk();
                    $produks = $produk->getAll();
                    $no = 1;
                    foreach ($produks as $row) :
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['nama_produk'] ?></td>
                    <td><?= $row['subkategori'] ?></td>
                    <td><img src="../img/<?= $row['gambar'] ?>" alt="" width="50"></td>
                    <td>Rp.<?= $row['harga'] ?></td>
                    <td>
                        <a href="#"><i class="fa fa-eye text-success"></i></a>
                        <a href="dashboard.php?module=produk&page=edit-produk&id=<?= $row['id'] ?>"><i class="fa fa-edit text-warning"></i></a>
                        <a href="page/produk/deleteProduk.php?id=<?= $row['id'] ?>"><i class="fa fa-trash text-danger"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


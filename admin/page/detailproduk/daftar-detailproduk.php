<h2 class="mt-4 mb-4"><i class="fas fa-shopping-basket"></i> Detail Produk</h2>

<button type="button" class="btn btn-primary mb-2"onclick="window.location.href='dashboard.php?module=detailproduk&page=tambah-detailproduk'"><i class="fas fa-plus"></i> Tambah Detail Produk</button>
<div class="row">
    <div class="col">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Gambar</th>
                    <th>Harga</th>
                    <th>Supplier</th>
                    <th>Deskripsi</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    require_once('../model/DetailProduk.php');
                    $detailproduk = new DetailProduk();
                    $detailproduks = $detailproduk->getAll();
                    $no = 1;
                    foreach ($detailproduks as $row) :
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['nama_produk'] ?></td>
                    <td><img src="../img/<?= $row['gambar'] ?>" alt="" width="50"></td>
                    <td>Rp.<?= $row['harga'] ?></td>
                    <td><?= $row['nama_supplier'] ?></td>
                    <td><?= $row['deskripsi'] ?></td>
                    <td><?= $row['stok'] ?></td>
                    <td>
                        <a href="#"><i class="fa fa-eye text-success"></i></a>
                        <a href="dashboard.php?module=detailproduk&page=edit-detailproduk&id=<?= $row['id'] ?>"><i class="fa fa-edit text-warning"></i></a>
                        <a href="page/detailproduk/deletedetailProduk.php?id=<?= $row['id'] ?>"><i class="fa fa-trash text-danger"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


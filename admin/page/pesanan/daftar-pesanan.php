<h2 class="mt-4 mb-4"><i class="fas fa-shopping-cart"></i> Pesanan</h2>

<button type="button" class="btn btn-primary mb-2"onclick="window.location.href='dashboard.php?module=pesanan&page=tambah-pesanan'"><i class="fas fa-plus"></i> Tambah Pesanan</button>
<div class="row">
    <div class="col">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Produk</th>
                    <th>Supplier</th>
                    <th>Qty</th>
                    <th>Total Harga</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    require_once('../model/Pesanan.php');
                    $pesanan = new Pesanan();
                    $pesanans = $pesanan->getAll();
                    $no = 1;
                    foreach ($pesanans as $row) :
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['nama_produk'] ?></td>
                    <td><?= $row['nama_supplier'] ?></td>
                    <td><?= $row['qty'] ?></td>
                    <td>Rp.<?= $row['total_harga'] ?></td>
                    <td><?= $row['tanggal'] ?></td>
                    <td>
                        <a href="#"><i class="fa fa-eye text-success"></i></a>
                        <a href="dashboard.php?module=pesanan&page=edit-pesanan&id=<?= $row['id'] ?>"><i class="fa fa-edit text-warning"></i></a>
                        <a href="page/pesanan/deletepesanan.php?id=<?= $row['id'] ?>"><i class="fa fa-trash text-danger"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


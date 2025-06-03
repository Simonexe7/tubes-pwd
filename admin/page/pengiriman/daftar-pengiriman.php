<h2 class="mt-4 mb-4"><i class="fas fa-truck"></i> Metode Pengiriman</h2>

<button type="button" class="btn btn-primary mb-2" onclick="window.location.href='dashboard.php?module=pengiriman&page=tambah-pengiriman'"><i class="fas fa-plus"></i> Tambah Metode Pengiriman</button>
<div class="row">
    <div class="col">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Metode</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    require_once('../model/Pengiriman.php');
                    $pengiriman = new Pengiriman();
                    $pengirimans = $pengiriman->getAll();
                    $no = 1;
                    foreach ($pengirimans as $row) :
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['metode'] ?></td>
                    <td>
                        <a href="#"><i class="fa fa-eye text-success"></i></a>
                        <a href="dashboard.php?module=pengiriman&page=edit-pengiriman&id=<?= $row['id'] ?>"><i class="fa fa-edit text-warning"></i></a>
                        <a href="page/pengiriman/deletePengiriman.php?id=<?= $row['id'] ?>"><i class="fa fa-trash text-danger"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


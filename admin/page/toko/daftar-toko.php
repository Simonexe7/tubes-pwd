<h2 class="mt-4 mb-4"><i class="fas fa-store"></i> Toko</h2>

<button type="button" class="btn btn-primary mb-2" onclick="window.location.href='dashboard.php?module=toko&page=tambah-toko'"><i class="fas fa-plus"></i> Tambah Toko</button>
<div class="row">
    <div class="col">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Toko</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    require_once('../model/Toko.php');
                    $toko = new Toko();
                    $tokos = $toko->getAll();
                    $no = 1;
                    foreach ($tokos as $row) :
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['nama_toko'] ?></td>
                    <td><?= $row['alamat'] ?></td>
                    <td>
                        <a href="#"><i class="fa fa-eye text-success"></i></a>
                        <a href="../../dashboard.php?module=toko&page=edit-toko.php?id=<?= $row['id'] ?>"><i class="fa fa-edit text-warning"></i></a>
                        <a href="page/toko/deleteToko.php?id=<?= $row['id'] ?>"><i class="fa fa-trash text-danger"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

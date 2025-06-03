<h2 class="mt-4 mb-4"><i class="fas fa-clipboard-list"></i> Subkategori</h2>

<button type="button" class="btn btn-primary mb-2" onclick="window.location.href='dashboard.php?module=subkategori&page=tambah-subkategori'"><i class="fas fa-plus"></i> Tambah Subkategori</button>
<div class="row">
    <div class="col">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Subkategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    require_once('../model/Subkategori.php');
                    $subkategori = new Subkategori();
                    $subkategoris = $subkategori->getAll();
                    $no = 1;
                    foreach ($subkategoris as $row) :
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['nama_kategori'] ?></td>
                    <td><?= $row['subkategori'] ?></td>
                    <td>
                        <a href="#"><i class="fa fa-eye text-success"></i></a>
                        <a href="dashboard.php?module=subkategori&page=edit-subkategori&id=<?= $row['id'] ?>"><i class="fa fa-edit text-warning"></i></a>
                        <a href="page/subkategori/deleteSubkategori.php?id=<?= $row['id'] ?>"><i class="fa fa-trash text-danger"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


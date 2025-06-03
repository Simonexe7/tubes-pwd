<h2 class="mt-4 mb-4"><i class="fas fa-clipboard-list"></i> Kategori</h2>

<button type="button" class="btn btn-primary mb-2" onclick="window.location.href='dashboard.php?module=kategori&page=tambah-kategori'"><i class="fas fa-plus"></i> Tambah Kategori</button>
<div class="row">
    <div class="col">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    require_once('../model/Kategori.php');
                    $kategori = new Kategori();
                    $kategoris = $kategori->getAll();
                    $no = 1;
                    foreach ($kategoris as $row) :
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['nama_kategori'] ?></td>
                    <td>
                        <a href="#"><i class="fa fa-eye text-success"></i></a>
                        <a href="dashboard.php?module=kategori&page=edit-kategori&id=<?= $row['id'] ?>"><i class="fa fa-edit text-warning"></i></a>
                        <a href="page/kategori/deleteKategori.php?id=<?= $row['id'] ?>"><i class="fa fa-trash text-danger"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


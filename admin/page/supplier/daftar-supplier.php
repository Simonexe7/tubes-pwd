<h2 class="mt-4 mb-4"><i class="fas fa-truck"></i> Supplier</h2>

<button type="button" class="btn btn-primary mb-2" onclick="window.location.href='dashboard.php?module=supplier&page=tambah-supplier'"><i class="fas fa-plus"></i> Tambah Supplier</button>
<div class="row">
    <div class="col">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Supplier</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    require_once('../model/Supplier.php');
                    $supplier = new Supplier();
                    $suppliers = $supplier->getAll();
                    $no = 1;
                    foreach ($suppliers as $row) :
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['nama_supplier'] ?></td>
                    <td>
                        <a href="#"><i class="fa fa-eye text-success"></i></a>
                        <a href="dashboard.php?module=supplier&page=edit-supplier&id=<?= $row['id'] ?>"><i class="fa fa-edit text-warning"></i></a>
                        <a href="page/supplier/deleteSupplier.php?id=<?= $row['id'] ?>"><i class="fa fa-trash text-danger"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


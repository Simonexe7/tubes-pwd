<?php 
require_once "../model/Toko.php";
require_once "../model/Produk.php";
require_once "../model/Kategori.php";
require_once "../model/User.php";
require_once "../model/Supplier.php";
require_once "../model/Pesanan.php";

$toko = new Toko();
$produk = new Produk();
$kategori = new Kategori();
$user = new User();
$supplier = new Supplier();
$pesanan = new Pesanan();

$jmlToko = $toko->counter();
$jmlProduk = $produk->counter();
$jmlKategori = $kategori->counter();
$jmluser = $user->counter();
$jmlSupplier = $supplier->counter();
$jmlPesanan = $pesanan->counter();
$username = $_SESSION['username'];

?>

<h2 class="mt-4 mb-4"><i class="fas fa-tachometer-alt"></i> Dashboard</h2>

<div class="alert alert-info alert-dismissible fade show" role="alert">
    <strong>Hi,</strong> Selamat Datang <?= $username; ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<div class="row">
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2 bg-primary">
            <div class="card-body ">
                <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-white mb-1">Toko</div>
                    <div class="h5 mb-0 font-weight-bold text-white"><?= $jmlToko; ?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-store fa-4x text-white"></i>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2 bg-warning">
            <div class="card-body ">
                <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-white mb-1">Produk</div>
                    <div class="h5 mb-0 font-weight-bold text-white rounded-circle"><?= $jmlProduk; ?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-shopping-basket fa-4x text-white"></i>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2 bg-success">
            <div class="card-body ">
                <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-white mb-1">Kategori</div>
                    <div class="h5 mb-0 font-weight-bold text-white"><?= $jmlKategori; ?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-4x text-white"></i>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2 bg-success">
            <div class="card-body ">
                <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-white mb-1">User</div>
                    <div class="h5 mb-0 font-weight-bold text-white"><?= $jmluser; ?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-4x text-white"></i>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2 bg-primary">
            <div class="card-body ">
                <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-white mb-1">Supplier</div>
                    <div class="h5 mb-0 font-weight-bold text-white"><?= $jmlSupplier; ?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-truck fa-4x text-white"></i>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2 bg-warning">
            <div class="card-body ">
                <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-white mb-1">Pesanan</div>
                    <div class="h5 mb-0 font-weight-bold text-white rounded-circle"><?= $jmlPesanan; ?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-shopping-basket fa-4x text-white"></i>
                </div>
                </div>
            </div>
        </div>
    </div>
</div><!--END row-->        

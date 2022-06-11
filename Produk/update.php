<?php 
include("controller.php");
include("head.php");
 ?>

<body>
    <div class="container-fluid">
        <div class=" card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Ubah Barang</h6>
            </div>
            <div class="card-body">
                <?php
                if (isset($_GET["updateProdukID"])) {
                    $data_to_be_updated = $_GET["updateProdukID"];
                    $data = getProdukWithID($data_to_be_updated);
                ?>
                    <form class="row g-3" method="POST" action="" enctype="multipart/form-data">
                        <div class="col-md-12">
                            <label for="showFoto" class="form-label">Foto</label>
                            <img class="img-fluid" src="foto/<?= $data['fotoproduk'] ?>" width="35" height="40">
                            <input type="hidden" name="update_produkid" value="<?= $data['produkid'] ?>">
                            <input type="hidden" name="update_fotoproduk" value="<?= $data['fotoproduk'] ?>">
                        </div>
                        <div class="col-md-12">
                            <label for="nama" class="form-label">Foto Barang</label>
                            <input class="form-control" type="file" name="update_fotoproduk">
                        </div>
                        <div class="col-md-12">
                            <label for="nama" class="form-label">Nama Barang</label>
                            <input class="form-control" type="text" name="update_namaproduk" value="<?= $data['namaproduk'] ?>">
                        </div>
                        <div class="col-md-12">
                            <label for="nama" class="form-label">Harga Barang</label>
                            <input class="form-control" type="text" name="update_hargaproduk" value="<?= $data['hargaproduk'] ?>">
                        </div>
                        <div class="col-md-12">
                            <label for="nama" class="form-label">Detail Barang</label>
                            <input class="form-control" type="text" name="update_detailproduk" value="<?= $data['detailproduk'] ?>">
                        </div>
                        <div class="modal-footer">
                            <a href="index.php" style="text-decoration: none;">
                                <button type="button" class="btn btn-secondary">Batal</button>
                            </a>
                            <button type="submit" name="Update_produk" class="btn btn-primary">
                                Update
                            </button>
                        </div>

                    </form>
                <?php
                }
                if (isset($_POST['Update_produk'])) {
                    if ($_FILES["update_fotoproduk"]["error"] === 4) {
                        //penyimpanan data dari form
                        $produkid = $_POST["update_produkid"];
                        $fotoproduk = $_FILES["fotoproduk"];
                        $namaproduk = $_POST["update_namaproduk"];
                        $hargaproduk = $_POST["update_hargaproduk"];
                        $detailproduk = $_POST["update_detailproduk"];

                        updateProduk($produkid, $fotoproduk, $namaproduk, $hargaproduk, $detailproduk);
                    } else {
                        //penyimpanan data dari form
                        $produkid = $_POST["update_produkid"];
                        $fotoproduk = $_FILES["update_fotoproduk"];
                        $namaproduk = $_POST["update_namaproduk"];
                        $hargaproduk = $_POST["update_hargaproduk"];
                        $detailproduk = $_POST["update_detailproduk"];

                        updateProduk($produkid, $fotoproduk, $namaproduk, $hargaproduk, $detailproduk);
                    }
                }

                ?>
            </div>
        </div>
<?php include("script.php"); ?>
</body>

</html>
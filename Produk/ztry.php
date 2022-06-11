//form lama buat create
<form method="POST" action="" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Foto</td>
                <td><input type="file" name="create_fotoproduk"></td>
            </tr>
            <tr>
                <td>Nama Produk</td>
                <td><input type="text" name="create_namaproduk"></td>
            </tr>
            <tr>
                <td>Harga produk</td>
                <td><input type="text" name="create_hargaproduk"></td>
            </tr>
            <tr>
                <td>Detail Produk</td>
                <td><input type="text" name="create_detailproduk"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan" name="create_produk"></td>
                <td><button><a href="index.php">Back</a></button></td>
            </tr>
        </table>
    </form>

//create
<?php include("controller.php"); ?>
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES["create_fotoproduk"]) && isset($_POST["create_namaproduk"]) && isset($_POST["create_hargaproduk"]) && isset($_POST["create_detailproduk"])) {
        createProduk($_POST["create_namaproduk"], $_POST["create_hargaproduk"], $_POST["create_detailproduk"], $_FILES["create_fotoproduk"]);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah Produk
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">CREATE PRODUK</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="" enctype="multipart/form-data" class="row g-3">
                        <div class="col-12">
                            <label for="inputProduk" class="form-label">Nama Produk</label>
                            <input type="text" name="create_namaproduk" class="form-control" id="inputProduk" placeholder="nama produk">
                        </div>
                        <div class="col-12">
                            <label for="inputHarga" class="form-label">Harga produk</label>
                            <input type="text" name="create_hargaproduk" class="form-control" id="inputHarga" placeholder="harga produk">
                        </div>
                        <div class="col-12">
                            <label for="inputDetail" class="form-label">Detail Produk</label>
                            <input type="text" name="create_detailproduk" class="form-control" id="inputDetail" placeholder="Detail produk">
                        </div>
                        <div class="col-12">
                            <label for="inputfoto" class="form-label">Nama Produk</label>
                            <input type="file" name="create_fotoproduk" class="form-control" id="inputfoto">
                        </div>
                </div>
                <div class="modal-footer">
                    <a href="index.php"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button></a>
                    <button type="submit" name="create_produk" class="btn btn-success">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
// update
<?php include("controller.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Update Data</title>

    <?php include("link.php"); ?>
</head>

<body>
    <h1>UPDATE PRODUK DATA</h1>

    <?php
    if (isset($_GET["updateProdukID"])) {
        $data_to_be_updated = $_GET["updateProdukID"];
        $data = getProdukWithID($data_to_be_updated);
    ?>
        <form method="POST" action="" enctype="multipart/form-data">
            <tr>
                <td>ID</td>
                <td><input type="hidden" name="update_produkid" value="<?= $data['produkid'] ?>"></td>
                <td><input type="hidden" name="update_fotoproduk" value="<?= $data['fotoproduk'] ?>"></td>
            </tr>
            <tr>
                <img src="foto/<?= $data['fotoproduk'] ?>" width="35" height="40">
            </tr>
            <tr>
                <td>Foto</td>
                <td><input type="file" name="update_fotoproduk"></td>
            </tr>
            <tr>
                <td>Nama Produk</td>
                <td><input type="text" name="update_namaproduk" value="<?= $data['namaproduk'] ?>"></td>
            </tr>
            <tr>
                <td>Harga produk</td>
                <td><input type="text" name="update_hargaproduk" value="<?= $data['hargaproduk'] ?>"></td>
            </tr>
            <tr>
                <td>Detail Produk</td>
                <td><input type="text" name="update_detailproduk" value="<?= $data['detailproduk'] ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="Update_produk"></td>
                <td><button><a href="index.php">Back</a></button></td>
            </tr>

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
    <?php include("script.php"); ?>
</body>

</html>
<?php require("controller.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <title>www.malasngoding.com - Upload file menggunakan php mysqli</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2 style="text-align: center;">CRUD Website Read All produk Data</h2>
        <br>
        <?php
        if (isset($_GET['alert'])) {
            if ($_GET['alert'] == 'gagal_ekstensi') {
        ?>
                <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-warning"></i> Peringatan !</h4>
                    Ekstensi Tidak Diperbolehkan
                </div>
            <?php
            } elseif ($_GET['alert'] == "gagal_ukuran") {
            ?>
                <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Peringatan !</h4>
                    Ukuran File terlalu Besar
                </div>
            <?php
            } elseif ($_GET['alert'] == "berhasil") {
            ?>
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Success</h4>
                    Berhasil Disimpan
                </div>
        <?php
            }
        }
        $result = readProduk();
        ?>
        <br>
        <a href="user_tambah.php" class="btn btn-info btn-sm">Tambah Data</a>
        <br>
        <br>
        <table class="table table-bordered">
            <tr>
                <th width="5%">ID</th>
                <th width="15%">Nama produk</th>
                <th width="20%">harga produk</th>
                <th width="20%">detail produk</th>
                <th width="20%">foto produk</th>
                <th width="10%">Delete</th>
                <th width="10%">Update</th>
            </tr>
            <?php
            foreach ($result as $barisdata) {
            ?>
                <tr>
                    <td><?= $barisdata['produkid'] ?></td>
                    <td><?= $barisdata['namaproduk'] ?></td>
                    <td><?= $barisdata['hargaproduk'] ?></td>
                    <td><?= $barisdata['detailproduk'] ?></td>
                    <td><img src="fotoProduk/<?= $barisdata['fotoproduk'] ?>" width="35" height="40"></td>
                    <td><a href="delete.php?deleteProdukID=<?= $barisdata['produkid'] ?>">DELETE</a></td>
                    <td><a href="update.php?updateProdukID=<?= $barisdata['produkid'] ?>">UPDATE</a></td>
                </tr>
            <?php
            }

            ?>
        </table>
    </div>
</body>

</html>
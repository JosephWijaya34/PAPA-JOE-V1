<?php
include("head.php");
?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include("sidebar.php"); ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php include("topbar.php"); ?>

                <!--Content produk-->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <table>
                            <tr>
                                <td>
                                    <h6 class="m-0 font-weight-bold text-dark">PAPA JOE'S Produk</h6>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <!-- Button trigger modal -->
                                <td><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Tambah Produk
                                    </button></td>
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
                                                        <label for="inputfoto" class="form-label">Foto Produk</label>
                                                        <input type="file" name="create_fotoproduk" class="form-control" id="inputfoto">
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="produk.php"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button></a>
                                                <button type="submit" name="create_produk" class="btn btn-success">Simpan</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                        </table>
                    </div>
                    <div class="card-body">
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
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr class="text-center">
                                        <th>Nama produk</th>
                                        <th>harga produk</th>
                                        <th>detail produk</th>
                                        <th>foto produk</th>
                                        <th>Delete</th>
                                        <th>Update</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($result as $barisdata) {
                                    ?>
                                        <tr class="text-center">
                                            <td><?= $barisdata['namaproduk'] ?></td>
                                            <td><?= $barisdata['hargaproduk'] ?></td>
                                            <td><?= $barisdata['detailproduk'] ?></td>
                                            <td><img class="img-fluid img-responsive" src="foto/<?= $barisdata['fotoproduk'] ?>" width="35" height="40"></td>
                                            <td><a href="deleteProduk.php?deleteProdukID=<?= $barisdata['produkid'] ?>"><button class="btn btn-danger">DELETE</button></a></td>
                                            <td><a href="updateProduk.php?updateProdukID=<?= $barisdata['produkid'] ?>"><button class="btn btn-success">UPDATE</button></a></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <?php include("footer.php"); ?>
            <!-- End of Content Wrapper -->
        </div>

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>

        <!-- End of Page Wrapper -->
    </div>

    <?php include("script.php"); ?>
</body>

</html>
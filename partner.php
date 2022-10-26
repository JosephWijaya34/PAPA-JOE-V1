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
                                    <h6 class="m-0 font-weight-bold text-dark">PAPA JOE'S Partner</h6>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <!-- Button trigger modal -->
                                <td><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Tambah Partner
                                    </button></td>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Create Partner</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="" enctype="multipart/form-data" class="row g-3">
                                                    <div class="col-12">
                                                        <label for="inputProduk" class="form-label">Nama Partner</label>
                                                        <input type="text" name="create_namapartner" class="form-control" placeholder="nama partner">
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="inputfoto" class="form-label">Foto Brand</label>
                                                        <input type="file" name="create_fotobrand" class="form-control" id="inputfoto">
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="partner.php"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button></a>
                                                <button type="submit" name="create_partner" class="btn btn-success">Simpan</button>
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
                        $result = readPartner();
                        ?>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr class="text-center">
                                        <th>Nama partner</th>
                                        <th>foto brand</th>
                                        <th>Delete</th>
                                        <th>Update</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($result as $barisdata) {
                                    ?>
                                        <tr class="text-center">
                                            <td><?= $barisdata['namapartner'] ?></td>
                                            <td><img class="img-fluid img-responsive" src="fotobrand/<?= $barisdata['fotobrand'] ?>" width="35" height="40"></td>
                                            <td><a href="deletePartner.php?deletepartnerID=<?= $barisdata['partnerid'] ?>"><button class="btn btn-danger">DELETE</button></a></td>
                                            <td><a href="updatePartner.php?updatepartnerID=<?= $barisdata['partnerid'] ?>"><button class="btn btn-success">UPDATE</button></a></td>
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
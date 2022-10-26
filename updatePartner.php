<?php
include("head.php");
?>
<body>
    <div class="container-fluid">
        <div class=" card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Ubah Partner</h6>
            </div>
            <div class="card-body">
                <?php
                if (isset($_GET["updatepartnerID"])) {
                    $data_to_be_updated = $_GET["updatepartnerID"];
                    $data = getPartnerWithID($data_to_be_updated);
                ?>
                    <form class="row g-3" method="POST" action="" enctype="multipart/form-data">
                        <div class="col-md-12">
                            <label for="showFoto" class="form-label">Foto</label>
                            <img class="img-fluid" src="fotobrand/<?= $data['fotobrand'] ?>" width="400" height="360">
                            <input type="hidden" name="update_partnerid" value="<?= $data['partnerid'] ?>">
                            <input type="hidden" name="fotobrand" value="<?= $data['fotobrand'] ?>">
                        </div>
                        <div class="col-md-12">
                            <label for="nama" class="form-label">Foto Barang</label>
                            <input class="form-control" type="file" name="update_fotobrand">
                        </div>
                        <div class="col-md-12">
                            <label for="nama" class="form-label">Nama Barang</label>
                            <input class="form-control" type="text" name="update_namapartner" value="<?= $data['namapartner'] ?>">
                        </div>
                        <div class="modal-footer">
                            <a href="partner.php" style="text-decoration: none;">
                                <button type="button" class="btn btn-secondary">Batal</button>
                            </a>
                            <button type="submit" name="Update_partner" class="btn btn-primary">
                                Update
                            </button>
                        </div>

                    </form>
                <?php
                }

                if (isset($_POST['Update_partner'])) {
                    if ($_FILES["update_fotobrand"]["error"] === 4) {
                        //penyimpanan data dari form
                        $partnerid = $_POST["update_partnerid"];
                        $namapartner = $_POST["update_namapartner"];
                        $fotobrand = $_FILES["fotobrand"];

                        updatePartner($partnerid, $namapartner, $fotobrand);
                    } else {
                        //penyimpanan data dari form
                        $partnerid = $_POST["update_partnerid"];
                        $namapartner = $_POST["update_namapartner"];
                        $fotobrand = $_FILES["update_fotobrand"];
                        updatePartner($partnerid, $namapartner, $fotobrand);
                    }
                }

                ?>
            </div>
        </div>
        <?php include("script.php"); ?>
</body>

</html>
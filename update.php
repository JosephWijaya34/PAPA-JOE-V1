<?php
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
                if (isset($_GET["updateID"])) {
                    $data_to_be_updated = $_GET["updateID"];
                    $data = getUserWithID($data_to_be_updated);
                ?>
                    <form class="row g-3" method="POST" action="" enctype="multipart/form-data">
                        <div class="col-md-12">
                            <input type="hidden" name="update_id" value="<?= $data['id'] ?>">
                            <label for="nama" class="form-label">Nama User</label>
                            <input class="form-control" type="text" name="update_nama" value="<?= $data['name'] ?>">
                        </div>
                        <div class="col-md-12">
                            <label for="nama" class="form-label">Email User</label>
                            <input class="form-control" type="email" name="update_email" value="<?= $data['email'] ?>">
                        </div>
                        <div class="col-md-12">
                            <label for="nama" class="form-label">Password User</label>
                            <input class="form-control" type="password" name="update_password" value="<?= $data['password'] ?>">
                        </div>
                        <div class="modal-footer">
                            <a href="user.php" style="text-decoration: none;">
                                <button type="button" class="btn btn-secondary">Batal</button>
                            </a>
                            <button type="submit" name="Update_user" class="btn btn-primary">
                                Update
                            </button>
                        </div>

                    </form>
                <?php
                }
                if (isset($_POST['Update_user'])) {
                    //penyimpanan data dari form
                    $id = $_POST["update_id"];
                    $name = $_POST["update_nama"];
                    $email = $_POST["update_email"];
                    $password = $_POST["update_password"];

                    $result = updateUser($id, $name, $email, $password);
                }

                ?>
            </div>
        </div>
        <?php include("script.php"); ?>
</body>

</html>
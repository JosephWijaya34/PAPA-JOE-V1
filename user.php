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
                                    <h6 class="m-0 font-weight-bold text-dark">PAPA JOE'S User</h6>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <!-- Button trigger modal -->
                                <td><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Tambah User
                                    </button></td>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">register New Account</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="" enctype="multipart/form-data" class="row g-3">
                                                    <div class="col-12">
                                                        <label for="inputProduk" class="form-label">Nama</label>
                                                        <input type="text" name="create_nama" class="form-control" placeholder="nama">
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="inputHarga" class="form-label">Email address</label>
                                                        <input type="email" name="create_email" class="form-control" placeholder="Email address">
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="inputDetail" class="form-label">Password</label>
                                                        <input type="password" name="create_password" class="form-control" placeholder="Password">
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="user.php"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button></a>
                                                <button type="submit" name="create_user" class="btn btn-success">Register</button>
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
                        $result = readUser();
                        ?>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr class="text-center">
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Delete</th>
                                        <th>Update</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($result as $barisdata) {
                                    ?>
                                        <tr class="text-center">
                                            <td><?= $barisdata['id'] ?></td>
                                            <td><?= $barisdata['name'] ?></td>
                                            <td><?= $barisdata['email'] ?></td>
                                            <td><?= $barisdata['password'] ?></td>
                                            <td><a href="delete.php?deleteID=<?=$barisdata['id'] ?>"><button class="btn btn-danger">DELETE</button></a></td>
                                            <td><a href="update.php?updateID=<?= $barisdata['id'] ?>"><button class="btn btn-success">UPDATE</button></a></td>
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
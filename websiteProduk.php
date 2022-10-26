<?php
include("controllerProduk.php");
$result = readProduk();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAPA JOE'S Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/e6705cd2f4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href=".//css/style.css">

</head>

<body>

    <!-- header -->
    <header>
        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg navbar-scrolled ">
                <div class="logo container-fluid ">
                    <a class="logo navbar-brand text-center" href="login.php">PAPA JOE'S</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars" style="color: white;"></i>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php" style="color: whitesmoke;">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="websiteProduk.php" style="color: whitesmoke;">Product</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#kontak" style="color: whitesmoke;">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="container text-center">
            <div class="row">
                <div class="col-md-7 col-sm-12 text-white">
                    <h1 class="jtronH">Welcome to <span>PAPA JOE'S</span></h1>
                    <p class="jtronP">Making and delivering great food for more than 5 years!</p>
                    <a href="websiteProduk.php"><button class="btn btn-light px-5 py-2">Our Menu</button></a>
                </div>
                <div class="col-md-5 col-sm-12 h-25">
                    <!-- <img src="assets/img1.png"> -->
                </div>
            </div>
        </div>

    </header>

    <!-- Main -->
    <main>
        <div class="row justify-content-center p-5" style="margin-top: 10px">
            <?php
            foreach ($result as $barisdata) {
                if ($barisdata['produkid'] == NULL) {
            ?>

                    <h1 class="text-center justify-content-center">
                        Not Available, No Product!!
                    </h1>

                <?php
                } else {

                ?>
                    <div class="col-xs-5 col-sm-6 col-md-6 col-lg-3 col-6 mb-3">
                        <div class="card shadow">
                            <div class="h-25">
                                <img src="foto/<?= $barisdata['fotoproduk'] ?>" class="card-img-top">
                            </div>
                            <div class="section-2 card-body text-center">
                                <div class="card-title">
                                    <h4><?= $barisdata['namaproduk'] ?></h4>
                                </div>
                                <h6 class="mb-2 text-muted">Rp.<?= $barisdata['hargaproduk'] ?></h6>
                                <p class="mb-2 text-muted"><?= $barisdata['detailproduk'] ?></p>
                            </div>
                            <div class="card-footer text-center ">
                                <a href="https://wa.me/6282221030638?text=Halo%20saya%20ingin%20pesan%20produk%20
                            <?= $barisdata['namaproduk'] ?> " class="btn btn-success buttonDetail" target="_blank">
                                    <i class="fa-brands fa-whatsapp"></i>Beli</a>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>

    </main>

    <!-- footer -->
    <footer class="kontak" id="kontak">
        <div class="edit container-fluid p-0 col-sm-12">
            <div class="row text-left justify-content-between">
                <div class="edit-1 col-md-5 col-sm-12">
                    <h4 class="text-light">PAPA JOE'S</h4>
                    <p class="text-secondary">Making and delivering great food for more than 5 years!</p>
                    <p class="text-secondary pt-4">Copyright @2022 All right reserve | PAPA JOE'S Website</p>
                </div>
                <div class="edit-3 col-md-2 col-sm-12" style="margin: 0px;">
                    <h4 class="text-light">Social Media</h4>
                    <p class="text-secondary">follow PAPA JOE'S on sosial media</p>
                    <div class="column">
                        <a href="https://wa.me/6282221030638?text=Halo%20saya%20ingin%20bertanya%20seputar%20produk%20PAPA%20JOE'S" target="_blank">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                        <a href="https://www.instagram.com/josephwijayaaa/" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="https://www.facebook.com/joseph.wijaya.10/" target="_blank">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>

</html>
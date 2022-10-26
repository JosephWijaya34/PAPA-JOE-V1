<?php
include("controllerPartner.php");
$result = readPartner();
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

    <main>
        <!-- section 1 -->
        <section class="section-1">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-6">
                        <div class="pray">
                            <img class="img-responsive img-fluid" src="assets/poster.png">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel text-left">
                            <h1>About US</h1>
                            <p class="pt-4">
                                PAPA JOE'S sudah hadir di Surabaya Indonesia dari tahun 2017 dan menyajikan makanan-makanan bermutu dan terjamin kenikmatannya. PAPA JOE'S juga menyediakan pesanan berskala besar untuk acara - acara seperti catering dan terima pesanan
                            </p>
                            <p>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- section 2 -->
        <section class="section-2">
            <div class="container text-center">
                <h1 class="text-dark">Our Partner's</h1>
                <p class="text-secondary">Where our product stored and sold</p>
            </div>
            <div class="team row justify-content-center align-content-center gap-5 gap-xs-3 gap-sm-3 gap-md-3 gap-lg-5 ms-3 me-3">
                <?php
                foreach ($result as $barisdata) {
                ?>
                    <div class="col-5 col-xs-12 col-sm-12 col-md-12 col-lg-5 justify-content-center shadow p-3 mb-5 bg-body rounded">
                        <img class="img-responsive img-fluid" src="fotobrand/<?= $barisdata['fotobrand'] ?>">
                    </div>
                <?php
                }
                ?>
            </div>
        </section>


    </main>


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
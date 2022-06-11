<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="indexcss.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Website Project</title>

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
        <div class="container-fluid">
            <a class="ms-5 navbar-brand" href="#">PAPA JOE'S</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Jumbotron -->
    <div class="jumbotron p-5 text-center">
        <div class="row">
            <div class="col-6">
                <h1 class="display-4">Welcome!!</h1>
                <hr class="my-4">
                <p>
                    Welcome to our website when you can find anything that you want and some rare items to that you can obtained in our website
                </p>
            </div>
            <div class="col-6">
                <!-- image  corusel -->
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="">
                        </div>
                        <div class="carousel-item">
                            <img src="">
                        </div>
                        <div class="carousel-item">
                            <img src="">
                        </div>
                        <div class="carousel-item">
                            <img src="">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- catalogue -->

    <h3 class="ms-5 mt-5 fw-bold">Limited Product</h3>
    <div class="row g-4 m-5">
        <div class="col-4">
            <div class="card">
                <div class="d-flex justify-content-center align-items-center ">
                    <img src="baju1.jfif" class="baju card-img-top">
                </div>
                <div class="card-body">
                    <h5 class="card-title">OFF-White</h5>
                    <p class="card-text">limited. 4 piece left</p>
                    <a href="#" class="btn btn-dark">Buy</a>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="d-flex justify-content-center align-items-center ">
                    <img src="baju2.jfif" class="baju card-img-top">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Versace</h5>
                    <p class="card-text">limited. 3 piece left</p>
                    <a href="#" class="btn btn-dark">Buy</a>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="d-flex justify-content-center align-items-center ">
                    <img src="baju3.jfif" class="baju card-img-top">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Dior</h5>
                    <p class="card-text">limited. 2 piece left</p>
                    <a href="#" class="btn btn-dark">Buy</a>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="d-flex justify-content-center align-items-center ">
                    <img src="baju4.jfif" class="baju card-img-top">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Louis Vuitton</h5>
                    <p class="card-text">limited. last item!</p>
                    <a href="#" class="btn btn-dark">Buy</a>
                </div>
            </div>
        </div>
    </div>

    <!-- visi Misi -->
    <div class="container">
        <div class="mt-5 mb-5">
            <div class="d-flex align-items-center flex-column justify-content-center">
                <h1>VISI</h1>
                <p>
                    Menyediakan produk terbaik dengan kualitas terbaik ori 100% real. tidak Menyediakan barang fake. barang yang di jual selalu melewati proses pemeriksaan dan terjamin original dari pabrik.
                </p>
            </div>
            <hr class="my-4">
            <div class="d-flex align-items-center flex-column justify-content-center">
                <h1>MISI</h1>
                <p>
                    menyediakan barang terbaik dengan kualitas terbaik untuk pelanggan dengan transaksi gampang NO RIBET dan pengiriman terjamin dengan package aman 100 terjamin keselamatan barang.
                </p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer text-center text-lg-start text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>Tersesad
                        </h6>
                        <p>
                            The Best Authentic store That you Trust!!
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Products
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">T-Shirt</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Pants</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Shoes & Slop</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Others</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Pricing</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Settings</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Orders</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Help</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Contact
                        </h6>
                        <p><i class="fas fa-home me-3"></i> Surabaya, Jawa Timur, Indonesia</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i> jkarunia01@student.ciputra.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> +62 3434777723</p>

                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->
    </footer>
    <!-- Footer -->

    <!-- jsdelivr -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="index.js"></script>
</body>

</html>
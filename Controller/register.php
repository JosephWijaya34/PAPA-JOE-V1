<?php include("controller.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <section class="vh-100" style="background-color: #9A616D;">
        <div class="container py-2 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="../final website html/assets/img/backgroundlogin.jpg" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height:660px; width:450px;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form method="POST" action="">

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                            <span class="h1 fw-bold mb-0">Register</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">register new account</h5>
                                        <div class="form-outline mb-2 ">
                                            <input type="text" name="create_nama" class="form-control form-control-lg" />
                                            <label class="form-label" for="formnama">Name</label>
                                        </div>

                                        <div class="form-outline mb-2">
                                            <input type="email" name="create_email" class="form-control form-control-lg" />
                                            <label class="form-label" for="formemail">Email address</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" name="create_password" class="form-control form-control-lg" />
                                            <label class="form-label" for="formpassword">Password</label>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" type="submit" name="create_user">Register</button>
                                        </div>

                                        <p class="mb-5 pb-lg-2" style="color: #393f81;">already have an account? <a href="../final website html/login.php" style="color: #393f81;">click here</a></p>
                                        
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php

    if(isset($_POST["create_user"])){
        //penyimpanan data dari form
        $name = $_POST["create_nama"];
        $email = $_POST["create_email"];
        $password = $_POST["create_password"];

        createUser($name, $email, $password);
    }

    ?>
</body>

</html>

<!-- Catatan -->
<!-- if(userstatus == ADMIN){
bisa akses
}else{
kembalikan ke halaman utama
} -->
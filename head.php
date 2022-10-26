<?php
session_start();
include("controllerProduk.php");
include("controllerPartner.php");
include("controller.php");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$idSession = $_SESSION["id"];
$namaSession = $_SESSION["nama"];

//fungsi create produk
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES["create_fotoproduk"]) && isset($_POST["create_namaproduk"]) && isset($_POST["create_hargaproduk"]) && isset($_POST["create_detailproduk"])) {
        createProduk($_POST["create_namaproduk"], $_POST["create_hargaproduk"], $_POST["create_detailproduk"], $_FILES["create_fotoproduk"]);
    }
}

//fungsi create partner
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST["create_namapartner"]) && isset($_FILES["create_fotobrand"])) {
        createPartner($_POST["create_namapartner"], $_FILES["create_fotobrand"]);
    }
}

//fungsi create user
if (isset($_POST["create_user"])) {
    //penyimpanan data dari form
    $name = $_POST["create_nama"];
    $email = $_POST["create_email"];
    $password = $_POST["create_password"];

    createUser($name, $email, $password);
}

if($_SESSION["id"])
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAPA JOE'S Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="productvendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="cssproduct/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="productvendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
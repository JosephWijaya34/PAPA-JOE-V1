<?php
include_once("connectDB.php");

//function to read database data
function readProduk(){
    $allData = array();
    $conn = my_connectDB();

    if ($conn != NULL) {
        $sql_query = "SELECT * FROM `produk`";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                //simpan dari database ke array
                $data['produkid'] = $row["product_id"];
                $data['namaproduk'] = $row["namaproduk"];
                $data['hargaproduk'] = $row["hargaproduk"];
                $data['detailproduk'] = $row["detailproduk"];
                $data['fotoproduk'] = $row["fotoproduk"];
                array_push($allData, $data);
            }
        }
    }
    my_closeDB($conn);
    return $allData;
}

//function create Produk
function createProduk($namaproduk, $hargaproduk, $detailproduk, $fotoproduk){
    $conn = my_connectDB();
    $imgNew = imageMod($fotoproduk);

    if ($conn != NULL) {
        $sql_query = "INSERT INTO `produk` (`fotoproduk`, `namaproduk`, `hargaproduk`, `detailproduk`) 
        VALUES ('$imgNew','$namaproduk','$hargaproduk','$detailproduk')";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
        header('Location: produk.php');
    }
    my_closeDB($conn);
}

function imageMod($fotoproduk){
    $errors = array();
    $rand = rand();
    $file_name = $_FILES['create_fotoproduk']['name'];
    $file_size = $_FILES['create_fotoproduk']['size'];
    $file_tmp = $_FILES['create_fotoproduk']['tmp_name'];
    $file_type = $_FILES['create_fotoproduk']['type'];
    $file_ext = strtolower(end(explode('.', $_FILES['create_fotoproduk']['name'])));
    $randImage = $rand . '_' . $file_name;

    $extensions = array("jpeg", "jpg", "png");

    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
    }

    if ($file_size > 2097152) {
        $errors[] = 'File size must be excately 2 MB';
    }

    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, "foto/" . $randImage);
        echo "Success";
    } else {
        print_r($errors);
    }
    return $randImage;
}


//function to delete database data
function deleteProduk($produkid){
    $conn = my_connectDB();

    if ($conn != NULL) {
        $sql_query = "DELETE FROM `produk` WHERE product_id = $produkid";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
    }
    my_closeDB($conn);
}

//function to get id produk from database data
function getProdukWithID($produkid){
    $data = array();
    if ($produkid > 0) {
        $conn = my_connectDB();
        $sql_query = "SELECT * FROM `produk` WHERE product_id = " . $produkid;
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                //simpan dari database ke array
                $data['produkid'] = $row["product_id"];
                $data['fotoproduk'] = $row["fotoproduk"];
                $data['namaproduk'] = $row["namaproduk"];
                $data['hargaproduk'] = $row["hargaproduk"];
                $data['detailproduk'] = $row["detailproduk"];
            }
        }
        my_closeDB($conn);
        return $data;
    }
}

//fuction to update produk from database
function updateProduk($produkid, $fotoproduk, $namaproduk, $hargaproduk, $detailproduk){
    if ($produkid != "" && $fotoproduk != "" && $namaproduk != "" && $hargaproduk != "" && $detailproduk != "") {
        $conn = my_connectDB();
        $imgUpdate = imageModUpdate($fotoproduk);
        $sql_query = "UPDATE `produk` 
                         SET `fotoproduk` = '$imgUpdate',
                             `namaproduk` = '$namaproduk', 
                             `hargaproduk` = '$hargaproduk', 
                             `detailproduk` = '$detailproduk' 
                      WHERE `produk`. `product_id` = $produkid;";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
        header('Location: produk.php');
        my_closeDB($conn);
        return $result;
    } else if ($produkid != "" && $namaproduk != "" && $hargaproduk != "" && $detailproduk != "") {
        $conn = my_connectDB();
        $sql_query = "UPDATE `produk` 
                         SET `namaproduk` = '$namaproduk', 
                             `hargaproduk` = '$hargaproduk', 
                             `detailproduk` = '$detailproduk' 
                      WHERE `produk`. `product_id` = $produkid;";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
        header('Location: produk.php');
        my_closeDB($conn);
        return $result;
    }
}

function imageModUpdate($fotoproduk){
    $errors = array();
    $rand = rand();
    $file_name = $_FILES['update_fotoproduk']['name'];
    $file_size = $_FILES['update_fotoproduk']['size'];
    $file_tmp = $_FILES['update_fotoproduk']['tmp_name'];
    $file_type = $_FILES['update_fotoproduk']['type'];
    $file_ext = strtolower(end(explode('.', $_FILES['update_fotoproduk']['name'])));
    $randImage = $rand . '_' . $file_name;

    $extensions = array("jpeg", "jpg", "png");

    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
    }

    if ($file_size > 2097152) {
        $errors[] = 'File size must be excately 2 MB';
    }

    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, "foto/" . $randImage);
        echo "Success";
    } else {
        print_r($errors);
    }
    return $randImage;
}
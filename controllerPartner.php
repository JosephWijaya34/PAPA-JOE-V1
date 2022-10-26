<?php
include_once("connectDB.php");

//function to read database data
function readPartner(){
    $allData = array();
    $conn = my_connectDB();

    if ($conn != NULL) {
        $sql_query = "SELECT * FROM `partner`";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                //simpan dari database ke array
                $data['partnerid'] = $row["partner_id"];
                $data['namapartner'] = $row["namapartner"];
                $data['fotobrand'] = $row["fotobrand"];
                array_push($allData, $data);
            }
        }
    }
    my_closeDB($conn);
    return $allData;
}

//function create
function createPartner($namapartner, $fotobrand)
{
    $conn = my_connectDB();
    $imgNew = imageModPartner($fotobrand);

    if ($conn != NULL) {
        $sql_query = "INSERT INTO `partner` (`namapartner`, `fotobrand`)
        VALUES ('$namapartner','$imgNew')";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
        header('Location: partner.php');
    }
    my_closeDB($conn);
}

function imageModPartner($fotobrand)
{
    $errors = array();
    $rand = rand();
    $file_name = $_FILES['create_fotobrand']['name'];
    $file_size = $_FILES['create_fotobrand']['size'];
    $file_tmp = $_FILES['create_fotobrand']['tmp_name'];
    $file_type = $_FILES['create_fotobrand']['type'];
    $file_ext = strtolower(end(explode('.', $_FILES['create_fotobrand']['name'])));
    $randImagePartner = $rand . '_' . $file_name;

    $extensions = array("jpeg", "jpg", "png");

    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
    }

    if ($file_size > 2097152) {
        $errors[] = 'File size must be excately 2 MB';
    }

    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, "fotobrand/" . $randImagePartner);
        echo "Success";
    } else {
        print_r($errors);
    }
    return $randImagePartner;
}

//function to delete database data
function deletePartner($partnerid){
    $conn = my_connectDB();

    if ($conn != NULL) {
        $sql_query = "DELETE FROM `partner` WHERE `partner`.`partner_id` = $partnerid";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
    }
    my_closeDB($conn);
}

//function to get id partner from database data
function getPartnerWithID($partnerid)
{
    $data = array();
    if ($partnerid > 0) {
        $conn = my_connectDB();
        $sql_query = "SELECT * FROM `partner` WHERE partner_id = " . $partnerid;
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                //simpan dari database ke array
                $data['partnerid'] = $row["partner_id"];
                $data['namapartner'] = $row["namapartner"];
                $data['fotobrand'] = $row["fotobrand"];
            }
        }
        my_closeDB($conn);
    }
    return $data;
}

//fuction to update partner from database
function updatePartner($partnerid, $namapartner, $fotobrand){
    if ($partnerid != "" && $namapartner != "" && $fotobrand != "") {
        $conn = my_connectDB();
        $imgUpdate = imageModPartnerUpdate($fotobrand);
        $sql_query = "UPDATE `partner` 
                         SET `namapartner` = '$namapartner', 
                             `fotobrand` = '$imgUpdate' 
                       WHERE `partner`.`partner_id` = $partnerid;";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
        header('Location: partner.php');
        my_closeDB($conn);
        return $result;
    } else if ($partnerid != "" && $namapartner != "") {
        $conn = my_connectDB();
        $sql_query = "UPDATE `partner` 
                         SET `namapartner` = '$namapartner' 
                       WHERE `partner`.`partner_id` = $partnerid;";
                       
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
        header('Location: partner.php');
        my_closeDB($conn);
        return $result;
    }
}

function imageModPartnerUpdate($fotobrand){
    $errors = array();
    $rand = rand();
    $file_name = $_FILES['update_fotobrand']['name'];
    $file_size = $_FILES['update_fotobrand']['size'];
    $file_tmp = $_FILES['update_fotobrand']['tmp_name'];
    $file_type = $_FILES['update_fotobrand']['type'];
    $file_ext = strtolower(end(explode('.', $_FILES['update_fotobrand']['name'])));
    $randImage = $rand . '_' . $file_name;

    $extensions = array("jpeg", "jpg", "png");

    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
    }

    if ($file_size > 2097152) {
        $errors[] = 'File size must be excately 2 MB';
    }

    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, "fotobrand/" . $randImage);
        echo "Success";
    } else {
        print_r($errors);
    }
    return $randImage;
}

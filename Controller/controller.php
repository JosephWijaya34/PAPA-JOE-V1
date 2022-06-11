<?php
include_once("../Connect DataBase/connectDB.php");

//function to read database data
function readUser(){
    $allData = array();
    $conn = my_connectDB();

    if ($conn != NULL) {
        $sql_query = "SELECT * FROM `user`";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                //simpan dari database ke array
                $data['id'] = $row["user_id"];
                $data['name'] = $row["nama"];
                $data['email'] = $row["email"];
                $data['password'] = $row["password"];
                array_push($allData, $data);
            }
        }
    }
    my_closeDB($conn);
    return $allData;
}

// cek data dari create.php
// if (isset($_POST['create_user'])) {
//     createUser($_POST['nama'], $_POST['email'], $_POST['password']);
// }

//function to create database data
function createUser($name, $email, $password){
    $conn = my_connectDB();

    if ($conn != NULL) {
        $sql_query = "INSERT INTO `user` (`nama`, `email`, `password`) VALUES ('$name','$email','$password')";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
        header('Location: index.php');
    }
    my_closeDB($conn);
}

//function to delete database data
function deleteUser($id){
    $conn = my_connectDB();

    if ($conn != NULL) {
        $sql_query = "DELETE FROM `user` WHERE user_id = $id";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
    }
    my_closeDB($conn);
}

//function to get id user from database data
function getUserWithID($id){
    $data = array();
    if ($id > 0) {
        $conn = my_connectDB();
        $sql_query = "SELECT * FROM `user` WHERE user_id = " . $id;
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                //simpan dari database ke array
                $data['id'] = $row["user_id"];
                $data['name'] = $row["nama"];
                $data['email'] = $row["email"];
                $data['password'] = $row["password"];
            }
        }
        my_closeDB($conn);
        return $data;
    }
}

//fuction to update user from database
function updateUser($id, $name, $email, $password){
    if($id != "" && $name != "" && $email != "" && $password != ""){
        $conn = my_connectDB();
        $sql_query = "UPDATE `user` 
                        SET `nama` = '$name', 
                            `email` = '$email', 
                            `password` = '$password' 
                      WHERE `user`. `user_id` = $id;";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
        header('Location: index.php');
        my_closeDB($conn);
        return $result;
    }
}

<?php include("controller.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
</head>
<body>
<h1>UPDATE USER DATA</h1>

<?php
if(isset($_GET["updateID"])){
    $data_to_be_updated = $_GET["updateID"];
    $data = getUserWithID($data_to_be_updated);
?>
<form method="POST" action="">
        <table>
            <tr>
                <td>ID</td>
                <td><input type="text" name="update_id" value="<?=$data['id']?>" readonly></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="update_nama" value="<?=$data['name']?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="update_email" value="<?=$data['email']?>"></td>
            </tr>
            <tr>
                <td>password</td>
                <td><input type="password" name="update_password" value="<?=$data['password']?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="Update_user"></td>
                <td><button><a href="index.php">Back</a></button></td>
            </tr>
        </table>
    </form>

<?php
}
if(isset($_POST['Update_user'])){
    //penyimpanan data dari form
    $id = $_POST["update_id"];
    $name = $_POST["update_nama"];
    $email = $_POST["update_email"];
    $password = $_POST["update_password"];

    $result = updateUser($id, $name, $email, $password);
}

?>

</body>
</html>
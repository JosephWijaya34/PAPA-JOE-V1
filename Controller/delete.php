<?php include("controller.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
    <h1>DELETE USER DATA</h1>

    <?php
        $data_to_be_deleted = $_GET["deleteID"];
        $resultDelete = deleteUser($data_to_be_deleted);
        echo $resultDelete;

        //buat kembali ke halaman utama
        header("Location: index.php");
    ?>

</body>
</html>
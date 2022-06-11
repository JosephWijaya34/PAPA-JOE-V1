<?php require("controller.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
</head>

<body>
    <h1>CRUD Website Read All User Data</h1>
    <button style="margin-top: 10px;"><a href="register.php">Create ID</a></button>
    <button style="margin-top: 10px;"><a href="../final website html/login.php">Login</a></button>

    <?php
    $result = readUser();
    ?>

    <table style="margin-top: 10px;" border="2" cellspacing="0">
        <tr>
            <td>ID</td>
            <td>Nama</td>
            <td>Email</td>
            <td>Password</td>
            <td>delete</td>
            <td>Update</td>
        </tr>
        <?php
        foreach ($result as $barisdata) {
        ?>
            <tr>
                <td><?= $barisdata['id'] ?></td>
                <td><?= $barisdata['name'] ?></td>
                <td><?= $barisdata['email'] ?></td>
                <td><?= $barisdata['password'] ?></td>
                <td><a href="delete.php?deleteID=<?= $barisdata['id'] ?>">DELETE</a></td>
                <td><a href="update.php?updateID=<?= $barisdata['id'] ?>">UPDATE</a></td>
            </tr>
        <?php
        }
        ?>
    </table>

</body>

</html>
<?php 
include("head.php");
 ?>
 
<body>
    <h1>DELETE PARTNER DATA</h1>

    <?php

    $data_to_be_deleted = $_GET["deletepartnerID"];
    $ambilPartner = mysqli_query(my_connectDB(), "SELECT * FROM partner");
    $row = mysqli_fetch_assoc($ambilPartner);
    $namaFilepartner = $row["fotobrand"];
    unlink("fotobrand/" . $$namaFilepartner);
    $resultDeletePartner = deletePartner($data_to_be_deleted);

    // buat kembali ke halaman utama
    header("Location: partner.php");
    ?>
<?php include("script.php"); ?>
</body>

</html>
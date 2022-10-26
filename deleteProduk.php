<?php 
include("head.php");
 ?>
 
<body>
    <h1>DELETE PRODUK DATA</h1>

    <?php

    $data_to_be_deleted = $_GET["deleteProdukID"];
    $ambil = mysqli_query(my_connectDB(), "SELECT * FROM produk");
    $row = mysqli_fetch_assoc($ambil);
    $namaFile = $row["fotoproduk"];
    unlink("foto/" . $namaFile);
    $resultDelete = deleteProduk($data_to_be_deleted);

    // buat kembali ke halaman utama
    header("Location: produk.php");
    ?>
<?php include("script.php"); ?>
</body>

</html>
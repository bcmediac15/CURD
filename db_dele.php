<?php
    include_once("konfigurasi.php");
    if(isset($_POST["txid"])){
        $dtID = $_POST["txid"];
        $sql = "DELETE FROM testtabel WHERE IDATA=$dtID;";
        $cnn = mysqli_connect(DBHOST,DBUSER,DBPWD,DBNAME) or 
            die("Gagal koneksi ke Database");
        $hasil = mysqli_query($cnn,$sql);
        echo "affected rows: " . mysqli_affected_rows($cnn);
        mysqli_close($cnn);
    }
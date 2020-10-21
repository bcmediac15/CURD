<?php
    include_once("konfigurasi.php");
    if(isset($_POST["txdata"])){
        $dtx = $_POST["txdata"];
        $sql = "INSERT INTO testtabel(ISIDATA)VALUES('$dtx');";
        $cnn = mysqli_connect(DBHOST,DBUSER,DBPWD,DBNAME) or 
            die("Gagal koneksi ke Database");
        $hasil = mysqli_query($cnn,$sql);
        echo "affected rows: " . mysqli_affected_rows($cnn);
        mysqli_close($cnn);
    }
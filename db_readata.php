<!DOCTYPE html>
<html>
    <head>
        <title>Read Data</title>
    </head>
    <body>

        <h3>List of data:</h3>
<?php
    include_once("konfigurasi.php");
    $sql = "SELECT ISIDATA FROM testtabel;";
        $cnn = mysqli_connect(DBHOST,DBUSER,DBPWD,DBNAME) or 
            die("Gagal koneksi ke Database");
        $hasil = mysqli_query($cnn,$sql);
?>       
    
        <ol>
<?php
        while($h = mysqli_fetch_array($hasil)){
?>
            <li><?=$h["ISIDATA"];?></li>
<?php
        }
?>  
        </ol>
<?php
    echo "affected rows: " . mysqli_affected_rows($cnn);
    mysqli_close($cnn);
?>
    </body>
</html>
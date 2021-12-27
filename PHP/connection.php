<?php

    //inisialisasi variabel untuk database
    $servername = "localhost";
    $username = "id15860656_dbhydromon";
    $password = "R@silwa150800";
    $dbname = "id15860656_hydromon";

    $connection = mysqli_connect($servername, $username, $password, $dbname);

    if (mysqli_connect_error()){
        echo " Maaf, anda gagal terhubung ke Database : ".mysqli_connect_errno();
    }

?>
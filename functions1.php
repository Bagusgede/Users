<?php

    $conn= mysqli_connect("localhost", "root", "", "users");
   
    if(!$conn) {
        echo"Koneksi gagal";
        die();
    }else {
        echo"";
    }



?>
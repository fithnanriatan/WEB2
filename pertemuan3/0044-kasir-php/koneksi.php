<?php 
    session_start();
    $koneksi = mysqli_connect("localhost","root","","web_week3");
    if (mysqli_connect_errno()){
        echo "Koneksi database gagal : " . mysqli_connect_error();
    }
?>
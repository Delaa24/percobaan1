<?php

$hostName = "localhost";
$userName = "root";
$password = "";
$dbName = "my_api_android";

$koneksi = mysqli_connect($hostName, $userName, $password, $dbName);

if (!$koneksi) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}else{
    echo "Koneksi Berhasil";

}



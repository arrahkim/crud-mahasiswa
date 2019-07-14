<?php

//set default timezone
date_default_timezone_set("ASIA/JAKARTA");

//deklarasi parameter koneksi db
$server = "localhost";
$username = "root";
$password = "";
$database = "db_kampus";

//koneksi database
$db = mysqli_connect($server, $username, $password, $database);

if (!$db) {
    # code...
    die('Koneksi Database Gagal : '.mysqli_connect_error());
}

?>
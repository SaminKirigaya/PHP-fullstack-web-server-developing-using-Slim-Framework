<?php
include '../app/crash.php';
$local = $loc;
$root = $rand;
$pass = $cache;
$dbname = $name;

$con = mysqli_connect($local,$root,$pass,$dbname);
<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio";

$connect=mysqli_connect($server,$username,$password,$dbname);
        mysqli_select_db($connect,$dbname);
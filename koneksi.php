<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_simple-blog";

$conn = mysqli_connect($host, $user, $pass);
mysqli_select_db($conn, $db);

<?php
$hostname = "localhost";

$user_db = "root";
$pass_db = "";
$db_name = "db_webakademis_php";

$conn = new mysqli($hostname, $user_db, $pass_db);

if ($conn->connect_error){
    die("Conecction Failed: ". $conn->connect_error);
}
mysqli_select_db($conn, $db_name);
?>
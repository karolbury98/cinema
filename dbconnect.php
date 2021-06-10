<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cinema";

$con = mysqli_connect($servername,$username,$password,$dbname);

if(!$con){
    die('Nie można połączyć: ' . mysqli_error($con));
}
?>
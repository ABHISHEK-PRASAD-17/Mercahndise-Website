<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn){
    echo "Connection succes";

}
else
{
    echo"Connection Failed" .mysqli_connect_error();
}
?>
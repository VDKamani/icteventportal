<?php
$server_name="localhost";
$username="root";
$password= "";
$database_name="reglog";
$conn = mysqli_connect($server_name,$username,$password,$database_name);

if($conn)
{
    echo ("Connected sucessfully");
}
else{
    die("Connection Failed:" . mysqli_connect_error());
}


?>

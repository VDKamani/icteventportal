<?php

$myusername = $_POST['u'];
$mypassword = $_POST['p'];

include "conn.php";
//echo "Connected successfully";

if ($_SERVER['REQUEST_METHOD']=='POST'){

    $sql= "SELECT * FROM admin WHERE user_name = '$myusername' AND password = '$mypassword' ";
    $result = mysqli_query($conn,$sql);
    $check = mysqli_fetch_array($result);
    if(isset($check))
{

    echo'<script> window.location="home.html"; </script> ';

//echo $num_rows;
}

else
{
	
echo '<script type="text/javascript">'; 
echo 'alert("Invalid username or password");'; 
echo 'window.location.href = "index.html";';
echo '</script>';  
	
}
}
?>
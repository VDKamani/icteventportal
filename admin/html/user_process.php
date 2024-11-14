<?php
session_start();
$myusername = $_POST['username'];
$mypassword = $_POST['password'];

include 'conn.php';

if(isset($_POST['submit']))
{

    $sql_query = "INSERT INTO `admin`( `user_name`, `password`)
    VALUES ('$myusername','$mypassword')";
    if (mysqli_query($conn, $sql_query))
    {
        echo'<script> window.location="user.php"; </script> '; 
        $_SESSION["username"] = " User added successfully $myusername ";
        
    }

    else{
        echo '<script type="text/javascript">'; 
        echo '"alert("Something is wrong please try again  !!!");';
        echo 'window.location.href = "index.php";';
        echo '</script>';
    }

}

?>

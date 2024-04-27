
<!-- New code below 13/2/24-->
<?php

// $name = $_POST['regname'];
// $email = $_POST['regemail'];
// $pass = $_POST['regpass'];
// include './admin/html/conn.php';




// if(isset($_POST['register']))
// {


//     if (empty($_POST["regname"])) {

//         echo '<script type="text/javascript">'; 
//         echo '"alert("Something is wrong please try again  !!!");';
//         echo 'window.location.href = "index.php";';
//         echo '</script>';
        
//      }elseif (empty($_POST["regemail"])){

//         echo '<script type="text/javascript">'; 
//         echo '"alert("Something is wrong please try again  !!!");';
//         echo 'window.location.href = "index.php";';
//         echo '</script>';
//      }elseif (empty($_POST["regpass"])){

//         echo '<script type="text/javascript">'; 
//         echo '"alert("Something is wrong please try again  !!!");';
//         echo 'window.location.href = "index.php";';
//         echo '</script>';

//      }else{

    
//     $pass = $_POST['regpass'];
//     $hashed_password = password_hash($pass, PASSWORD_ARGON2I, ['cost' => 12]);
        
//     $sql_query = "INSERT INTO `tb_user`( `name`, `email`, `password`)
//     VALUES ('$name','$email', '$hashed_password')";
//     if (mysqli_query($conn, $sql_query))
//     {
//         echo'<script> window.location="home.html"; </script> '; 
//     }

//     else{
//         echo '<script type="text/javascript">'; 
//         echo '"alert("Something is wrong please try again  !!!");';
//         echo 'window.location.href = "index.php";';
//         echo '</script>';
//     }
//      }
    
    
// }

?>

<?php

$name = $_POST['regname'];
$email = $_POST['regemail'];
$pass = password_hash($_POST['regpass'], PASSWORD_DEFAULT);
include './admin/html/conn.php';

if(isset($_POST['register'])) {

    if (empty($_POST["regname"]) || empty($_POST["regemail"]) || empty($_POST["regpass"])) {
        echo '<script type="text/javascript">'; 
        echo 'alert("Something is wrong please try again  !!!");';
        echo 'window.location.href = "index.php";';
        echo '</script>';
    } else {
        
       
        
        $sql_query = "INSERT INTO `tb_user` (`name`, `email`, `password`) VALUES ('$name', '$email', '$pass')";
        
        if (mysqli_query($conn, $sql_query)) {
            echo '<script>window.location="home.php";</script>';
        } else {
            echo '<script type="text/javascript">'; 
            echo 'alert("Something is wrong please try again  !!!");';
            echo 'window.location.href = "index.php";';
            echo '</script>';
        }
    }
}
?>


<!-- for login -->

<?php
// session_start();
// $myusername = $_POST['loginUser'];
// $mypassword = $_POST['loginPass'];

// include './admin/html/conn.php';

// if ($_SERVER['REQUEST_METHOD']=='POST'){

//     $sql= "SELECT * FROM tb_user WHERE email = '$myusername' AND password = '$mypassword' ";
//     $result = mysqli_query($conn,$sql);
//     $check = mysqli_fetch_array($result);
//     if(isset($check))
// {

//     echo'<script> window.location="home.html"; </script> ';


// }

// else
// {
	
// echo '<script type="text/javascript">'; 
// echo 'alert("Something is wrong please try again");'; 
// echo 'window.location.href = "index.php";';
// echo '</script>';  
	
// }
// }



session_start();

$myusername = $_POST['loginUser'];
$mypassword = $_POST['loginPass'];

include './admin/html/conn.php';

if ($_SERVER['REQUEST_METHOD']=='POST'){

    // Retrieve the hashed password from the database based on the provided username
    $sql = "SELECT * FROM tb_user WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $myusername);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    // Check if a user with the provided username exists
    if ($row = mysqli_fetch_assoc($result)) {
        // Verify the provided password with the hashed password from the database
        if (password_verify($mypassword, $row['password'])) {
            // Password is correct, redirect the user to home.html
            $_SESSION['username'] = $myusername; // Store username in session for later use if needed
            echo '<script>window.location="home.php";</script>';
        } else {
            // Password is incorrect
            echo '<script>alert("Invalid username or password."); window.location.href = "index.php";</script>';
        }
    } else {
        // No user with the provided username exists
        echo '<script>alert("Invalid username or password."); window.location.href = "index.php";</script>';
    }

    // Close statement and connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

?>
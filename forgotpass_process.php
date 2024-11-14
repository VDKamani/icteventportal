<!-- for forgot pass -->

<?php

session_start();


include './admin/html/conn.php';

if(isset($_POST['submit'])){

    $email = $_POST['Pass'];

    $emailquery = "select * from tb_user where email = '$email'";
    $query = mysqli_query($conn,$emailquery);

    $emailcount = mysqli_num_rows($query);

    if($emailcount){

            $userdata = mysqli_fetch_array($query);
            $username = $userdata['name'];
            
            $subject = "Reset Password";
            $body = "Hi , $username. Click here to forgot your password and set new password 
                    http://localhost/Project_portal/reset_password.php";
            $sender_email = "chhagmirali@gmail.com";

            if(mail($email,$subject,$body,$sender_email)){

                $_SESSION["msg"] = "Check your mail to reset your password $email";
               
                header('location:index.php');      


            }else{
                echo "Email sending failed";
            }
    }
    else{
        echo "Email Varification Failed";
    }
}
?>
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Login and Registration</title>
    <link rel="stylesheet" href="./assets/css/l&r_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">     
</head>
<body>
    <div class="container">
        <input type="checkbox" id="flip">
        <div class="cover">
            <div class="front">
                <img src="./assets/img/frolic.jpeg" alt="">
            </div>
            <div class="back">
                <img class="backImg" src="./assets/img/Jadeja-Marwadi-University.jpg" alt="">
            </div>
        </div>  

        <form action="./Registration.php" method="post">
            <div class="form-content">
                <!-- Login Form -->
                <div class="login-form">
                    <div class="title">Login</div>
                    <div class="input-boxes">
                        <div class="input-box">
                            <i class="fas fa-envelope"></i>
                            <input type="text" placeholder="Enter your email" name="loginUser" >
                        </div>
                        <div class="input-box">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Enter your password" name="loginPass" >
                        </div>
                        <div class="text"><a href="forgot_pass_mailsent.php">Forgot password?</a></div>
                        <br>
                        <div>
                            <p>
                                <?php
                                if (isset($_SESSION["msg"])) {
                                    echo $_SESSION["msg"];
                                    unset($_SESSION["msg"]); // Clear the message after displaying it
                                }
                                ?>
                            </p>
                        </div>
                        <div class="button input-box">
                            <input type="submit" value="Login" name="login">
                        </div>
                    </div>
                    <div class="text sign-up-text">Don't have an account? <label for="flip">Signup now</label></div>
                </div>

                <!-- Signup Form -->
                <div class="signup-form">
                    <div class="title">Signup</div>
                    <div class="input-boxes">
                        <div class="input-box">
                            <i class="fas fa-user"></i>
                            <input type="text" placeholder="Enter your name" name="regname" >
                        </div>
                        <div class="input-box">
                            <i class="fas fa-envelope"></i>
                            <input type="text" placeholder="Enter your email" name="regemail" >
                        </div>
                        <div class="input-box">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Enter your password" name="regpass" >
                        </div>
                        <div class="button input-box">
                            <input type="submit" value="Submit" name="register">
                        </div>
                    </div>
                    <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>



<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title> Forgot password?!! </title>
        <link rel="stylesheet" href="./assets/css/l&r_style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">     
    </head>
<body>
    <div class="container">
       
        <div class="cover">
        <div class="front">
            <Img src="./assets/img/frolic.jpeg" alt="">
        </div>

        <div class="back">
            <img class="backImg" src="img/Ravinder-Jadeja-Marwadi-University.jpg" alt="">
        </div>
        </div>
    
        <form action="forgotpass_process.php" method="POST">
            <div class="form-content">
            <div class="login-form">
                <div class="title">Forgot password?!!</div>
                <div class="input-boxes">
                    <div class="input-box">
                        <i class="fas fa-envelope"></i>
                        <input type="text" placeholder="Enter your email"  name="Pass">
                    </div>

                   <br/>
                    <div class="text"><a href="index.php">Want to login again?</a></div>

                    <div class="button input-box">
                        
                        <input type="submit" value="Sent Mail" name="submit">
                    </div>

                    

            </div>

            </div>
        </form>
    </div>







</body>
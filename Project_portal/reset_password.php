
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title> Reset password?!! </title>
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
    
        <form action="forgotPass.php" method="post">
            <div class="form-content">
            <div class="login-form">
                <div class="title">Reset password!!</div>
                <div class="input-boxes">
                    <div class="input-box">
                    <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Enter password"  name="Pass" required>
                    </div>
                    <div class="input-box">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Conform password"  name="Pass" required>
                    </div>


                   <br/>
                   

                    <div class="button input-box">
                        
                        <input type="submit" value="submit" name="submit">
                    </div>

                    

            </div>

            </div>
        </form>
    </div>
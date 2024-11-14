<?php
session_start();
?>

<html>
    <head>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        .container{
    position: relative;
    max-width: 33%;
    background: #fff;
	padding:2% ;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    
}

.btn{
    float : right;
    margin: 2%;
    
}   

.head{
    text-align: center;
}

    </style>

    </head>

    <body>
        
    <div class="container">

    <div style="color: green;">
                <strong> 
                     <?php 
                
                        if(isset($_SESSION["username"]))
                        {
                            echo $_SESSION["username"];
                        }
                            session_destroy();
                        ?>
                
                     
                </strong> 
            </div>

    <form class="form-inline" action="user_process.php"  method="post">
                        <H1 class="head">Add New User</H1>
                        <label class="col-sm-4 col-form-label" for="username">UserName</label>
                        <div class=" col-sm-12 pad">
                            <input type="text" id="username" class="form-control" name="username" placeholder="UserName" required="">
                        </div>

                        <label class="col-sm-4 col-form-label" for="password">Password</label>
                        <div class=" col-sm-12 pad">
                            <input type="password" class="form-control" name="password" placeholder="Password*" required="">
                        </div>
                   
                        <input type="submit" class="btn btn-outline-success" name="submit" value="submit"/>
                        <br/>


                        
                </form>
</div>


    </body>
</html>
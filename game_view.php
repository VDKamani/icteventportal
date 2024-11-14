<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <title>HomePage</title>

    
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    

</head>
<body>

    <main>
        <div class="container-fluid p-0">
            <div class="site-content">
                    <div class="d-flex flex-colum">
                        <div class="logo" >
                            <img src="./assets/img/logo.png" class="site_logo" alt="marwadi">
                            
                        </div>
                </div>
            </div>


        <div class="menu-bar">
            <ul>
                <li><a href="./home.html">Home</a></li>
                <li><a href="">Schedule</a>
                    <div class="sub-menu-1">
                        <ul>
                            <li><a href="./admin_view.php">Admin Details</a></li>
                            <li><a href="./game_view.php">Game Schedule</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="./eventstart.php">Events</a></li>
                <li><a href="./Results_stud.php">Result</a></li>
                <li><a href="./about_us.html">About Us</a></li>
                <li><a href="./index.php">Logout</a></li>
            </ul>
        </div>
        </div>
    </main>
</body>
</html>
<?php
include 'view_g.php';
?>
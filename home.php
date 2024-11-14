<?php
session_start();
include './admin/html/conn.php';
?>
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

        <div class="section-1">
            <div class="container text-center">
                <h1 class="heading-1">FROLIC-2021</h1>
                    <p class="para-1">
                        Whether you seek the thrill of competition or the desire for body fitness, MEFGI provides a wealth of opportunities that will demand commitment, dedication and skill development. You can achieve national recognition through inter-collegiate fixtures, 
                        participate in a recreational sport for the first time, or take one of many physical education courses.
                         Involvement at any level is encouraged.
                       </p>

                    <div class="row justify-content-center text-center">
                        <div class="col-md-4">
                            <div class="card">
                            <img src="./assets/img/single.jpg" alt="Image2" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-title">SINGLE PERSONE</h4>
                                <p class="card-text"> These include Athletics Track and Field events such as races, long/high jumps, short-put, javelin throw, discus throw etc.</p> 
                            </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                            <img src="./assets/img/two-2.jpg" alt="Image2" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-title">TWO PERSONE</h4>
                                <p class="card-text"> These include indoor games like chess and carom, full racket, table tennis contests.</p> 
                            </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card" >
                            <img src="./assets/img/Jadeja-Marwadi-University.jpg" alt="Image3" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-title">TEAM</h4>
                                <p class="card-text">These include numerous football, volley-ball, cricket matches chess and carom contests. 
                                    Those who excel in sports activities are given various awards, prizes, medals, and certificates.</p> 
                            </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

       
       
        <div class="section-2 bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <img src="./assets/img/frolic.jpeg" alt="imag-3" width="590">
                    </div>
                        <div class="col-md-5">
                            <h1 class="text-white">"Sports do not built character, they reveal it"</h1>
                            <p class="para-2">This event is only for ICT Department Students. (Degree- Diploma- MTech) We will divide this event into the various categories like degree, diploma, boys and girls.
                                Each participation will get the certificate.</p>
                        </div>
                </div>
            </div>
        </div>



        <div class="container-fluid">
            <div class="parallax">
                <div class="row">
                    <div class="col-1"></div>
                    
                        <h1>We make You</h1>
                    </div>
                    
                    <div class="col-5">
                        <h1>  Haapy Is Our Gol...!</h1>
                    </div>            
                </div>
            </div>
        </div>



        <div class="section-2 bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <img src="./assets/img/frolic.jpeg" alt="imag-3" width="590">
                    </div>
                        <div class="col-md-5">
                            <h1 class="text-white">"Sports do not built character, they reveal it"</h1>
                            <p class="para-2">This event is only for ICT Department Students. (Degree- Diploma- MTech) We will divide this event into the various categories like degree, diploma, boys and girls.
                                Each participation will get the certificate.</p>
                        </div>
                </div>
            </div>
        </div>

    </main>

<!-- new code -->






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
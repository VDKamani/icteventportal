






<?php

include './admin/html/conn.php';

$sql = "SELECT * FROM result1";
$result = $conn->query($sql);
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
    <link rel="stylesheet" type="text/css" href="./assets/css/s.css">
    

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



<div class="col-12">
  <h1 style="margin-top: 1%; margin-bottom:2%; ">Results</h1>                          
<table>
<table>
<tr>
<th>Event Name </th>
<th>Winner</th>
<th>Runner Up</th>
<th>2nd Runner Up</th>
</tr>


<?php

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo '<tr>';
        echo "<td>" . $row["eventname"]."</td><td>" . $row["win1"]. " </td><td>" . $row["win2"]. " </td><td>" . $row["win3"]. "</td>";
echo '</tr>';  

  }
} else {
    echo "0 results";
}
$conn->close();
?>
  
  </table>
  
 


</body>
</html>
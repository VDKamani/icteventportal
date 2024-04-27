<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="./assets/css/s.css">


</head>
<body>


<div class="col-12">
<center>
  <h1>Events</h1>   
</center>                       

<?php
session_start();
include './admin/html/conn.php';
//echo "Connected successfully";
// Check connection


$sql = "SELECT * FROM event where status='ongoing' ORDER BY end_date asc";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

		echo '<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">';	
		echo '<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">';	
		echo '<div class="col-md-8 " style=" box-shadow: 10px 10px 5px #888888; margin-left:13%;border:1px; border-radius:5px;background-color:#d6e4f9; width:30%; float:left; margin-top:40px " >
		<center><form  action="event_register.php" method="POST"  >';
        echo "<br><b>Event Name: </b>" . $row["event_name"].
			 " <b> &nbsp;&nbsp;&nbsp;&nbsp;Type: </b>" . $row["type"]. 
			 "<br> <b>Categoty: </b>" . $row["category"]. 
			 " <b> &nbsp; &nbsp;  &nbsp;Gender: </b>" . $row["gender"]. 

			
			 "<br> <b>Description:</b> " . $row["description"].


			 "<br> <b> Start date: </b>" . $row["start_date"]. "<b> --  Last Date: </b>". $row["end_date"].
			 "<br> <b>Certificate: </b>" . $row["certificate"]. 
			 "<b> &nbsp; &nbsp; &nbsp; &nbsp; Timing:</b> " . $row["time"].
			 "<br> <b> Faculty Co-ordinator name: </b>" . $row["oname"]. 
			 "<br> <b>Faculty number: </b>" . $row["onumber"]. 
			 "<br> <b>Faculty location: </b>" . $row["olocation"]. 
			 "<br> <b>Student Co-ordinator name: </b>" . $row["sname"]. 
			 "<br> <b> Student Co-ordinator number: </b>" . $row["snumber"]. 
			 "<br> <b> Event location: </b>" . $row["elocation"];

			
			include './popup.php';

			$ename = " $row[event_name] ";
			$etype = "  $row[type]";
			$ecat = "  $row[category]";
		/*	$_SESSION["name"] = "$ename";
			$_SESSION["type"] = "$etype";*/
			

			
		
		echo '<input type="hidden" name="event" value="' .$ename. '">
				<input type="hidden" name="type" value="' .$etype. '">
				<input type="hidden" name="cat" value="' .$ecat. '">';

		

	 
			



		echo '<br><br><input type="submit" value="Register"><br><br></form></div>';  
		

 
  }
} else {
    echo "0 results";
}
$conn->close();
?>
  


</div>
</div>
</center>


</body>

</html>
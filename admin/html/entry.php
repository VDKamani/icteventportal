
<?php

include 'conn.php';

$sql = "SELECT * FROM entry";
$result = $conn->query($sql);
?>

<html>
<!DOCTYPE html>
<html lang="en">
<html>
<head>

<link rel="stylesheet" type="text/css" href="../../assets/css/s.css">


</head>
<body>

<div class="col-12" >
                    
<table border="1">

<tr>
<th>ID</th>
<th>Event</th>
<th>Type</th>
<th>Categoty</th>
<th>USERNAME</th>
<th>GR Number</th>
<th>Register AS</th>
<th>Email</th>
<th>CLASS</th>
<th>LOCATION</th>
<th>COURSE TYPE</th>
<th>SEM NUMBER</th>
</tr>

<?php

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo '<tr>';
        echo "<td>" . $row["id"]."</td><td>" . $row["event"]. " </td><td>" . $row["type"]. " </td><td>" . $row["category"]. "</td>".
         "</td><td>" . $row["username"]. " </td><td>" . $row["gr_no"]. " </td><td>" . $row["register_as"]. "</td>".
         "</td><td>" . $row["email"]. " </td><td>" . $row["class"]. " </td><td>" . $row["location"]. "</td>".
         "<td>" . $row["course_type"]. " </td><td>" . $row["sem_no"]. " </td>"
        
        ;
echo '</tr>';  

  }
} else {
    echo "0 results";
}
$conn->close();
?>
  
  </table>
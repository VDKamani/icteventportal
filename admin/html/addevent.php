<?php
$event_name=$_POST['ename'];
$type=$_POST['type'];
$category=$_POST['category'];
$gender=$_POST['gender'];
$description=$_POST['description'];
$start_date=$_POST['start_date'];
$end_date=$_POST['end_date'];
$time=$_POST['time'];
$certificate=$_POST['certificate'];
$oname=$_POST['oname'];
$onumber=$_POST['onumber'];
$olocation=$_POST['olocation'];
$sname=$_POST['sname'];
$snumber=$_POST['snumber'];
$elocation=$_POST['elocation'];

include "conn.php";

$sql = "INSERT INTO event(event_name,type,category,gender,description,start_date,end_date,time,status,certificate,oname,onumber,olocation,sname,snumber,elocation)
VALUES ('$event_name','$type','$category','$gender','$description','$start_date','$end_date','$time','ongoing','$certificate','$oname','$onumber','$olocation','$sname','$snumber','$elocation')";
if ($conn->query($sql) === TRUE) {	
 //$message = "Event Added Successfully";
 // echo "<script type='text/javascript'>alert('$message');</script>";
  //header('Location: Add Events.html'); 

echo '<script type="text/javascript">'; 
echo 'alert("Event Added Sucessfully");'; 
echo 'window.location.href = "add_events.html";';
echo '</script>';  
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
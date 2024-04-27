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
//echo "Connected successfully";

$sql = "UPDATE event set type='$type',category='$category',gender='$gender',description='$description',start_date='$start_date',end_date='$end_date',
        time='$time',certificate='$certificate',oname='$oname',onumber='$onumber',olocation='$olocation' ,sname='$sname' ,snumber='$snumber' ,elocation='$elocation' 
        where event_name='$event_name'";

if ($conn->query($sql) === TRUE) {
	
echo '<script type="text/javascript">'; 
echo 'alert("Event Updated Sucessfully");'; 
echo 'window.location.href = "edit_events.php";';
echo '</script>';  
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
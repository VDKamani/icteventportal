<?php
$event_name=$_POST['event'];
$type=$_POST['type'];
$cat=$_POST['cat'];
$name=$_POST['name'];
$gr_no=$_POST['gr_number'];
$register_as=$_POST['register_as'];
$email=$_POST['email'];
$department=$_POST['class'];
$location_user=$_POST['location_user'];
$course_type=$_POST['course_type'];
$sem_no=$_POST['sem_no'];

include './admin/html/conn.php';

$sql = "select * from entry where event='$event_name' and email='$email'";
$result =$conn->query($sql);
$num_rows = mysqli_num_rows($result);
if($num_rows!=1)
{
$sql = "INSERT INTO entry(event,type,category,username,gr_no,register_as,email,class,location,course_type,sem_no)
                  VALUES ('$event_name','$type','$cat','$name','$gr_no','$register_as','$email','$department','$location_user','$course_type','$sem_no')";
$subject = "Registration Conformation";
$message = "Hello  '$name' you are sucessfully registred for event '$event_name' Best wishes from Sportpro Team";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <sportpro.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($email,$subject,$message,$headers);

if ($conn->query($sql) === TRUE) {
	
 //$message = "Event Added Successfully";
 // echo "<script type='text/javascript'>alert('$message');</script>";
  //header('Location: Add Events.html'); 

echo '<script type="text/javascript">'; 
echo 'alert("Registered Sucessfully!!!!!!!!!!");'; 
echo 'window.location.href = "eventstart.php";';
echo '</script>';  
}


 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}


else
{
	echo '<script type="text/javascript">'; 
echo 'alert("Already Registered!!!!!!!!!!");'; 
echo 'window.location.href = "Events.php";';
echo '</script>';  
}
$conn->close();
?>
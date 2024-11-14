<?php
session_start();
$event_name=$_POST['event'];
$type=$_POST['type'];
$cat=$_POST['cat'];
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<style>

.container{
    position: relative;
    max-width: 42%;
    background: #fff;
	padding:2% ;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    
}

input[type=submit] {
    width: 20%;
    background-color:rgb(94, 90, 90);
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color:red;
}

body{
	background-image: linear-gradient(to bottom right,cyan,gray,gray);
}

</style>

</head>
<body>





 <h2 class="liketext" style="text-align:center;margin-top:25px;margin-bottom:25px;">Registeration Form </h2>

 <div class="container" >

    <form  action="./event_register_process.php" method="post">

	<div class="form-group mb-2 row">

    <b><label  for="event" class="col-sm-4 col-form-label"> Name: </label>
	<div class="col-sm-13">
	<input  type="text" class="form-control" name="event" id="event" value='<?php echo $event_name;?>' readonly  /><br>
	</div>



	<label  class="col-sm-4 col-form-label" for="event_type">Type:</label> 
	<div class="col-sm-13">
		<input   type="text" name="type" id="event_type" value='<?php echo $type;?>' readonly class="form-control"/><br>
		</div>


	<label  class="col-sm-4 col-form-label" for="event_cat">	Category:</label>
	<div class="col-sm-13">
	 <input   type="text" name="cat" id="event_cat" value='<?php echo $cat;?>' readonly class="form-control"/><br>
	 </div>


	<label  class="col-sm-4 col-form-label" for="fullname">	Full Name : </label>
	<div class="col-sm-13">
		<input  type="text" name="name" id="fullname" placeholder="Full Name as per id card" required class="form-control"/><br/>

		</div>
		
	<label  class="col-sm-4 col-form-label" for="gr_no">	GR No : </label>
	<div class="col-sm-13">
		<input   type="text" maxlength="6" name="gr_number" id="gr_no" placeholder="GR Number" required class="form-control"/>	<br/>
		</div>


	<label  class="col-sm-4 col-form-label" for="register_as">	Register As :</label> 
	<div class="col-sm-13">
		<select  name="register_as" required class="form-control" id="register_as" style="margin-right: 50px;"><br/>
				<option value="participate">Participate</option>
				<option value="co-ordinater">Co-Ordinater</option>
				</select><br/>
				</div>


	<label  class="col-sm-4 col-form-label" for="email">	E-mail :</label>
	<div class="col-sm-13">
		<input   type="email" name="email" id="email" placeholder="E-mail" required class="form-control"/><br/>

		</div>

	<label  class="col-sm-4 col-form-label" for="dept">	Department :</label> 
	<div class="col-sm-13">
		<input   type="text" name="class" id="dept" placeholder="Department" required class="form-control"/><br/>
		</div>

		
	<label  class="col-sm-4 col-form-label" for="location">	Location :</label> 
	<div class="col-sm-13">
		<select  name="location_user" required class="form-control" id="location" style="margin-right: 50px;"><br/>
				<option value="hostel">Hostel</option>
				<option value="city">City</option>
				</select><br/>
				</div>


		<label  class="col-sm-4 col-form-label" for="course">	Course Type : </label>
		<div class="col-sm-13">
			<select  name="course_type" required  id=" course" class="form-control" style="margin-right: 50px;"><br/>
		<option value="diploma">Diploma</option>
		<option value="degree">B.Tech / B.E</option>
		<option value="degree">M.Tech / M.E</option>
		</select></br>
		</div>

		
		<label  class="col-sm-4 col-form-label" for="sem">	Semester No  :</label> 
		<div class="col-sm-13">
			<select   name="sem_no" required id="sem" class="form-control" style="margin-right: 50px;"><br/>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		</select><br/><br/>
		</div>

     <input type="submit" style="float:right" value="Submit"/>
	  </b>
	</div>
	</form>
 </div>

</body>
</html>
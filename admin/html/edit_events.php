<?php
include "conn.php";
?>
<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="../css/style.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      color: rgb(129, 224, 255);

    }
    .container {
      max-width: 800px;
      margin: 50px auto;
      background-color: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.3);
    }
    h1 {
      text-align: center;
      padding-top: 10px;
      color: lightskyblue;
    }
    form {
      margin: 0 auto;
    }
    .form-group {
      margin-bottom: 20px;
    }
    .form-group label {
      display: block;
      margin-bottom: 5px;
    }
    .form-group input[type="text"],
    .form-group input[type="date"],
    .form-group input[type="time"],
    .form-group textarea,
    .form-group select {
      width: calc(100% - 20px);
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }
    .btn {
      border-style: solid;
      border-color: orangered;
      background-color: orange;
      color: black;
      border-radius: 10px 40px;
      padding: 10px 40px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    .btn:hover {
      background-color: orangered;
      color: white;
    }
  </style>
  </head>

  <body>

<div class="container">
  <h1>Edit Events</h1>   
  <form action="updateevent.php" method="post">
    <div class="form-group">
      <label>Event name:</label>
      <?php
      $sql = "SELECT * FROM event";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          // output data of each row
          echo '<select name="ename" class="smalltext">';
          while($row = $result->fetch_assoc()) {
              echo '<option value="'.$row["event_name"].'">'.$row["event_name"].'</option>';
          }
          echo '</select>';
      } else {
          echo "0 results";
      }
      ?>
    </div>
    <div class="form-group">
      <label>Type:</label>
      <select name="type" required>
        <option value="indoor">Indoor</option>
        <option value="outdoor">Outdoor</option>
      </select>
    </div>
    <div class="form-group">
      <label>Category:</label>
      <select name="category" required>
        <option value="single">Single</option>
        <option value="double">Double</option>
        <option value="team">Team</option>
      </select>
    </div>
    <div class="form-group">
      <label>Gender:</label>
      <select name="gender" required>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="both">Both</option>
      </select>
    </div>
    <div class="form-group">
      <label>Description & Rules:</label>
      <textarea rows="4" name="description" required></textarea>
    </div>
    <div class="form-group">
      <label>Register Date:</label>
      <input type="date" name="start_date" required>
      <label>End Date:</label>
      <input type="date" name="end_date" required>
    </div>
    <div class="form-group">
      <label>Event Time:</label>
      <input type="time" name="time" required>
    </div>
    <div class="form-group">
      <label>Certificate:</label>
      <select name="certificate" required>
        <option value="yes">Yes</option>
        <option value="no">No</option>
      </select>
    </div>
    <div class="form-group">
      <label>Faculty Coordinator Name:</label>
      <input type="text" name="oname" required>
    </div>
    <div class="form-group">
      <label>Student Coordinator Name:</label>
      <input type="text" name="sname" required>
    </div>
    <div class="form-group">
      <label>Faculty Coordinator Number:</label>
      <input type="text" name="onumber" required>
    </div>
    <div class="form-group">
      <label>Student Coordinator Number:</label>
      <input type="text" name="snumber" required>
    </div>
    <div class="form-group">
      <label>Faculty Coordinator Location:</label>
      <input type="text" name="olocation" required>
    </div>
    <div class="form-group">
      <label>Event location:</label>
      <input type="text" name="elocation" required>
    </div>
    <input type="submit" class="btn" value="Submit">
  </form>
</div>

</body>
</html>

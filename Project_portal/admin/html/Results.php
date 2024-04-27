<?php

include 'conn.php';

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../../assets/css/s.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<style>
.container {
    position: relative;
    max-width: 80%;
    background: #fff;
    padding: 2%;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}

label {
    color: rgb(129, 224, 255);
}

h1 {
    color: lightskyblue;
}

input[type=submit]{
    background-color: lightblue !important;
    color: white !important;
}

input[type=submit]:hover{
    background-color: cyan !important;
    color:white !important;
}

</style>

</head>
<body>
<div class="col-12">
  <div class="container">
    <h1>Result</h1>
    <form action="result_update.php" method="post">
      <label for="ename">Event name:</label>
      <select name="ename" required class="smalltext">
        <?php
          $sql = "SELECT * FROM event where status='ongoing'";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                  echo '<option value="'.$row["event_name"].'">'.$row["event_name"].'</option>';
              }
          } else {
              echo "0 results";
          }
        ?>
      </select>
      <br><br>
      <label for="1st">1st prize:</label>                                                                   
      <input type="text" name="1st" required class="bigtext"><br><br>
      <label for="2nd">2nd prize:</label>
      <input type="text" name="2nd" required class="bigtext"><br><br>
      <label for="3rd">3rd prize:</label>
      <input type="text" name="3rd" required class="bigtext"><br><br>
      <input type="submit" class="btn" value="Submit">
    </form>
  </div>
</div>
</body>
</html>

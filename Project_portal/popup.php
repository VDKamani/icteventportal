<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="./assets/css/popup.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  

</head>
<body>

    <div class="container">
        
        <i  data-js="open"  class="fas fa-message"></i>
    </div>
    
    <div class="popup" >
        <?php

        echo"<br> <b>Description:</b> " . $row["description"];

        ?>
        
    </div>


</body>

<script src="./assets/js/popup.js"></script>
</html>

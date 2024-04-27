<?php
// session_start();
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// include './conn.php';
// $description = $image_url = $alt_text = '';
// if (isset($_POST["submit"]) && $_FILES["image"]["name"]) {
//     // Get form data
//     $description = $_POST['description'];
//     $alt_text = $_POST['alt_text'];

//     // File upload process
//     $targetDirectory = "./uploads/";
//     $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);
//     $uploadOk = 1;
//     $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

//     if (isset($_POST["submit"])) {
//         if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
//             $check = getimagesize($_FILES["image"]["tmp_name"]);
//             if ($check !== false) {
//                 $uploadOk = 1;
//             } else {
//                 $uploadOk = 0;
//             }
//         } else {
//             echo "No file was uploaded.";
//             $uploadOk = 0;
//         }
//     }

//     // Check if file already exists
//     if (file_exists($targetFile)) {
//         $uploadOk = 0;
//     }

//     // Check file size
//     if ($_FILES["image"]["size"] > 500000) {
//         $uploadOk = 0;
//     }

//     // Allow only certain file formats
//     if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
//         $uploadOk = 0;
//     }

//     // Check if $uploadOk is set to 0 by an error
//     if ($uploadOk == 0) {
//         echo "Sorry, your file was not uploaded.";
//     } else {
//         // If everything is ok, try to upload file
//         if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
//             // Image uploaded successfully, now insert data into database
//             $image_url = $targetFile;
//             $stmt = $conn->prepare("INSERT INTO section1_content (description, image_url, alt_text) VALUES (?, ?, ?)");
//             $stmt->bind_param("sss", $description, $image_url, $alt_text);

//             if ($stmt->execute()) {
//                 echo "Record inserted successfully.";
//                 header('Location: section1.php');
//             } else {
//                 echo "Error: " . $stmt->error;
//             }
//         } else {
//             echo "Sorry, there was an error uploading your file: " . $_FILES["image"]["error"];
//         }
//     }
// }


// session_start();
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// include './conn.php';

// $description = $image_url = $alt_text = '';

// if (isset($_POST["submit"]) && $_FILES["image"]["name"]) {
//     // Get form data
//     $description = $_POST['description'];
//     $alt_text = $_POST['alt_text'];

//     // File upload process
//     $targetDirectory = '../assets/uploads/';
//     $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);
//     $uploadOk = 1;
//     $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

//     // Check if file is a valid image
//     $check = getimagesize($_FILES["image"]["tmp_name"]);
//     if ($check === false) {
//         echo "File is not an image.";
//         $uploadOk = 0;
//     }

//     // Check file size
//     if ($_FILES["image"]["size"] > 500000) {
//         echo "Sorry, your file is too large.";
//         $uploadOk = 0;
//     }

//     // Allow only certain file formats
//     if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
//         echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//         $uploadOk = 0;
//     }

//     if ($uploadOk == 0) {
//         echo "Sorry, your file was not uploaded.";
//     } else {
//         // Read the image file content
//         $image_content = file_get_contents($_FILES["image"]["tmp_name"]);

//         // Prepare and execute database query
//         $stmt = $conn->prepare("INSERT INTO section1_content (description, image_url, alt_text) VALUES (?, ?, ?)");
//         $stmt->bind_param("bss", $description, $image_content, $alt_text);

//         if ($stmt->execute()) {
//             echo "Record inserted successfully.";
//             header('Location: section1.php');
//         } else {
//             echo "Error: " . $stmt->error;
//         }
//     }
// }

// session_start();
// require_once './conn.php'; 
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
 
// // If file upload form is submitted 
// $status = $statusMsg = ''; 
// if(isset($_POST["submit"])){ 
//     $status = 'error'; 
//     $description = $_POST['description'];
//     $alt_text = $_POST['alt_text'];
//     if(!empty($_FILES["image"]["name"])) { 
//         // Get file info  
//         $fileName = basename($_FILES["image"]["name"]); 
//         $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
//         // Allow certain file formats 
//         $allowTypes = array('jpg','png','jpeg','gif'); 
//         if(in_array($fileType, $allowTypes)){ 
//             $image = $_FILES['image']['tmp_name']; 
//             $imgContent = addslashes(file_get_contents($image)); 
         
//             // Insert image content into database 
//             $insert = $conn->query("INSERT into section1_content (discription, image_url,alt_text) VALUES ('$description','$imgContent','$alt_text',NOW())"); 
             
//             if($insert){ 
//                 $status = 'success'; 
//                 // $statusMsg = "File uploaded successfully."; 
//                 echo "<script>alert('File uploaded successfully.');</script>";
//                 header('Location: section1.php');
                
//             }else{ 
//                 $statusMsg = "File upload failed, please try again."; 
//             }  
//         }else{ 
//             $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
//         } 
//     }else{ 
//         $statusMsg = 'Please select an image file to upload.'; 
//     } 
// } 
 
// // Display status message 
// echo $statusMsg; 



// session_start();
// require_once './conn.php'; // Assuming the connection file is present
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// $status = $statusMsg = '';

// if (isset($_POST["submit"])) {
//   $status = 'error';
//   $description = $_POST['description'];
//   $alt_text = $_POST['alt_text'];

//   // Validate temporary file path and existence
//   if (empty($_FILES["image"]["tmp_name"])) {
//     $statusMsg = "Please select an image file to upload.";
//   } else {
//     $image = $_FILES["image"]["tmp_name"];
//     if (!@file_exists($image)) {
//       $statusMsg = "Failed to access the uploaded file.";
//     } else {
//       // Optional: Validate file size, type, etc.
//       // ...

//       // Read file content (handle potential read errors)
//       $imgContent = @file_get_contents($image);
//       if ($imgContent === false) {
//         $statusMsg = "Error reading the uploaded file.";
//       } else {

//         // Insert image content into database using prepared statements
//         $insert = $conn->prepare("INSERT INTO section1_content (description, image_url, alt_text) VALUES (?, ?, ?)");
//         if (!$insert) {
//           $statusMsg = "Database error: " . $conn->error;
//         } else {
//           $insert->bind_param('sss', $description, $imgContent, $alt_text);
//           if (!$insert->execute()) {
//             $statusMsg = "Database error: " . $conn->error;
//           } else {
//             $status = 'success';
//             $statusMsg = "File uploaded successfully.";
//             header('Location: section1.php'); // Handle errors properly
//           }
//           $insert->close();
//         }
//       }
//     }
//   }
// }

// // Display status message (handle potential XSS vulnerabilities)
// echo htmlspecialchars($statusMsg);

// // Close connection (if applicable)
// // ...

session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

include './conn.php';

// Handling image upload
$description = $image_url = $alt_text = '';
if (isset($_POST["submit"]) && $_FILES["image"]["name"]) {
    // Get form data
    $description = $_POST['description'];
    $alt_text = $_POST['alt_text'];

    // File upload process
    $targetDirectory = "./uploads/";
    $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    if (isset($_POST["submit"])) {
        if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if ($check !== false) {
                $uploadOk = 1;
            } else {
                $uploadOk = 0;
            }
        } else {
            echo "No file was uploaded.";
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($targetFile)) {
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["image"]["size"] > 500000) {
        $uploadOk = 0;
    }

    // Allow only certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // If everything is ok, try to upload file
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            // Image uploaded successfully, now insert data into database
            $image_url = $targetFile;
            $stmt = $conn->prepare("INSERT INTO section1_content (description, image_url, alt_text) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $description, $image_url, $alt_text);

            if ($stmt->execute()) {
                echo "Record inserted successfully.";
                header('Location: section1.php');
            } else {
                echo "Error: " . $stmt->error;
            }
        } else {
            echo "Sorry, there was an error uploading your file: " . $_FILES["image"]["error"];
        }
    }
}

// Handling record deletion
if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    $stmt = $conn->prepare("DELETE FROM section1_content WHERE id = ?");
    $stmt->bind_param("i", $delete_id);
    if ($stmt->execute()) {
        echo "Record deleted successfully.";
        header('Location: section1.php');
    } else {
        echo "Error: " . $stmt->error;
    }
}


?>
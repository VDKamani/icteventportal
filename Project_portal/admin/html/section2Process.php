<?php
// Start session and include necessary files
session_start();
include 'conn.php';

// Check if the user is logged in

// Handle adding a new section
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $alt_text = $_POST['alt_text'];

    // Image upload directory
    $targetDirectory = "./uploads/";
    
    // File upload path
    $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    
    // Generate a unique file name to avoid duplicates
    $newFileName = uniqid() . '.' . $imageFileType;
    $targetFilePath = $targetDirectory . $newFileName;

    // Check if file is an actual image or fake image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
        // Upload file to server
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
            // Insert new record into database
            $sql = "INSERT INTO section2_content (title, description, image_url, alt_text) VALUES ('$title', '$description', '$targetFilePath', '$alt_text')";
            if (mysqli_query($conn, $sql)) {
                echo "Section added successfully.";
                header("Location: section2.php");
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "File is not an image.";
    }
}

// Handle section deletion
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    // Delete record from database
    $sql = "DELETE FROM section2_content WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully.";
        header("Location: section2.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>

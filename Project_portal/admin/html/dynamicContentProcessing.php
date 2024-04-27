<?php
// Include database connection
include 'conn.php';

// Initialize variables
$id = '';
$title = '';
$content = '';

// Fetch existing content
$sql = "SELECT * FROM dynamic_content";
$result = $conn->query($sql);
$contents = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $contents[] = $row;
    }
}

// If edit button clicked, fetch content for editing
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $sql = "SELECT * FROM dynamic_content WHERE id = $id";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $content = $result->fetch_assoc();
    }
}

// If save button clicked, add or update content
if (isset($_POST['save'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];

    // If ID exists, update content; otherwise, add new content
    if (!empty($_POST['id'])) {
        $id = $_POST['id'];
        $sql = "UPDATE dynamic_content SET title = '$title', content = '$content' WHERE id = $id";
    } else {
        $sql = "INSERT INTO dynamic_content (title, content) VALUES ('$title', '$content')";
    }

    if ($conn->query($sql) === TRUE) {
        header('Location: dynamicContent.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// If delete button clicked, delete content
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM dynamic_content WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        header('Location: dynamicContent.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

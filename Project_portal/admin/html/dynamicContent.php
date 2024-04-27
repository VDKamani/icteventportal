<?php
// Include database connection
include 'conn.php';

// Initialize variables
$id = '';
$title = '';
$content = '';

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

// Fetch existing content after any action
$sql = "SELECT * FROM dynamic_content";
$result = $conn->query($sql);
$contents = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $contents[] = $row;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        /* General styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2, h3 {
            text-align: center;
        }

        /* Form styles */
        form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        textarea {
            width: calc(100% - 12px);
            margin-bottom: 10px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
        }

        button {
            padding: 10px 20px;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            filter: brightness(110%);
        }

        /* Edit button */
        .edit-btn {
            background-color: #28a745; /* Green */
        }

        /* Delete button */
        .delete-btn {
            background-color: #dc3545; /* Red */
            margin-left: 10px;
        }

        /* Table styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Dynamic Content</h2>
        
        <!-- Form for adding/editing content -->
        <form action="dynamicContentProcessing.php" method="POST">
            <input type="hidden" name="id" value="<?php echo isset($content['id']) ? $content['id'] : ''; ?>">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="<?php echo isset($content['title']) ? $content['title'] : ''; ?>" required><br>
            <label for="content">Content:</label><br>
            <textarea id="content" name="content" rows="4" required><?php echo isset($content['content']) ? $content['content'] : ''; ?></textarea><br>
            <button type="submit" name="save" class="edit-btn">Save</button>
        </form>
        
        <hr>
        
        <!-- Display existing content -->
        <h3>Existing Content:</h3>
        <table>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php foreach ($contents as $content): ?>
            <tr>
                <td><?php echo $content['title']; ?></td>
                <td><?php echo $content['content']; ?></td>
                <td><a href="admin.php?edit=<?php echo $content['id']; ?>"><button class="edit-btn">Edit</button></a></td>
                <td><a href="dynamicContentProcessing.php?delete=<?php echo $content['id']; ?>" onclick="return confirm('Are you sure you want to delete this content?')"><button class="delete-btn">Delete</button></a></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>

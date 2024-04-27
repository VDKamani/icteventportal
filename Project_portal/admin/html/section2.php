<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Section 2 Image Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
        }
        input[type="text"],
        input[type="file"],
        .btn {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .btn-delete {
            background-color: #dc3545; /* Red */
        }
        .btn-delete {
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            color: white;
        }
        .btn-delete:hover {
            filter: brightness(110%);
        }
    </style>
</head>
<body>
<div class="container">
    <form action="section2Process.php" method="POST" enctype="multipart/form-data">
      <input type="text" name="title" placeholder="Title">
      <input type="text" name="description" placeholder="Description">
      <input type="file" name="image" id="image" required accept="image/*">
      <input type="text" name="alt_text" placeholder="Alt Text">
      <input type="submit" name="submit" class="btn">
    </form>

        <h2>Uploaded Images</h2>
        <table>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Image URL</th>
                <th>Alt Text</th>
                <th>Actions</th>
            </tr>
            <?php
            // Include the connection file
            include './conn.php';

            // Fetch data from the database
            $sql = "SELECT id, title, description, image_url, alt_text FROM section2_content";
            $result = mysqli_query($conn, $sql);

            // Check if there are any rows returned
            if (mysqli_num_rows($result) > 0) {
                // Output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["title"] . "</td>";
                    echo "<td>" . $row["description"] . "</td>";
                    echo "<td>" . $row["image_url"] . "</td>";
                    echo "<td>" . $row["alt_text"] . "</td>";
                    echo "<td>";
                    echo "<a href='section2Process.php?delete=" . $row['id'] . "' class='btn-delete'>Delete</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No records found</td></tr>";
            }

            // Close the connection
            mysqli_close($conn);
            ?>
        </table>
    </div>
</body>
</html>

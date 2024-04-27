<?php

session_start();

// Include database connection
include './admin/html/conn.php';

// Registration
if(isset($_POST['register'])) {
    $name = $_POST['regname'];
    $email = $_POST['regemail'];
    $pass = $_POST['regpass'];

    // Validate required fields
    if (empty($name) || empty($email) || empty($pass)) {
        showErrorRedirect("Please fill in all required fields.");
    }

    // Hash password using bcrypt
    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

    // Prepare and execute SQL query using parameterized statements
    $sql = "INSERT INTO `tb_user` (`name`, `email`, `password`) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'sss', $name, $email, $hashed_password);

    if (mysqli_stmt_execute($stmt)) {
        redirectTo("home.php");
    } else {
        showErrorRedirect("Registration failed. Please try again.");
        redirectTo("index.php");
    }

    mysqli_stmt_close($stmt);
}

// Login
if(isset($_POST['login'])) {
    // Validate required fields
    if (empty($_POST["loginUser"]) || empty($_POST["loginPass"])) {
        showErrorRedirect("Please fill in all required fields.");
    }

    $myusername = $_POST['loginUser'];
    $mypassword = $_POST['loginPass'];

    // Prepare and execute SQL query using parameterized statements
    $sql = "SELECT * FROM `tb_user` WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 's', $myusername);

    if (mysqli_stmt_execute($stmt)) {
        $result = mysqli_stmt_get_result($stmt);
        $user = mysqli_fetch_assoc($result);
        
        if ($user && password_verify($mypassword, $user['password'])) {
            // Login successful
            redirectTo("home.php");
        } else {
            showErrorRedirect("Invalid login credentials.");
            redirectTo("index.php");
        }
    } else {
        showErrorRedirect("Login failed. Please try again.");
        redirectTo("index.php");
    }

    mysqli_stmt_close($stmt);
}

// Function to show error message and redirect
function showErrorRedirect($message) {
    echo '<script>alert("' . $message . '");</script>';
    redirectTo("index.php");
}

// Function to redirect
function redirectTo($url) {
    echo '<script>window.location="' . $url . '";</script>';
    exit;
}

?>

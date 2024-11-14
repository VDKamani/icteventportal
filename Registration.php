<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include database connection
include './admin/html/conn.php';

// Check database connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Function to show error message and redirect
function showErrorRedirect($message) {
    echo '<script>alert("' . addslashes($message) . '"); window.location="index.php";</script>';
    exit;
}

// Function to redirect
function redirectTo($url) {
    header("Location: " . $url);
    exit;
}

// Registration
if (isset($_POST['register'])) {
    $name = $_POST['regname'] ?? '';
    $email = $_POST['regemail'] ?? '';
    $pass = $_POST['regpass'] ?? '';

    if (empty($name) || empty($email) || empty($pass)) {
        showErrorRedirect("Please fill in all required fields.");
    }

    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);
    $sql = "INSERT INTO `tb_user` (`name`, `email`, `password`) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, 'sss', $name, $email, $hashed_password);
        if (mysqli_stmt_execute($stmt)) {
            redirectTo("home.php");
        } else {
            showErrorRedirect("Registration failed: " . mysqli_error($conn));
        }
        mysqli_stmt_close($stmt);
    } else {
        showErrorRedirect("Failed to prepare statement: " . mysqli_error($conn));
    }
}

// Login
if (isset($_POST['login'])) {
    $myusername = $_POST['loginUser'] ?? '';
    $mypassword = $_POST['loginPass'] ?? '';

    if (empty($myusername) || empty($mypassword)) {
        showErrorRedirect("Please fill in all required fields.");
    }

    $sql = "SELECT * FROM `tb_user` WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, 's', $myusername);
        if (mysqli_stmt_execute($stmt)) {
            $result = mysqli_stmt_get_result($stmt);
            $user = mysqli_fetch_assoc($result);

            if ($user && password_verify($mypassword, $user['password'])) {
                redirectTo("home.php");
            } else {
                showErrorRedirect("Invalid login credentials.");
            }
        } else {
            showErrorRedirect("Login query execution failed: " . mysqli_error($conn));
        }
        mysqli_stmt_close($stmt);
    } else {
        showErrorRedirect("Failed to prepare statement: " . mysqli_error($conn));
    }
}
?>

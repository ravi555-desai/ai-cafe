<?php
session_start();
include("db.php");

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $query);

if ($row = mysqli_fetch_assoc($result)) {
    if (password_verify($password, $row['password'])) {
        $_SESSION['user'] = $email;
        header("Location: index.html");
    } else {
        echo "<script>alert('Incorrect password!'); window.location.href='login.html';</script>";
    }
} else {
    echo "<script>alert('User not found!'); window.location.href='login.html';</script>";
}
?>
<?php
include("db.php");

$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$query = "INSERT INTO users (name, email, password) VALUES ('$name','$email','$password')";
mysqli_query($conn, $query);

echo "Signup Successful! <a href='login.html'>Login</a>";
?>
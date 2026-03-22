<?php
$conn = mysqli_connect("localhost", "root", "", "aicafe");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
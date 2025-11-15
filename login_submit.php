<?php
require './includes/common.php';

// Do NOT call session_start() again if it's already in common.php

$user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
$password = $_POST['password'];

$query = "SELECT id, user_name FROM payroll.users WHERE user_name = '$user_name' AND password = '$password'";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

if (mysqli_num_rows($result) == 0) {
    $error = urlencode("Please enter correct username and password.");
    header("Location: login.php?error=$error");
    exit();
} else {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['user_name'] = $row['user_name'];
    $_SESSION['user_id'] = $row['id'];
    header("Location: index.php");
    exit();
}
?>

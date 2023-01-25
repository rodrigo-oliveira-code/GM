<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];
  if($username == "admin" && $password == "password") {
    $_SESSION['login_user'] = $username;
    header("location: dashboard.php");
  }else {
    $error = "Your Login Name or Password is invalid";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <title>Login</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center">Login</h1>
    <form action="" method="post">

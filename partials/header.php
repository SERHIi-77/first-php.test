<?php
// connecting DB
require($_SERVER['DOCUMENT_ROOT'].'/configs/db.php');
// open session for user
session_start();

require($_SERVER['DOCUMENT_ROOT'].'/configs/helpers.php');

?>


<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="assets/css/normalize.css">
  <link rel="stylesheet" href="assets/css/main.css">

  <link href="assets/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">

  <meta name="theme-color" content="#fafafa">
</head>

<body>

<?php 
    // если сесия "существует" и Не равна null  
    if (isset($_SESSION['user_id']) && $_SESSION['user_id'] != null) {
      echo '<a href="logout.php">Logout</a>'; // выводим ссылочку на  Logaut
    } else if (isset($_COOKIE['user_id']) && $_COOKIE['user_id'] != null) {
      echo '<a href="logout.php">Logout</a>';
    } else {
      // выводим ссылочки на Login & Register
      echo '<a href="login.php">Login </a>';
      echo '<a href="register.php"> Register</a>';
  }
?>


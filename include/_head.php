<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" href="img/favicon.jpg">
    <title>Pit Studio</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/fullpage.min.css">
    <link rel="stylesheet" href="css/main.css">

    <script type="text/javascript" src="js/jquery-2.1.4.js"></script>
    <script type="text/javascript" src="js/parallax.js"></script>
    <script type="text/javascript" src="js/fullpage.min.js"></script>
    <script type="text/javascript" src="js/lottie-player.js"></script>
    <script type="text/javascript" src="js/aos.js"></script>
    <script type="text/javascript" src="js/jquery.lazy.min.js"></script>
    <script type="text/javascript" src="js/jquery.lazy.plugins.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    
    <meta property="og:image" content="img/banner2.png"/>
</head>
<body>
<?php

$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

include('include/_popup-join.php');
include('include/_popup-contact.php');
include('include/_popup-contact-complete.php');
include('include/_popup-join-complete.php');
?>


<?php
include_once("includes/config.php");
ob_start();
session_start();

$user = !empty($_SESSION["user"]) ? $_SESSION["user"] : []; 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMS</title>
    <link rel="stylesheet" href="public/style/style.css">
</head>
<body>

<div class="container">
<nav class="navbar">
    <a href=<?php echo BASEURL ?> class="logo">EMS</a>
    <div class="menu-toggle" id="mobile-menu">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
    <ul class="nav-list" id="nav-list">
        <li><a href="#">Home</a></li>
        <li><a href="<?php echo BASEURL . 'about.php'?>">About</a></li>
    <?php
if(empty($user))
{
    ?>            
        <li><a href="<?php echo BASEURL . 'signin.php'?>">Sign In</a></li>
    <?php
}

else{
    ?>
        <li><a href="<?php echo BASEURL . 'signup.php'?>">Register Admin</a></li>

        <li> <a href="<?php echo BASEURL . 'profile.php'?>"><?php echo " Welcome ". $user["user_name"] ?></a></li>
    <?php
}     
    ?>
    </ul>
</nav>
</div>

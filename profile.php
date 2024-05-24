<?php
 include_once("common/header.php");
 require_once("includes/config.php");

 if(empty($_SESSION["user"]))
 {
    header("location:". BASEURL);
 }

 $admin_name = $_SESSION["user"]["user_name"];
 $admin_email = $_SESSION["user"]["email"];

?> 


<style>
    .profile-container{
        width: 60%;
        margin: 140px auto;
    }
</style>

<div class="profile-container">
    <div>
        <h2>Name : </h2>
        <p><?php echo $admin_name?></p>
    </div>

    <div>
        <h2>Email : </h2>
        <p><?php echo $admin_email?></p>
        
    </div>


    <a href="<?php echo BASEURL . "actions/" . "signout.php"?>">Log Out</a>
</div>

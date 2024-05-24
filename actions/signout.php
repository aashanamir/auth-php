<?php
    require_once("../includes/config.php");
    ob_start();
    session_start();

    if($_SESSION["user"]){
        unset($_SESSION["user"]);
        session_destroy();
        header("location:". BASEURL);

    }
    
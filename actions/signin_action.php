<?php
  echo 'I am signin action';
  require_once("../includes/config.php");
  require_once("../includes/db.php");
  ob_start();
  session_start();

  $Error = [];

  if(isset($_POST))
  {

    $email = $_POST["email"];
    $password = $_POST["password"];
   
    if(empty($email))
    {
      $Error[] = "Please Enter Your Email";
    }

    if(empty($password))
    {
      $Error[] = "Please Enter Password";
    }


    if(!empty($Error))
    {
      $_SESSION['errors'] = $Error;

      header('location:' . BASEURL . 'signin.php');

      exit();
    }


    if(!empty($email) && !empty($password))
    {
      $conn = db_connect();

      $sql = "SELECT * FROM `users` WHERE `email` = '$email'";

      $result = mysqli_query($conn , $sql);
      echo "<pre>";

      if (mysqli_num_rows($result) > 0)
      {
        $user = mysqli_fetch_assoc($result);

        if(!empty($user)){
          $dbPassword = $user["password"];
          
          if(password_verify($password , $dbPassword))
          {
            $_SESSION["user"] = $user;
            header('location:' . BASEURL);
          }
          else {
            $Error[] = "Password Not Matched";
            $_SESSION['errors'] = $Error;

            header('location:' . BASEURL . 'signin.php');
          }
        }
      }
    }
    
  }
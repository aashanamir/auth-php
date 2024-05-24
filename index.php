<?php 
  include_once("common/header.php");
  require_once("includes/config.php");


?>  

<?php
    if(isset($_SESSION["user"])){

        print_r($_SESSION["user"]);
    }

    else {
        header('location:'. BASEURL . 'signin.php');
    }
?>

<?php 
  include_once("common/footer.php");

?>  
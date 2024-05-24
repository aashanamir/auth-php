<?php 
  include_once("common/header.php");

?>  

<style>

.error{
    color: red;
    list-style: none;
}

.login-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 60%;
            margin : 80px auto;
        }
        .login-container h1 {
            text-align: center;
            color: #333;
        }

  .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
        }
        .form-group input[type="text"],
        .form-group input[type="password"] {
            width: 92%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-group input[type="submit"] {
            width: 92%;
            background-color: #4caf50;
            color: #ffffff;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-group input[type="submit"]:hover {
            background-color: #45a049;
        }
</style>

<div class="login-container">
<?php
        if(isset($_SESSION["errors"]))
        {
         ?>
            <div class="error">
                <?php 
                    foreach ($_SESSION["errors"] as $error ) {
                        print '<li>'.$error.'</li>';
                    }
                ?>
            </div>
         <?php 
            unset($_SESSION["errors"]);
        }
        ?>
        <h1>Sign In</h1>
<form action="<?php echo BASEURL . 'actions/signin_action.php'; ?>" method="post">
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" >
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" >
    </div>
    <div class="form-group">
        <input type="submit" value="Sign In">
    </div>
  </form>
  </div>

  <?php 
  include_once("common/footer.php");

?>  
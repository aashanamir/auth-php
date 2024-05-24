<?php 
  include_once("common/header.php");

?>  

<style>
.error{
    color: red;
    list-style: none;
}

.success{
    color: green;
    padding : 18px 24px;
    background : greenyellow;
}


.signupForm-container {
    max-width: 500px;
    margin: 60px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}


  .signup-form {
    text-align: center;
}

.signup-form h2 {
    margin-bottom: 20px;
}

.input-group {
    margin-bottom: 15px;
}

.input-group label {
    display: block;
    margin-bottom: 5px;
}

.input-group input {
    width: 94%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: green;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
}

button:hover {
    background-color: darkgreen;
}

@media (max-width: 768px) {
    .container {
        margin: 50px auto;
    }
}

</style>


<div class="signupForm-container">
    <!-- Displaying errors -->
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
    <!-- Displaying Success -->

     <?php
        if(isset($_SESSION["success"]))
        {
         ?>
            <div class="success">
                <?php 
                   
                        print '<li>'.$_SESSION["success"].'</li>';
                    
                ?>
            </div>
         <?php 
            unset($_SESSION["success"]);
        }
        ?>
    

  <form action="<?php echo BASEURL . "actions/signup_action.php" ?>" method="POST" class="signup-form">
        <h2>Employee Registration</h2>
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username"  required>
        </div>
        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="input-group">
            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="confirm-password" name="confirm-password" required>
        </div>
        <button type="submit">Submit</button>
    </form>
</div>


<?php 
  include_once("common/footer.php");
?>  
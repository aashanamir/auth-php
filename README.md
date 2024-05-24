# Password Hashing In Php 

## 1. Hash Password

`password_hash()` creates a new password hash using a strong one-way hashing algorithm. The following algorithms are currently supported: `PASSWORD_DEFAULT`

```php
password_hash($password , PASSWORD_DEFAULT);
```

## 2. Keeping Email Unique
By using this query `"SELECT id FROM `users` WHERE `email` = '$email'";` we are selecting email and comparing the email with our current email.
After that we can add Logic to make sure that no one can use same email for two times 



## 3. Review Previous Lectures

1. In todays Lecture we are gonna Set Success Session and print Success Message

2. Created Sign In Form And Review File Inclusion

3. Created Action file for signin 


## 4. Login Methodology

```php
if(!empty($email) && !empty($password))
    {
      $conn = db_connect();

      $sql = "SELECT * FROM `users` WHERE `email` = '$email'";

      $result = mysqli_query($conn , $sql);

      if (mysqli_num_rows($result) > 0)
      {
        echo "<pre>";
        $user = mysqli_fetch_assoc($result);
        if(!empty($user)){
          $dbPassword = $user["password"];
          if(password_verify($password , $dbPassword))
          {
            $_SESSION["user"] = $user;
            header('location:' . BASEURL);
          }
        }
      }
    }
```
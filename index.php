<?php
require 'functions1.php';

if (isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result= mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
    
//cek username
    if(mysqli_num_rows($result) === 1){


        //cek password
        $row= mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])){
           
            $_SESSION["login"] = true;
           
            $_SESSION["id"] =  $row["id"];

                header("Location: dashboard.php");

        exit;
        }
    }
    $error =true;

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/uikit.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
    <title>Form Login</title>
</head>
<body uk-height-viewport class="uk-height-vewport uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(./pexels.jpeg); background-size : cover;">
         <h1></h1>
       <form action="" method="post">
     
         <div class="uk-container uk-padding uk-align-center uk-position-center uk-card uk-card-default uk-card-body">  
         <h1 class="uk-text-center">Log IN</h1>
         <?php
                if(isset($error)) : ?>
                <p style="color: red;">Usernmae atau Password Salah</p>
          <?php
                endif;
            ?>
            <div class="uk-margin">
                <div class="uk-inline">
                    <span class="uk-form-icon" uk-icon="icon: user"></span>
                    <input style="border-radius:40px;" class="uk-input" type="text" name="username" placeholder="Username...">
                </div>
            </div>
            <div class="uk-margin">
                <div class="uk-inline">
                    <span class="uk-form-icon" uk-icon="icon: lock"></span>
                    <input style="border-radius:40px; " class="uk-input" type="password" name="password" placeholder="Password..." minlength="6" maxlength="25">
                </div>
            </div>
            <br>
            <button class="uk-button uk-button-default uk-width-1-1 uk-margin-small-bottom" style="background : black;color:white;" name="login">LOGIN</button>
            <div class="uk-text-small uk-text-center">
            Not Registered <a href="register.php" class="uk-text-mutted">Create an Acount</a>
            </div>
        </div>
    </div>

        </form>
</div>
     </div>          
        </div>
    
</div>



    
</body>
</html>
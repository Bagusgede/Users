<?php

    require 'functions.php';

    if(isset($_POST['register'])){
        if (register($_POST) > 0){
            echo" <script>
            alert('User succesfull) ;
            document.location.href = 'index.php'
            </script>";
        }else {
            echo mysqli_error($conn);    
        }
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
          
       <form action="" method="post">
         <div class="uk-container uk-padding uk-align-center uk-position-center uk-card uk-card-default uk-card-body">  
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
            <div class="uk-margin">
                <div class="uk-inline">
                    <span class="uk-form-icon" uk-icon="icon: users"></span>
                    <input style="border-radius:40px; " class="uk-input" name="name" type="text" placeholder="Name..." minlength="6" >
                </div>
            </div>
            <div class="uk-margin">
                <div class="uk-inline">
                    <span class="uk-form-icon" uk-icon="icon: mail"></span>
                    <input style="border-radius:40px; " class="uk-input" type="text" name="email" placeholder="Email..." minlength="6" >
                </div>
            </div>
            <br>
            <button class="uk-button uk-button-default uk-width-1-1 uk-margin-small-bottom" name="register" style="background : black;color:white;">Login</button>
            <div class="uk-text-small uk-text-center">
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
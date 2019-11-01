<?php
  session_start();

    if (!isset($_SESSION["login"])) {
        header("Location: index.php");
        exit;
    }

    require 'functions1.php';
   
    $result = mysqli_query($conn, "SELECT * FROM users WHERE id = '$_SESSION[id]'");
  $row = mysqli_fetch_assoc($result);
  $name = $row['name'];



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
    <title>Dashboard</title>
</head>
<body>
    <div class="uk-animation-scale-up">
    <div class="uk-container uk-padding-small uk-background-muted">
        <h1>Todo List</h1>       
            <h1 class="uk-text-center">Welcome <?= $name; ?></h1>
                <div class=" uk-position-top-right uk-overlay uk-overlay-default uk-button " type="button">
                    <a href="" uk-icon="icon: users ; ratio : 3 ;"></a>
                        <div uk-dropdown="mode: click;">
                            <ul class="uk-nav uk-dropdown-nav">
                                <li class="uk-active"><a href="#">Profile</a></li>
                                <li><a href="logout.php">Log Out</a></li>
                            </ul>
                        </div>
                </div>
       <hr>
              
    <div style="display:flex;">
        <div class="uk-inline uk-padding" >
            <button class="uk-button uk-button-default" type="button">Pilih Kategori</button>
            <button class="uk-button uk-button-default" type="button" uk-icon="triangle-down"></button>
                <div uk-dropdown="mode:click;">              
                    <ul class="uk-nav uk-dropdown-nav">
                        <li class="uk-active"><a href="#">Kategori A</a></li>
                        <li><a href="#">Kategori B</a></li>
                        <li class="">Kategori C</li>
                        <li><a href="#">Kategori D</a></li>
                    </ul>
                </div>
        
        <button class="uk-button uk-button-default" type="button" uk-icon="plus"></button>
            <div uk-dropdown="mode:click;">
                <ul class="uk-nav uk-dropdown-nav">
                    <li class="uk-active"><a href="addcategori.php">Add Category</a></li>
                    <li><a href="#">Add Todo List</a></li>
                </ul>
    `       </div>
        </div>
    </div>


     <div class=" uk-text-center uk-card uk-card-default uk-card-body uk-width-1-3 uk-padding uk-align-center uk-card-hover "uk-grid>
            <div class="uk-card uk-card-default uk-card-body uk-margin uk-card-hover ">
            <tr>
                    <h5>Add Todo List</h5>
            </tr>
                <hr>
                <tr>
                    <h3 class="uk-text-left">Todo</h3>
                    <input style="border-radius:40px;" class="uk-input" type="text" name="todo" placeholder="Name List...">
                        <h3 class="uk-text-left">Assign</h3>
                        <input style="border-radius:40px;" class="uk-input" type="text" name="assign" placeholder="Assign...">
                    <br><br>
                     <button class="uk-button uk-button-default uk-width-1-1 uk-margin-small-bottom" style="border-radius:40px; background:linear-gradient(red,green,blue);color:white;" name="submit">Submit</button>
                </tr>
            </div>
        </div>
    </div>
    </div>

</body>
</html>
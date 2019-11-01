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
    <div class="uk-container uk-background-cover "style="background-image: url(./pexels.jpeg);">
   <h1 style="color:white;">Todo List</h1>       
        <h1 style="color:white;"class="uk-text-center">Welcome <?= $name; ?></h1>
    <div class=" uk-position-top-right uk-overlay uk-overlay-default uk-button " type="button">
    <a href="" uk-icon="icon: users ; ratio : 3 ;"></a>
    <div uk-dropdown="mode: click;">
    <ul class="uk-nav uk-dropdown-nav">
            <li  class="uk-active"><a href="#">Profile</a></li>
            <li><a href="logout.php">Log Out</a></li>
        </ul>
  
    </div>
    </div>
    <hr><br><br>
    <div style="display:flex;">
    <div class="uk-inline uk-padding" >
    <button class="uk-button uk-button-default" style="color:white;" type="button">Pilih Kategori</button>
    <button style="color:white;" class="uk-button uk-button-default" type="button" uk-icon="triangle-down"></button>
    <div uk-dropdown="mode:click;">
        <ul class="uk-nav uk-dropdown-nav">
            <li class="uk-active"><a href="#">Kategori A</a></li>
            <li><a href="#">Kategori B</a></li>
            <li class="">Kategori C</li>
            <li><a href="#">Kategori D</a></li>
        </ul>
    </div>
    
    <button class="uk-button uk-button-default" style="color:white;" type="button" uk-icon="plus"></button>
    <div uk-dropdown="mode:click;">
    <ul class="uk-nav uk-dropdown-nav">
            <li class="uk-active"><a href="addcategori.php">Add Category</a></li>
            <li><a href="addtodolist.php">Add Todo List</a></li>
        </ul>
    </div>
    </div>
    </div>

    <div style="display:flex;"><div style="display:flex;" class="uk-card-body uk-width-1-3" >
  
    <div class="uk-card uk-card-default uk-card-body uk-card-hover ">
  
    <table class="uk-table uk-table-divider ">
    <tr>
        <h1 class="uk-nav-center">Today</h1>
    </tr>
        <hr>
    <tr>
    <button class="uk-button uk-button-default uk-width-1-1 uk-text-left">
    Lari Pagi
    <a href="" class="uk-icon-button uk-margin-small-right" uk-icon="check"></a><a href="" class="uk-icon-button uk-margin-small-right" uk-icon="close"></a></button>
    
    <br><br>
    <button class="uk-button uk-button-default uk-width-1-1 uk-text-left">
    Jalan"
    <a href="" class="uk-icon-button uk-margin-small-right" uk-icon="check"></a><a href="" class="uk-icon-button uk-margin-small-right" uk-icon="close"></a></button>
    </button>
    </tr>
     
    </tbody>
</table>
</div>
    </div>
    <div style="display:flex;" class=" uk-card-body uk-width-1-3" >
    <div class="uk-card uk-card-default uk-card-body uk-card-hover ">
  
    <table class="uk-table uk-table-divider ">
    <tr>
        <h1 class="uk-nav-center">Tomorrow</h1>
    </tr>
        <hr>
    <tr>
    <button class="uk-button uk-button-default uk-width-1-1 uk-text-left">
    
   senam
    <a href="" class="uk-icon-button uk-margin-small-right" uk-icon="check"></a><a href="" class="uk-icon-button uk-margin-small-right" uk-icon="close"></a></button>
    
    <br><br>
    <button class="uk-button uk-button-default uk-width-1-1 uk-text-left">
    kerja
    <a href="" class="uk-icon-button uk-margin-small-right" uk-icon="check"></a><a href="" class="uk-icon-button uk-margin-small-right" uk-icon="close"></a></button>
    </button>
    </tr>
     
    </tbody>
</table>
</div>
    </div>
    <div style="display:flex;" class="uk-card-body uk-width-1-3" >
    <div class="uk-card uk-card-default uk-card-body uk-card-hover ">
  
    <table class="uk-table uk-table-divider ">
    <tr>
        <h1 class="uk-nav-center">Up Coming</h1>
    </tr>
        <hr>
    <tr>
    <button class="uk-button uk-button-default uk-width-1-1 uk-text-left">
    
    bangun siang
    <a href="" class="uk-icon-button uk-margin-small-right" uk-icon="check"></a><a href="" class="uk-icon-button uk-margin-small-right" uk-icon="close"></a></button>
    
    <br><br>
    <button class="uk-button uk-button-default uk-width-1-1 uk-text-left">
    tidur lagi
    <a href="" class="uk-icon-button uk-margin-small-right" uk-icon="check"></a><a href="" class="uk-icon-button uk-margin-small-right" uk-icon="close"></a></button>
    </button>
    </tr>
     
    </tbody>
</table>
</div>
    </div>
   
    </div>
    </div>
    </div>  

    
</body>
</html>
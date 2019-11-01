<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "users");

if(!$conn){
	echo "Koneksi Gagal";
	die();
}else{
	echo "";
}


function register($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $name = $data["name"];
    $email = $data["email"];
    
    $_SESSION["name"]=$name;

    //ngecek username nya dlu, udah ada apa belom

    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'" );

    if (mysqli_fetch_assoc($result)){
        echo "<script>
                alert('Username Sudah Dipakai!');
              </script>";
        return false;
    }


    //enkripsiin password

    $password = password_hash($password, PASSWORD_DEFAULT);

    //nambahin user baru ke database

    $query = "INSERT INTO users VALUES('', '$username', '$password', '$name', '$email' )";
    if (mysqli_query($conn, $query)) {
        return mysqli_affected_rows($conn);
    }
    else {
        return false;
    }
    return $name = $data["name"];
}


?>
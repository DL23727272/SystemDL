<?php
    include "myConnection.php";

    $username = $_POST["username"];
    $password = md5($_POST["password"]);

    $query = "SELECT * FROM hotel WHERE name = '$username' && password = '$password'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);

    if($row['name'] == "$username" && $row['password'] == "$password"){
        header("Location:index.php");
    }

    else{
        echo "<script>alert('Please Sign up to Login'); window.location = 'signup.php';</script>";

    }

?>
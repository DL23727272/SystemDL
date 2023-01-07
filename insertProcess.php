<?php
    
    include "myConnection.php";

    $email = $_GET["email"];
    $username = $_GET["username"];
    $type= $_GET["type"];
    $password= $_GET["password"];
    $passwordEncrypt = md5($password);

    $query = "INSERT INTO hotel ( email, name, password, type)
    VALUE ('$email', '$username', '$passwordEncrypt', '$type')";
    
    if(mysqli_query($connect, $query)){
        echo "New record added successfully";
        echo "<script>window.location = 'admin.php'</script>";
    }
    else{
        echo "New record failed to add <br>". mysqli_error($connect);
    }
    mysqli_close($connect);
?>
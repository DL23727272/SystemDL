<?php
    
    include "myConnection.php";

    $email = $_POST['email'];
    $name = $_POST["username"];
    $password= $_POST["password"];
    $passwordEncrypt = md5($password);
    
    $query = "INSERT INTO hotel ( email, name, password)
             VALUE ('$email', '$name', '$passwordEncrypt')";

    if(strlen(trim($password))  <  8 ) {
        echo "<script>alert('Password is at least 8 characters!'); window.location = 'signup.php';</script>";
    }
    else{
        if(mysqli_query($connect, $query)){
            echo "Sign up successfully <br>";
            

        }
    
        else{
            echo "New record failed to add <br>". mysqli_error($connect);
        }
    }
    mysqli_close($connect);
?>
<html>
    <head>
    <script type="text/javascript">
            var yes = confirm("Sign up successfully, Do you want to Log in?");
            
            if (yes) {
                window.location.replace("login.php");
            }
            else{
                document.write("Please go to Login Page");
            }
        </script>
    </head>
</html>
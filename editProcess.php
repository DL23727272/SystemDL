<?php

   include "myConnection.php";

   $id = $_GET["id"];
   $name = $_GET["name"];
   $email = $_GET["email"];
   $type = $_GET["type"];

   $query = "UPDATE hotel SET name='$name', email ='$email', type ='$type' WHERE id=$id";
 
   if(mysqli_query($connect, $query)){
    header('LOCATION:admin.php');
   }
   else{
    echo "Record Failed to update <br>". mysqli_error($connect);
   }
   mysqli_close($connect);
?>
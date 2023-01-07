<?php 
    include "myConnection.php";

    $id = $_GET["id"];

    $query = "DELETE FROM deluxe WHERE id=$id";

    if(mysqli_query($connect, $query)){
        header('LOCATION:deluxeBooking.php');
       }
       else{
        echo "Record Failed to Delete <br>";
       }
       mysqli_close($connect);
?>
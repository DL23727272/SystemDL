<?php 
    include "myConnection.php";

    $id = $_GET["id"];

    $query = "DELETE FROM superdeluxe WHERE id=$id";

    if(mysqli_query($connect, $query)){
        header('LOCATION:superBooking.php');
       }
       else{
        echo "Record Failed to Delete <br>";
       }
       mysqli_close($connect);
?>
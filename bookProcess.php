<?php
    
    include "myConnection.php";

    $fname = $_POST['fname'];
    $phone = $_POST["phone"];
    $CheckInDate = $_POST["CID"];
    $CheckInTime = $_POST["CIT"];
    $DaysOfStay = $_POST["DOS"];
   
    
    $query = "INSERT INTO book ( fname, phone, CID, CIT, DOS)
             VALUE ('$fname', '$phone', '$CheckInDate', '$CheckInTime', ' $DaysOfStay')";

   
   
        if(mysqli_query($connect, $query)){
            echo "New record added successfully";
        }
        else{
            echo "New record failed to add <br>". mysqli_error($connect);
        }
        mysqli_close($connect);
?>

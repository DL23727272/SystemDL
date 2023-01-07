<?php
    
    include "myConnection.php";

    $fname = $_POST['Dname'];
    $phone = $_POST["Dphone"];
    $CheckInDate = $_POST["DCID"];
    $CheckOutDate = $_POST["DCOD"];
    $CheckInTime = $_POST["DCIT"];
    $DaysOfStay = $_POST["DDOS"];
    $price = $_POST["tp"];
   
    
    $query = "INSERT INTO deluxe ( fname, phone, CID, COD, CIT, DOS, Price)
             VALUE ('$fname', '$phone', '$CheckInDate','$CheckOutDate', '$CheckInTime', ' $DaysOfStay', '$price')";

   
   
        if(mysqli_query($connect, $query)){
            echo "New record added successfully";
        }
        else{
            echo "Empty Details <br>". mysqli_error($connect);
        }
        mysqli_close($connect);
?>
<html>
    <head>
    <script type="text/javascript">
            var yes = confirm("Reserve successfully");
            
            if (yes) {
                window.location.replace("book.php");
            }
            else{
                document.write("Please reload the Page");
            }
        </script>
    </head>
</html>
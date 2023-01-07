<html>
    <head>
        <title>Twin Booking Data</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    
        <style>
            table{
                border-collapse: collapse;
                border-spacing: 0;
                width: 100%;
                border: 1px solid #ddd;
            }

            th,td{
                text-align: left;
                padding: 16px;
            }
            tr:nth-child(even){
                background-color: #f2f2f2;
            }
            img{
                width: 100px;
                height: 40px;
            
            }
            a .btn{
               margin: 2px;
            }
            h1{
                text-align: center;
            }
        </style>

    </head>
    <body>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a href="index.php" class="navbar-brand"><img src="img/helios2.png" alt=""></a>

            <button class="navbar-toggler" type="button" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span></button>
            <div class="collapsse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item active">
                <a href="admin.php"><button type="button" class="btn btn-success">  Admin Page </button></a>
                <a href="twinBooking.php"><button type="button" class="btn btn-success"> Twin Booking Page </button></a>
                <a href="deluxeBooking.php"><button type="button" class="btn btn-success"> Deluxe Booking Page </button></a>
                <a href="superBooking.php"><button type="button" class="btn btn-success"> Super Deluxe Booking Page </button></a>
          

                </li>
            </ul>
        </div>
        </nav>
       

        <br></br>
        <h1>Twin Bed Room Bookings</h1>
        <table>
            <tr>
                <th> ID </th>
                <th> Name </th>
                <th> Phone No. </th>
                <th> Check In Date </th>
                <th> Check Out Date </th>
                <th> Check In Time </th>
                <th> Days Of Stay </th>
                <th> Price </th>
                <th> Check out</th>
            </tr>
            <?php 
                include "myConnection.php";

                $query = "SELECT * FROM twin";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
            ?>         
                <tr>
                    <td> <?php echo $row["id"];?> </td>
                    <td> <?php echo $row["fname"];?> </td>
                    <td> <?php echo $row["phone"];?> </td>
                    <td> <?php echo $row["CID"];?> </td>
                    <td> <?php echo $row["COD"];?> </td>
                    <td> <?php echo $row["CIT"];?> </td>
                    <td> <?php echo $row["DOS"];?> </td>
                    <td> <?php echo $row["Price"];?> </td>
                    <td>
                    <a href="twinDelete.php?id=<?php echo $row ["id"]; ?>">
                    <button type="button" class="btn btn-warning">Check out</button></a>
                    </td>
                    
                </tr>
                
                <?php
                    }
                }
                else{
                    echo "0 results";
                }
            ?>
            
        </table>
    </body>
</html>
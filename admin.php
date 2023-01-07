<html>
    <head>
        <title>USERS Data</title>
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
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addUser">Add User</button>
                <a href="twinBooking.php"><button type="button" class="btn btn-success"> Twin Booking Page </button></a>
                <a href="deluxeBooking.php"><button type="button" class="btn btn-success"> Deluxe Booking Page </button></a>
                <a href="superBooking.php"><button type="button" class="btn btn-success"> Super Deluxe Booking Page </button></a>
            <!------ Add User -->
                    <div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Add User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form action="insertProcess.php" method="get">
                                <table>

                                    <tr>
                                        <td>Email: </td>
                                        <td><input type="text" name="email"></td>
                                    </tr>
                                    <tr>
                                        <td>Name: </td>
                                        <td><input type="text" name="username"></td>
                                    </tr>
                                    <tr>
                                        <td>Password: </td>
                                        <td>
                                            <textarea name="password" cols="20" rows="5"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Type: </td>
                                        <td>
                                        <select type="number" id="type" size="1" name="type" value="<?php echo $row['type']; ?>">
                                            <option >Admin</option>
                                            <option default>User</option>
                                        
                                        </select>
                                        </td>
                                    </tr>
                                    
                                </table>
                        
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <a href="insertProcess.php"><button  type="submit" class="btn btn-primary" name="send">Save changes</button></a>
                        </div>
                        </form>
                        </div>
                    </div>
                    </div>

                </li>
            </ul>
        </div>
        </nav>
       

        <br></br>
        <h1>User Details</h1>
        <table>
            <tr>
                <th> ID </th>
                <th> Email </th>
                <th> Name </th>
                <th> Password </th>
                <th> Type </th>
                <th> Action </th>
            </tr>
            <?php 
                include "myConnection.php";

                $query = "SELECT * FROM hotel";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
            ?>         
                <tr>
                    <td> <?php echo $row["id"];?> </td>
                    <td> <?php echo $row["email"];?> </td>
                    <td> <?php echo $row["name"];?> </td>
                    <td> <?php echo $row["password"];?> </td>
                    <td> <?php echo $row["type"];?> </td>
                    <td>
                      <td>
                        <div>
                      <a href="editForm.php?id=<?php echo $row ["id"]; ?>">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit" >Edit</button>
                    </a>
                        
                        </div>
                      </td>
                       
                        <td>
                        <a href="delete.php?id=<?php echo $row ["id"]; ?>">
                        <button type="button" class="btn btn-warning">Delete</button></a>
                        </td>
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
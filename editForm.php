<html>
    <head>
        <title>Edit Data</title>
    </head>
    <body>
        <?php 
            include "myConnection.php";
            $id = $_GET['id'];
            $query = "SELECT * FROM hotel WHERE id='$id'";
            $result = mysqli_query($connect, $query);
        ?>
        <form action="editProcess.php" method="get">
            <table>
                <?php 
                    while($row = mysqli_fetch_array($result)){
                ?>
                    <tr>
                        <td>ID: </td>
                        <td><input type="text" name="id" value="<?php echo $id; $row['id']; ?>" readonly></td>
                    </tr> 
                    <tr>
                        <td>Email: </td>
                        <td>
                            <textarea name="email" cols="20" rows="5"> <?php echo $row['email']; ?> </textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>Name: </td>
                        <td><input type="text" name="name" value="<?php echo $row['name']; ?>"></td>
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
                   
                    <tr>
                        <td>
                            
                            <input type="submit" name="save" value="Save Changes">
                            
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </form>
    </body>
</html>
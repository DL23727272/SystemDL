<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit">
  Edit
</button>

<!-- Edit -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
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
                   
                    
                    <?php
                }
                ?>
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
<html>
    <head>
        <title>Book</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="bookCss.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

        <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <script>
        function calculateDays(){
                var d1 = document.getElementById("check-in-Date").value;
                var d2 = document.getElementById("check-out-Date").value;

                const dateOne = new Date(d1);
                const dateTwo = new Date(d2);

                const time = Math.abs(dateTwo - dateOne);
                const days = Math.ceil(time / (1000 * 3600 * 24));
                document.getElementById("stay").innerHTML = days;
                document.getElementById("stay2").innerHTML = days;
                document.getElementById("stay3").innerHTML = days;
                document.getElementById("check_in").innerHTML = d1;
        }
        function allHide(){
        
            document.getElementById("bookingmain").style.display = "block";
            document.getElementById('booking').style.display = "none";
            document.getElementById('bookingDeluxe').style.display = "none";
            document.getElementById('bookingSuperDeluxe').style.display = "none";
        }
        function twinHide(){
        
           
                document.getElementById('bookingmain').style.display = "none";
                document.getElementById('bookingDeluxe').style.display = "none";
                document.getElementById('bookingSuperDeluxe').style.display = "none";
                document.getElementById('booking').style.display = "block";
        
           /* }
            else{
                document.getElementById('bookingmain').style.display = "none";
                document.getElementById('bookingDeluxe').style.display = "none";
                document.getElementById('bookingSuperDeluxe').style.display = "none";
                document.getElementById('booking').style.display = "block";
            } */
        }
        function delxHide(){
        
            if(document.getElementById('delx-save').click){
                document.getElementById('bookingmain').style.display = "none";
                document.getElementById('bookingDeluxe').style.display = "block";
                document.getElementById('bookingSuperDeluxe').style.display = "none";
                document.getElementById('booking').style.display = "none";

            }
            else{
                document.getElementById('bookingmain').style.display = "none";
                document.getElementById('bookingDeluxe').style.display = "none";
                document.getElementById('bookingSuperDeluxe').style.display = "none";
                document.getElementById('bookingmain').style.display = "none";
            }
        }
        function superHide(){
        
            if(document.getElementById('super-save').click){
                document.getElementById('bookingmain').style.display = "none";
                document.getElementById('bookingDeluxe').style.display = "none";
                document.getElementById('bookingSuperDeluxe').style.display = "block";
                document.getElementById('booking').style.display = "none";

            }
            else{
                document.getElementById('bookingmain').style.display = "none";
                document.getElementById('bookingDeluxe').style.display = "none";
                document.getElementById('bookingSuperDeluxe').style.display = "none";
                document.getElementById('bookingmain').style.display = "none";
            }
        }

       </script>
    </head>
    <body onload="allHide()">
        <section class="header">
            <nav>
                
                <div class="nav_links">
                    <ul>
                    <a href="index.php"><img src="img/helios2.png"></a>
                        <li class="btn"><a href="book.php">Book</a></li>
                        <li class="btn"><a href="index.php#service">Services</a></li>
                        <li class="btn"><a href="index.php#contact">Contact Us</a></li>
                        <li class="btn"><a href="login.php">Log out</a></li>
                        
                    </ul>
                </div>
            </nav>
        </section>
        
       <script defer src="main.js"></script>

        <section class="about" id="service">
            <h1>Rooms We Offer</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero laborum accusamus fuga velit quod consequuntur assumenda ut maxime optio alias illo tenetur eligendi sit enim repudiandae molestias quaerat, omnis, ad suscipit a! Pariatur id amet, eius voluptas distinctio fugiat sunt adipisci modi nostrum esse eligendi earum dolore nemo ipsa officiis.</p>
                
               <form action="" method="POST">
                        <label for="chkD">Check-in Date</label>
                        <input type="date" name="dateIn" id="check-in-Date" class="chkD">

                        <label for="chkD">Check-out Date</label>
                        <input type="date" name="dateOut" id="check-out-Date" class="chkD">
                        <button type="submit" id="CD" class="btn btn-primary" data-dismiss="modal" onclick="calculateDays()">Check</button><br>
               </form>   
                        

<!-- --------Twin------------------ -->

            <div class="modal fade" id="twin" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Helios Hotel Reservation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="book.php" method="POST"> 
                <form class="form" action="twinProcess.php" method="post">

                <h1>Twin Bedroom</h1>
                <p><input type="tex" value="<?php $TroomPrice = 5000; echo $TroomPrice; ?>" readonly> </p>
                        <div>
                        <label for="name">Name</label>
                        <input id="name1" name="fname" type="text" class="form__input" autofocus  required>            
                        </div>



                        <div>
                        <label for="contact">Contact No.</label>
                        <input id="contact1" name="phone" type="number" class="form__input" autofocus placeholder="Enter a phone number" required>            
                        </div>

                        <div>
                        <label for="chkD">Check-in Date</label><input id="chkd" name="CID" value="
<?php if(isset($_POST["dateIn"])){echo $_POST["dateIn"];}?>
                        
                        "readonly>
                        </div>

                        <div>
                        <label for="chkD">Check-out Date</label><input id="chkd" name="COD" value="
<?php if(isset($_POST["dateOut"])){echo $_POST["dateOut"];}?>
                        
                        "readonly>
                        </div>

                        <div>
    <label for="chkT">Check-in Time</label><input id="chkt" name="CIT" value="
<?php 
    date_default_timezone_set("asia/manila");
    echo date("h:i:sa");
?>" readonly >
                            </div>

                            <div>
                                <label for="stay-days">Days of Stay</label>
                                <!-- <input type="text" id= stay name="DOS"> -->
                                <input type="text" name="DOS" id="stay" class="stay-days" value=" 
<?php 
        if(isset($_POST["dateIn"]) AND isset($_POST["dateOut"])){
        $d1 = $_POST["dateIn"];
        $d2= $_POST["dateOut"];
        $date1 = new DateTime($d1);
        $date2 = new DateTime($d2);
        $interval = $date1->diff($date2);


        
        echo $interval->days;
        }
        ?>" readonly>
                                                        <br><br>
                             </div>



                
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 <button type="submit" class="btn btn-primary" name="send" id="Tsave" onclick="twinHide()">Save changes</button></a>
                </div>
                </form>
                </form>  
                </div>
            </div>
            </div>
            

<!-- --------Deluxe------------------ -->

<div class="modal fade" id="delx" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Helios Hotel Reservation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="book.php" method="POST"> 
                <form class="form" action="deluxeProcess.php" method="post">

                <h1>Deluxe Bedroom</h1>
                <p><input type="tex" value="<?php $DroomPrice = 10000; echo $DroomPrice; ?>" readonly> </p>
                        <div>
                        <label for="name">Name</label>
                        <input id="name1" name="fname" type="text" class="form__input" autofocus  required>            
                        </div>



                        <div>
                        <label for="contact">Contact No.</label>
                        <input id="contact1" name="phone" type="number" class="form__input" autofocus placeholder="Enter a phone number" required>            
                        </div>

                        <div>
                        <label for="chkD">Check-in Date</label><input id="chkd" name="CID" value="
<?php if(isset($_POST["dateIn"])){echo $_POST["dateIn"];}?>
                        
                        "readonly>
                        </div>

                         
                        <div>
                        <label for="chkD">Check-out Date</label><input id="chkd" name="COD" value="
 <?php if(isset($_POST["dateOut"])){echo $_POST["dateOut"];}?>
                        
                        "readonly>
                        </div>

                        <div>
    <label for="chkT">Check-in Time</label><input id="chkt" name="CIT" value="
<?php 
    date_default_timezone_set("asia/manila");
    echo date("h:i:sa");
?>" readonly >
                            </div>

                            <div>
                                <label for="stay-days">Days of Stay</label>
                                <!-- <input type="text" id= stay name="DOS"> -->
                            <input type="text" name="DOS" id="stay" class="stay-days" value=" 
<?php 
        if(isset($_POST["dateIn"]) AND isset($_POST["dateOut"])){
        $d1 = $_POST["dateIn"];
        $d2= $_POST["dateOut"];
        $date1 = new DateTime($d1);
        $date2 = new DateTime($d2);
        $interval = $date1->diff($date2);


        
        echo $interval->days;
        }
        ?>" readonly>
                                                        <br><br>
                             </div>



                
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="deluxeProcess.php"><button type="submit" class="btn btn-primary" name="send" id="delx-save"  >Save changes</button></a>
                </div>
                </form>
                </form>  
                </div>
            </div>
            </div>
            
<!-- --------Super--------- -->


<div class="modal fade" id="super" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Helios Hotel Reservation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="book.php" method="POST"> 
                <form class="form" action="superDeluxeProcess.php" method="post">

                <h1>Super Deluxe Bedroom</h1>
                <p><input type="tex" value="<?php $SDroomPrice = 20000; echo $SDroomPrice; ?>" readonly> </p>
                        <div>
                        <label for="name">Name</label>
                        <input id="name1" name="fname" type="text" class="form__input" autofocus  required>            
                        </div>



                        <div>
                        <label for="contact">Contact No.</label>
                        <input id="contact1" name="phone" type="number" class="form__input" autofocus placeholder="Enter a phone number" required>            
                        </div>

                        
                        <div>
                        <label for="chkD">Check-in Date</label><input id="chkd" name="CID" value="
<?php if(isset($_POST["dateIn"])){echo $_POST["dateIn"];}?>
                        
                        "readonly>
                        </div>

                         
                        <div>
                        <label for="chkD">Check-out Date</label><input id="chkd" name="COD" value="
 <?php if(isset($_POST["dateOut"])){echo $_POST["dateOut"];}?>
                        
                        "readonly>
                        </div>

                        
                        <div>
    <label for="chkT">Check-in Time</label><input id="chkt" name="CIT" value="
<?php 
    date_default_timezone_set("asia/manila");
    echo date("h:i:sa");
?>" readonly >
                            </div>

                            <div>
                                <label for="stay-days">Days of Stay</label>
                                <!-- <input type="text" id= stay name="DOS"> -->
                                <input type="text" name="DOS" id="stay" class="stay-days" value=" 
<?php 
    if(isset($_POST["dateIn"]) AND isset($_POST["dateOut"])){
    $d1 = $_POST["dateIn"];
    $d2= $_POST["dateOut"];
    $date1 = new DateTime($d1);
    $date2 = new DateTime($d2);
    $interval = $date1->diff($date2);


   
    echo $interval->days;
    }
    ?>" readonly>
                                                        <br><br>
                             </div>



                
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="superDeluxeProcess.php"><button type="submit" class="btn btn-primary" name="send" id="super-save">Save changes</button></a>
                </div>
                </form>
                </form>  
                </div>
            </div>
            </div>
            

<!------------------------------ROOMS------------------------------------->

            <div class="row">
                <div class="course_col">
                    <h3>Twin Bed Room</h3>
                    <img id="img1" onmouseover="twinHide()" src="img/twin.jpg" alt="" data-toggle="modal" data-target="#twin" >
                    <div class="layer">
                    </div>
                    <h2>₱5,000</h2>
                    <p>qwertyuioqwertyuioasdfghjklzxcvbnmqqwer
                        tyuioqwertyuioasdfghjklzxcvbnmq</p>
                </div>

                <div class="course_col">
                    <h3>Deluxe</h3>
                    <img id="img2" onmouseover="delxHide()" src="img/3.jpg" alt="" data-toggle="modal" data-target="#delx">
                    <h2>₱10,000</h2>
                    <p>qwertyuioqwertyuioasdfghjklzxcvbnmqqwer
                        tyuioqwertyuioasdfghjklzxcvbnmq</p>
                </div>

                <div class="course_col">
                    <h3>Super Deluxe</h3>
                    <img id="img3" onmouseover="superHide()" src="img/g2.jpg" alt=" " data-toggle="modal" data-target="#super">
                    <h2>₱20,000</h2>
                    <p>qwertyuioqwertyuioasdfghjklzxcvbnmqqwer
                        tyuioqwertyuioasdfghjklzxcvbnmq</p>
                </div>
            </div>
        </section>
<!-----------------compu--------------------->
<section class="main-content" id="bookingmain">
        <h1>Reservation Details</h1>
        <div class="section-container">
            <div class="hero-content">
                <div class="top-content">
                    <img src="img/helios2.png" alt="">
                    <p>View Helios Booking Details</p>
                </div>

                <?php 
                
                ?>
                
        <form action="" method="post">
        <div class="center-content">
            <p id="note">Your reservation is being processed. Thank you dear costumer.</p>
            <p id="name-result">Reserved for: <input type="text" name="Dname"
            value="" readonly> 
            </p>
            <p id="contact-result">Contact No.: <input type="text" name="Dphone"
            value="" readonly> 
            </p>
            <p id="checkinD-result">Check-in Date: <input type="text" name="DCID"
            value="" readonly> 
            </p>
            <p id="checkoutD-result">Check-out Date: <input type="text" name="DCOD"
            value="" readonly> 
            </p>
            <p id="checkinT-result">Check-in Time: <input type="text" name="DCIT"
            value="" readonly> 
            </p>
            <p id="stay-result">Days of Stay:<input type="text" name="DDOS" 
            value="" readonly> 
            </p>
        </div>
        
    </div>
    <div class="additional-content">
        <div class="price-content">
            <h1>Price Summary</h1>
            <p id="price-display"><input type="text" name="tp" value="" readonly> is the total price.</p>
          <!--   <a href="twinProcess.php"><button type="submit" class="btn btn-success" name="send" id="twin-save">Twin Check-in</button></a> 
       <!--   <a href="twinProcess.php"><button type="submit" class="btn btn-primary" name="send" id="twin-save">Deluxe Check-in</button></a> -->
              <!--<a href="superDeluxeProcess.php"><button type="submit" class="btn btn-Secondary" name="send" id="twin-save">Super Deluxe Check-in</button></a> -->
        </div>
        </form>

                
                <div class="hotel-info-content">
                   <!--- <img src="img/bg.jpg" alt="">--->
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam quos consequatur nisi nihil, velit provident facere. Commodi vel sunt voluptatibus libero hic distinctio expedita, magnam ad at soluta, odit consequuntur.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="main-content" id="booking">
        <h1>Reservation Details</h1>
        <div class="section-container">
            <div class="hero-content">
                <div class="top-content">
                    <img src="img/helios2.png" alt="">
                    <p>View Helios Booking Details</p>
                </div>

                <?php 
                
                ?>
                
        <form action="twinProcess.php" method="post">
        <div class="center-content">
            <p id="note">Your reservation is being processed. Thank you dear costumer.</p>
            <p id="name-result">Reserved for: <input type="text" name="Dname"
            value="<?php if(isset($_POST["fname"])){echo $_POST["fname"];}?>" readonly> 
            </p>
            <p id="contact-result">Contact No.: <input type="text" name="Dphone"
            value="<?php if(isset($_POST["phone"])){echo $_POST["phone"];}?>" readonly> 
            </p>
            <p id="checkinD-result">Check-in Date: <input type="text" name="DCID"
            value="<?php if(isset($_POST["CID"])){echo $_POST["CID"];}?>" readonly> 
            </p>
            <p id="checkoutD-result">Check-out Date: <input type="text" name="DCOD"
            value="<?php if(isset($_POST["COD"])){echo $_POST["COD"];}?>" readonly> 
            </p>
            <p id="checkinT-result">Check-in Time: <input type="text" name="DCIT"
            value="<?php if(isset($_POST["CIT"])){echo $_POST["CIT"];}?>" readonly> 
            </p>
            <p id="stay-result">Days of Stay:<input type="text" name="DDOS" 
            value="<?php if(isset($_POST["DOS"])){echo $_POST["DOS"];}?>" readonly> 
            </p>
        </div>
        
    </div>
    <div class="additional-content">
        <div class="price-content">
            <h1>Price Summary</h1>
            <p id="price-display"><input type="text" name="tp" value="
            <?php 
            if(isset($_POST["DOS"])){
                $day = $_POST["DOS"];
                

                $tp = $day * $TroomPrice;
                    echo $tp;
            }
                ?>


            " readonly> is the total price.</p>
             <a href="twinProcess.php"><button type="submit" class="btn btn-success" name="send" id="twin-save">Twin Check-in</button></a> 
       <!--   <a href="twinProcess.php"><button type="submit" class="btn btn-primary" name="send" id="twin-save">Deluxe Check-in</button></a> -->
              <!--<a href="superDeluxeProcess.php"><button type="submit" class="btn btn-Secondary" name="send" id="twin-save">Super Deluxe Check-in</button></a> -->
        </div>
        </form>

                
                <div class="hotel-info-content">
                   <!--- <img src="img/bg.jpg" alt="">--->
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam quos consequatur nisi nihil, velit provident facere. Commodi vel sunt voluptatibus libero hic distinctio expedita, magnam ad at soluta, odit consequuntur.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="main-content" id="bookingDeluxe">
        <h1>Reservation Details</h1>
        <div class="section-container">
            <div class="hero-content">
                <div class="top-content">
                    <img src="img/helios2.png" alt="">
                    <p>View Helios Booking Details</p>
                </div>

                <?php 
                
                ?>
                
        <form action="deluxeProcess.php" method="post">
        <div class="center-content">
            <p id="note">Your reservation is being processed. Thank you dear costumer.</p>
            <p id="name-result">Reserved for: <input type="text" name="Dname"
            value="<?php if(isset($_POST["fname"])){echo $_POST["fname"];}?>" readonly> 
            </p>
            <p id="contact-result">Contact No.: <input type="text" name="Dphone"
            value="<?php if(isset($_POST["phone"])){echo $_POST["phone"];}?>" readonly> 
            </p>
            <p id="checkinD-result">Check-in Date: <input type="text" name="DCID"
            value="<?php if(isset($_POST["CID"])){echo $_POST["CID"];}?>" readonly> 
            </p>
            <p id="checkoutD-result">Check-out Date: <input type="text" name="DCOD"
            value="<?php if(isset($_POST["COD"])){echo $_POST["COD"];}?>" readonly> 
            </p>
            <p id="checkinT-result">Check-in Time: <input type="text" name="DCIT"
            value="<?php if(isset($_POST["CIT"])){echo $_POST["CIT"];}?>" readonly> 
            </p>
            <p id="stay-result">Days of Stay:<input type="text" name="DDOS" 
            value="<?php if(isset($_POST["DOS"])){echo $_POST["DOS"];}?>" readonly> 
            </p>
        </div>
        
    </div>
    <div class="additional-content">
        <div class="price-content">
            <h1>Price Summary</h1>
            <p id="price-display"><input type="text" name="tp" value="
            <?php 
            if(isset($_POST["DOS"])){
                $day = $_POST["DOS"];
                

                $tp = $day * $DroomPrice;
                    echo $tp;
            }
                ?>


            " readonly> is the total price.</p>
          <!--      <a href="twinProcess.php"><button type="submit" class="btn btn-success" name="send" id="twin-save">Twin Check-in</button></a> -->
       <a href="twinProcess.php"><button type="submit" class="btn btn-primary" name="send" id="twin-save">Deluxe Check-in</button></a> 
              <!--<a href="superDeluxeProcess.php"><button type="submit" class="btn btn-Secondary" name="send" id="twin-save">Super Deluxe Check-in</button></a> -->
        </div>
        </form>

                
                <div class="hotel-info-content">
                   <!--- <img src="img/bg.jpg" alt="">--->
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam quos consequatur nisi nihil, velit provident facere. Commodi vel sunt voluptatibus libero hic distinctio expedita, magnam ad at soluta, odit consequuntur.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="main-content" id="bookingSuperDeluxe">
        <h1>Reservation Details</h1>
        <div class="section-container">
            <div class="hero-content">
                <div class="top-content">
                    <img src="img/helios2.png" alt="">
                    <p>View Helios Booking Details</p>
                </div>

                <?php 
                
                ?>
                
        <form action="superDeluxeProcess.php" method="post">
        <div class="center-content">
            <p id="note">Your reservation is being processed. Thank you dear costumer.</p>
            <p id="name-result">Reserved for: <input type="text" name="Dname"
            value="<?php if(isset($_POST["fname"])){echo $_POST["fname"];}?>" readonly> 
            </p>
            <p id="contact-result">Contact No.: <input type="text" name="Dphone"
            value="<?php if(isset($_POST["phone"])){echo $_POST["phone"];}?>" readonly> 
            </p>
            <p id="checkinD-result">Check-in Date: <input type="text" name="DCID"
            value="<?php if(isset($_POST["CID"])){echo $_POST["CID"];}?>" readonly> 
            </p>
            <p id="checkoutD-result">Check-out Date: <input type="text" name="DCOD"
            value="<?php if(isset($_POST["COD"])){echo $_POST["COD"];}?>" readonly> 
            </p>
            <p id="checkinT-result">Check-in Time: <input type="text" name="DCIT"
            value="<?php if(isset($_POST["CIT"])){echo $_POST["CIT"];}?>" readonly> 
            </p>
            <p id="stay-result">Days of Stay:<input type="text" name="DDOS" 
            value="<?php if(isset($_POST["DOS"])){echo $_POST["DOS"];}?>" readonly> 
            </p>
        </div>
        
    </div>
    <div class="additional-content">
        <div class="price-content">
            <h1>Price Summary</h1>
            <p id="price-display"><input type="text" name="tp" value="
            <?php 
            if(isset($_POST["DOS"])){
                $day = $_POST["DOS"];
                

                $tp = $day * $SDroomPrice;
                    echo $tp;
            }
                ?>


            " readonly> is the total price.</p>
           <!--    <a href="twinProcess.php"><button type="submit" class="btn btn-success" name="send" id="twin-save">Twin Check-in</button></a> 
      <!--  <a href="twinProcess.php"><button type="submit" class="btn btn-primary" name="send" id="twin-save">Deluxe Check-in</button></a> --> 
              <a href="superDeluxeProcess.php"><button type="submit" class="btn btn-Secondary" name="send" id="twin-save">Super Deluxe Check-in</button></a> 
        </div>
        </form>

                
                <div class="hotel-info-content">
                   <!--- <img src="img/bg.jpg" alt="">--->
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam quos consequatur nisi nihil, velit provident facere. Commodi vel sunt voluptatibus libero hic distinctio expedita, magnam ad at soluta, odit consequuntur.</p>
                </div>
            </div>
        </div>
    </section>

         <!---------- Footer-------------->

         <section class="footer">

            <h4>Contact Us</h4>
            <p></p>
            <div class="icons">
                <a href="https://www.facebook.com/DLuvsss"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com/dl.vsls/"><i class="fa-brands fa-instagram"></i></a>
                <i class="fa-brands fa-twitter"></i>
                
            </div>
            <p class="D_">
                Helios Hotel
            </p>
         </section>
    </body>
</html>

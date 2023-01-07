<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="style.css">
          
        <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="jquery-3.6.1.js"></script>
        <script>
            var i = 0;
            $(document).ready(function(){
                $('.slidertitle, #slider img').hide();
                showNextImage();
                setInterval('showNextImage()', 3000);
            });

            function showNextImage(){
                i++;
                $('#sliderImage' + i ).appendTo('#slider').fadeIn(1100).delay(1100).fadeOut(1100);
                $('#title' + i).appendTo('#slider').fadeIn(1100).delay(1100).fadeOut(1100);
                if(i==3) {i=0;}
            }
        </script>
    </head>
    <body>
        <section class="header">
            <nav>
                <a href="index.php"><img src="img/helios2.png"></a>
                <div class="nav_links">
                    <ul>
                        <li class="btn"><a href="book.php">Book</a></li>
                        <li class="btn"><a href="#service">Services</a></li>
                        <li class="btn"><a href="#contact">Contact Us</a></li>
                        <li class="btn"><a href="login.php">Log out</a></li>
                        
                    </ul>
                </div>
            </nav>
        </section>
            <section>
            <div id="slider">
                
                <img src="img/firstBanner.jpg"  id="sliderImage1">
                   <div class="slidertitle" id="title1"></div>

                <img src="img/bn2.jpg"  id="sliderImage2">
                   <div class="slidertitle" id="title2"></div>

                <img src="img/bn3.jpg"  id="sliderImage3">
                   <div class="slidertitle" id="title3"></div>
                
            </div>
        </section>
        
        <section class="home">
            <div class="info">
                <h1>Helios Hotel</h1>
                <p>Helios Hotel, marketed with lowercase styling as helios, is a Filipino technology company specializing in internet-related services 
                    and products in the hotel, lodging and metasearch fields. The company is headquartered in Philippines.</p>
                <br><br>
                <a href="#contact" class="hero_btn">Contact Us</a>
            </div>
        </section>
        <hr>

        <section class="about" id="service">
            <h1>Service We Offer</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero laborum accusamus fuga velit quod consequuntur assumenda ut maxime optio alias illo tenetur eligendi sit enim repudiandae molestias quaerat, omnis, ad suscipit a! Pariatur id amet, eius voluptas distinctio fugiat sunt adipisci modi nostrum esse eligendi earum dolore nemo ipsa officiis.</p>

            <div class="row">
                <div class="course_col">
                    <h3>Twin Bed Room</h3>
                    <a href="book.php">
                    <img src="img/twin.jpg" alt="">
                    </a>
                    <h2>₱5,000</h2>
                    <p>qwertyuioqwertyuioasdfghjklzxcvbnmqqwer
                        tyuioqwertyuioasdfghjklzxcvbnmq</p>
                </div>

                <div class="course_col">
                    <h3>Deluxe</h3>
                    <a href="book.php">
                    <img src="img/3.jpg" alt="">
                    </a>
                    <h2>₱10,000</h2>
                    <p>qwertyuioqwertyuioasdfghjklzxcvbnmqqwer
                        tyuioqwertyuioasdfghjklzxcvbnmq</p>
                </div>

                <div class="course_col">
                    <h3>Super Deluxe</h3>
                    <a href="book.php">
                    <img src="img/g2.jpg" alt="">
                    </a>
                    <h2>₱20,000</h2>
                    <p>qwertyuioqwertyuioasdfghjklzxcvbnmqqwer
                        tyuioqwertyuioasdfghjklzxcvbnmq</p>
                </div>
            </div>
        </section>

        <hr>
        
        <section class="location" id="about">
            <h1>Visit Us</h1>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44320.603946637406!2d121.33204826324189!3d14.584174169011801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x50cfb45880cd5ceb!2zMTTCsDM0JzQzLjMiTiAxMjHCsDIwJzI3LjQiRQ!5e0!3m2!1sen!2sph!4v1662963586435!5m2!1sen!2sph"
             width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>

        <section class="contact_us" id="contact">
            <div class="row">
                <div class="contact_col">
                    <div>
                        <i class="fa-solid fa-home"></i>
                        <span>
                            <h5>Tanay, Rizal</h5>
                            <p>Lambingan Hills</p>
                        </span>
                    </div>
                
                <div>
                    <i class="fa-solid fa-phone"></i>
                    <span>
                        <h5>099969699</h5>
                        <p>Everyday, 7AM to 5PM</p>
                    </span>
                </div>
            
                <div>
                   <i class="fa-solid fa-envelope"></i>
                   <span>
                       <h5>dldoesvisuals@gmail.com</h5>
                       <p>Email us your query</p>
                </span>
                </div>
             </div>
             
                <div class="contact_col">

                <form action="contactForm.php" method="post">
                    <input type="text" name="name" placeholder="Enter your name" required>
                    <input type="email" name="email" placeholder="Enter email address" required>
                    <input type="text" name="subject" placeholder="Enter Your subject" required>
                    <textarea rows="8" name="message" placeholder="Message" required></textarea>
                    <button type="submit" class="hero_btn">Send Message</button>
                </form>

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
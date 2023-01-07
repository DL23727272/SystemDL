<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Sign up</title>
    <script  src="signupProcess.php"></script>
    <link rel="stylesheet" href="loginCSS.css">
    <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
</head>
<body>
    
     <section class="header">
    <nav>
        
        <h1 class="ml5">
            <span class="text-wrapper">
              <span class="line line1"></span>
              <span class="letters letters-left"><img src="img/helios2.png" alt=""></span>
              <span class="letters letters-right">Hotel</span>
              <span class="line line2"></span>
            </span>
          </h1>
          

    </nav>

    <div class="container">
        <form class="form" id="login" action="signupProcess.php" method="post">

                <h2 class="form__title">Please Sign up to Login</h2>

           <div class="form__input-group">
                <div class="form__input-error-message" id="emailError"></div>
               
                <input id="email" name="email" type="email" class="form__input" autofocus placeholder="Enter a Email" required>            
            </div> 
      
            <div class="form__input-group">
                <div class="form__input-error-message" id="nameError"></div>
              
                <input id="name" name="username" type="text" class="form__input" autofocus placeholder="Enter a Username" required>            
            </div>

            <div class="form__input-group">
                <div class="form__input-error-message" id="passError"></div>
             
                <input id="pass" name="password" type="password" class="form__input" autofocus placeholder="Enter a 8 character Password" required>
            </div>
            
            <button class="form__button" type="submit" id="evil-button" ><i class="fa-solid fa-right-to-bracket"></i>  Sign in</button>
            
        </form>

    </div>
</section>

<script type="text/javascript" src="js/script.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

        <script>
                        anime.timeline({loop: true})
            .add({
                targets: '.ml5 .line',
                opacity: [0.5,1],
                scaleX: [0, 1],
                easing: "easeInOutExpo",
                duration: 700
            }).add({
                targets: '.ml5 .line',
                duration: 600,
                easing: "easeOutExpo",
                translateY: (el, i) => (-0.625 + 0.625*2*i) + "em"
            }).add({
                targets: '.ml5 .ampersand',
                opacity: [0,1],
                scaleY: [0.5, 1],
                easing: "easeOutExpo",
                duration: 600,
                offset: '-=600'
            }).add({
                targets: '.ml5 .letters-left',
                opacity: [0,1],
                translateX: ["0.5em", 0],
                easing: "easeOutExpo",
                duration: 600,
                offset: '-=300'
            }).add({
                targets: '.ml5 .letters-right',
                opacity: [0,1],
                translateX: ["-0.5em", 0],
                easing: "easeOutExpo",
                duration: 600,
                offset: '-=600'
            }).add({
                targets: '.ml5',
                opacity: 0,
                duration: 1000,
                easing: "easeOutExpo",
                delay: 1000
            });
        </script>
        
</body>
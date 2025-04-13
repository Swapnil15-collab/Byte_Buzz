<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education website</title>

    <!-- icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="contact.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
   <nav>
    <div class="container nav__container">
        <a href="index.php"><h4>ByteBuzz</h4></a>
        <ul class="nav__menu">
            
            <li><a href="index.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="courses.php">COURSES</a></li>
            <li><a href="contact.php">CONTACT</a></li>
        

        </ul>
<button id="open-menu-btn"><i class="uil uil-bars" ></i> </button>
<button id="close-menu-btn"><i class="uil uil-multiply" ></i></button>
    
    </div>
</nav>
  <section class="contact" >
    <div class="container contact__container" >
        <aside class="contact__aside">
            <div class="aside__image">
                <img src="contact.jpg">
            </div>
            <h2>Contact Us</h2>
            <p>
                
                Simply fill out the form , and I’ll get back to you as soon as possible. Let’s connect and create something amazing together!</p>
            <ul>
                <li>
                    <i class="uil uil-phone-times"></i>
                    <h5>9322932453</h5>
                </li>

                <li>
                    <i class="uil uil-envelope"></i>
                    <h5>swapnilpanchadane237@gmail.com</h5>
                </li>

                <li>
                    <i class="uil uil-location-point"></i>
                    <h5>jalna,Maharashtra</h5>
                </li>
            </ul>
            <ul class="contact__socials">
                <li><a href="https://www.facebook.com/swapnil.panchadane.7"><i class="uil uil-facebook-f"></i></a></li>
                <li><a href="https://www.instagram.com/panchdane_swapnil_15/"><i class="uil uil-instagram"></i></a></li>
                <li><a href="https://www.linkedin.com/in/swapnil-panchdane-b51b9924b/"><i class="uil uil-linkedin-alt"></i></a></li>
            </ul>
        </aside>

        <form class="contact__form" action="https://formspree.io/f/meoqypdr"class="contact" method="POST">
            <div class="form__name">
                <input type="text" name="First name" placeholder="first name" required>
                <input type="text" name="Last name" placeholder="Last name" required>
            </div>
            <input type="email" name="email address" placeholder="your email address" required>
            <textarea name="message" rows="7" placeholder="message" required></textarea>
            <button type="submit" class="get-started-btn">send message</button>
        </form>
    </div>

  </section>





   <footer>
    <div class="container footer__container">
        <div class="footer__1">
            <a href="index.html" class="footer__logo"><h4>ByteBuzz</h4></a>
            <P> "Bringing education closer to you with carefully curated resources for every year of your computer science journey."</P>
        </div>
        <div class="footer__2">
            <h4>Permalinks</h4>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="courses.php">COURSES</a></li>
                <li><a href="prep.php">INTERVIEW PREPARATION</a></li>
               
            </ul>
        </div>
      <div class="FOOTER__3">
    <H4>Privacy</H4>    
    <ul>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms and conditions</a></li>
        <li><a href="#">Refund Policy</a></li>
    </ul>
    </div>
    <div class="footer__4">
        <h4>contact us</h4>
        <div>
            <p> 9322932453</p>
        <p>swapnilpanchadane237@gmail.com</p>
        </div>
        
    
    <ul class="footer__socials">
        <li>
            <a href="#"><i class="uil uil-facebook-f"></i></a>
        </li>
        <li>
            <a href="#"><i class="uil uil-instagram-alt"></i></a>
        </li>
        <li>
            <a href="#"><i class="uil uil-twitter"></i></a>
        </li>
        <li>
            <a href="#"><i class="uil uil-linkedin-alt"></i></a>
        </li>
    </ul>
    
<div class="footer__copyright">
    <small>Copyright &copy : Bytebuzz</small>
</div>

    </div>
</div>
</footer>
<script src="main.js"></script>
</body>
</html>
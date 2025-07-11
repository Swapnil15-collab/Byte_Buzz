
<?php
session_start();

// Check if the user is NOT logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page
    header("Location: splogin.html");
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education website</title>

    <!-- icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="courses.css">
    



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">




    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>

<nav>
    <div class="container nav__container">
        <a href="index.php"><h4>ByteBuzz</h4></a>
<!--updated-->

</form>


        <ul class="nav__menu">
            
            <li><a href="index.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="courses.php">COURSES</a></li>
            <li><a href="prep.php">INTERVIEW PREPARATION</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <li><a href="ssplogin.php">LOGIN </a></li>
           
        </ul>
<button id="open-menu-btn"><i class="uil uil-bars" ></i> </button>
<button id="close-menu-btn"><i class="uil uil-multiply" ></i></button>
<form class="search-bar" id="search-form">
    <input type="text" id="search-input" placeholder="Search courses..." required>
    <button type="submit"><i class="uil uil-search"></i></button>

    </div>
   </nav> 






   <?php session_start(); ?>







 <section class="teams">
   
    
      <h2> Our Cources </h2>
       
    





    <div class="container team__containers">
        <article class="team__members">
            <div class="team__member-images">
                <img src="c.jpg">
            </div>
            <div class="team__member-infos">
                <h4>C</h4>


                <?php if (isset($_SESSION['user_id'])): ?>


                <a href="c.php" class="cbutton">Learn more</a>
                <a href="newcmcq.html" class="cbutton">Mcq test</a>
           
           
                <?php else: ?>
                    <p><a href="login.html" class="cbutton">Login</a> to access</p>
                <?php endif; ?>
           
           
           
           
            </div>


        </article>

        <article class="team__members">
            <div class="team__member-images">
                <img src="c++.jpg">
            </div>
            <div class="team__member-infos">
                <h4>C++</h4>
                <a href="newcpp.php" class="cbutton">Learn more</a>
                <a href="newcppmcq.html" class="cbutton">Mcq test</a>
            </div>


        </article>


        <article class="team__members">
            <div class="team__member-images">
                <img src="java.jpg">
            </div>
            <div class="team__member-infos">
                <h4>JAVA</h4>
                <a href="courses.html" class="cbutton">Learn more</a>
                <a href="javamcq.html" class="cbutton">Mcq test</a>
            </div>


        </article>


        <article class="team__members">
            <div class="team__member-images">
                <img src="php.jpg">
            </div>
            <div class="team__member-infos">
                <h4>PHP</h4>
                <a href="courses.html" class="cbutton">Learn more</a>
                <a href="phpmcq.html" class="cbutton">Mcq test</a>
            </div>


        </article>


        <article class="team__members">
            <div class="team__member-images">
                <img src="python.jpg">
            </div>
            <div class="team__member-infos">
                <h4>PYTHON</h4>
                <a href="courses.html" class="cbutton">Learn more</a>
                <a href="pythonmcq.html" class="cbutton">Mcq test</a>
            </div>


        </article>

        <article class="team__members">
            <div class="team__member-images">
                <img src="html.jpg">
            </div>
            <div class="team__member-infos">
                <h4>HTML</h4>
                
                <a href="html.html" class="cbutton">Learn more</a>
                <a href="htmlmcq.html" class="cbutton">Mcq test</a>
                
                
                
            </div>


        </article>

        <article class="team__members">
            <div class="team__member-images">
                <img src="css.jpg">
            </div>
            <div class="team__member-infos">
                <h4>CSS</h4>
                <a href="courses.html" class="cbutton">Learn more</a>
                <a href="cssmcq.html" class="cbutton">Mcq test</a>
            </div>


        </article>

        <article class="team__members">
            <div class="team__member-images">
                <img src="javasc.jpg">
            </div>
            <div class="team__member-infos">
                <h4>JAVASCRIPT</h4>
                <a href="courses.html" class="cbutton">Learn more</a>
                <a href="javasmcq.html" class="cbutton">Mcq test</a>
            </div>


        </article>



        <article class="team__members">
            <div class="team__member-images">
                <img src="sql.webp">
            </div>
            <div class="team__member-infos">
                <h4>SQL</h4>
                <a href="courses.html" class="cbutton">Learn more</a>
                <a href="javasmcq.html" class="cbutton">Mcq test</a>
            </div>


        </article>

        <article class="team__members">
            <div class="team__member-images">
                <img src="dbms.jpeg">
            </div>
            <div class="team__member-infos">
                <h4>DBMS</h4>
                <a href="courses.html" class="cbutton">Learn more</a>
                <a href="javasmcq.html" class="cbutton">Mcq test</a>
            </div>
        </article>
            <article class="team__members">
                <div class="team__member-images">
                    <img src="iot.webp">
                </div>
                <div class="team__member-infos">
                    <h4>IOT</h4>
                    <a href="iot.html" class="cbutton">Learn more</a>
                    <a href="javasmcq.html" class="cbutton">Mcq test</a>
                </div>
    
    
            </article>
            <article class="team__members">
                <div class="team__member-images">
                    <img src="nlp.webp">
                </div>
                <div class="team__member-infos">
                    <h4>NLP</h4>
                    <a href="courses.html" class="cbutton">Learn more</a>
                    <a href="javasmcq.html" class="cbutton">Mcq test</a>
                </div>
    
    
            </article>
    

            <article class="team__members">
            <div class="team__member-images">
                <img src="MP.jpeg">
            </div>
            <div class="team__member-infos">
                <h4>MICROPROCESSOR</h4>
                <a href="courses.html" class="cbutton">Learn more</a>
                <a href="javasmcq.html" class="cbutton">Mcq test</a>
            </div>
        </article>
        
        <article class="team__members">
            <div class="team__member-images">
                <img src="os.webp">
            </div>
            <div class="team__member-infos">
                <h4>OPERATING SYSTEM</h4>
                <a href="courses.html" class="cbutton">Learn more</a>
                <a href="javasmcq.html" class="cbutton">Mcq test</a>
            </div>


        </article>
        <article class="team__members">
            <div class="team__member-images">
                <img src="cn.webp">
            </div>
            <div class="team__member-infos">
                <h4>COMPUTER NETWORKS</h4>
                <a href="courses.html" class="cbutton">Learn more</a>
                <a href="javasmcq.html" class="cbutton">Mcq test</a>
            </div>


        </article>

        <article class="team__members">
            <div class="team__member-images">
                <img src="ds.webp">
            </div>
            <div class="team__member-infos">
                <h4>DATA SCIENCE</h4>
                <a href="courses.html" class="cbutton">Learn more</a>
                <a href="javasmcq.html" class="cbutton">Mcq test</a>
            </div>


        </article>

    </div>
   </section>














<footer >
    <div class="container footer__container">
        <div class="footer__1">
            <a href="index.html" class="footer__logo"><h4>ByteBuzz</h4></a>
            <P>"Bringing education closer to you with carefully curated resources for every year of your computer science journey."</P>
        </div>
        <div class="footer__2">
            <h4>Permalinks</h4>
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="courses.html">COURSES</a></li>
                <li><a href="contact.html">CONTACT</a></li>
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
            <p> +01 234 567 8910</p>
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
<script>

    document.getElementById("search-form").addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent default form submission

        const query = document.getElementById("search-input").value.toLowerCase().trim(); // Get user input
        const courses = document.querySelectorAll(".team__members"); // Get all course elements
        const container = document.querySelector(".team__containers");
        let found = false; // Track if any course matches

        // Clear any previous results and reset styles
        container.style.display = "flex";
        container.style.flexWrap = "wrap";
        container.style.justifyContent = "center";
        container.style.gap = "20px";

        courses.forEach(course => {
            const courseName = course.querySelector("h4").textContent.toLowerCase(); // Get course name
            if (courseName.includes(query)) {
                course.style.display = "block"; // Show matching courses
                found = true;
            } else {
                course.style.display = "none"; // Hide non-matching courses
            }
        });

        // If no matches found
        const noResultsMessage = document.getElementById("no-results");
        if (!noResultsMessage) {
            const message = document.createElement("p");
            message.id = "no-results";
            message.style.textAlign = "center";
            message.style.color = "red";
            message.textContent = "No courses found!";
            container.parentNode.appendChild(message);
        
        }

        document.getElementById("no-results").style.display = found ? "none" : "block";

        // Center the matching courses
        if (found) {
            container.style.display = "flex";
            container.style.flexDirection = "column";
            container.style.alignItems = "center";
        }
    });
</script>


    
<script src="main.js"></script>
</body>
</html>
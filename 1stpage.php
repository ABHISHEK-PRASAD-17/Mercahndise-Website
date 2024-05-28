<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="1stpage.css">


</head>

<body>
    <header>
        <div class="navbar">
            <div class="logo">
                <img src="logom.png" alt="">

            </div>

            <ul class="links">
                <li><a href="1stpage.php" target="_blank">HOME</a></li>
                <li><a href="womens.php" target="_blank">WOMENS</a></li>
                <li><a href="kids.php" target="_blank">KIDS</a></li>
                <li><a href="mens.php" target="_blank">MENS</a></li>
                <li><a href="accesories.php" target="_blank">OTHERS</a></li>
                <input type="search" name="" id="" placeholder="Search your Merch" class="search">
                <li><a href="login.php" target="_blank">LOGIN</a></li>
                <li><a href="mycart1.php" target="_blank">CART</a></li>
            </ul>


        </div>
    </header>
    <main class="main">


        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="1stpic.jpg" style="width:100%">
                <div class="text">
                    <h1>Best Merch Available</h1>
                </div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="mensbg1.jpg" style="width:100%">
                <div class="text">
                    <h1>Mens</h1>
                </div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="womensbg1.jpg" style="width:100%">
                <div class="text">
                    <h1>womens</h1>
                </div>
            </div>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
        <br>

        <div class="heading">
            <h1>COLLECTIONS : </h1>
            <br>

            <h2>"Style Your Story: Elevate Every Moment!"</h2>
            <br>
            <br>
            <div class="row">
                <div class="column">
                    <a href="mens.php" target="_blank">

                        <img src="mensoversize.jpg" alt="" width="100%">
                        
                    </a>
                </div>
                <div class="column">
                    <a href="womens.php" target="_blank">

                        <img src="girlsanime.jpg" alt="" width="100%">
                    </a>
                </div>
                <div class="column">
                    <a href="kids.html" target="_blank">

                        <img src="kidsanime.jpg" alt="" width="100%">
                    </a>
                </div>
            </div>
            <br>
            <br>
            <h1>FUNCO POPS : </h1>
            <br>
            <div class="row1">
                <a href="accesories.html" target="_blank">

                    <img src="funkodc.jpg" alt="">
                </a>
            </div>
            <br>
            <br>
            <h1>SHOP BY FANDOM : </h1>
            <br>
            <div class="row2">
                <a href="accesories.php" target="_blank">

                    <div class="column2">
                        <img src="marvel3.png" alt="" width="100%">
                    </div>
                    <div class="column2">
                        <img src="dc2.png" alt="" width="100%">
                    </div>
                    <div class="column2">
                        <img src="disney2.jpg" alt="" width="100%">
                    </div>
                </a>
            </div>
            <br>
            <br>
            <h1>VARIOUS OTHER GODDIES : </h1>
            <br>
            <h2><strong>MANGAS ,COMICS AND NOVELS : </strong></h2>
            <div class="row3">
                <a href="accesories.php" target="_blank">

                    <div class="column3">
                        <img src="weely2.jpg" alt="" width="100%">
                    </div>
                    <div class="column3">
                        <img src="comiccc.jpg" alt="" width="100%">
                    </div>
                    <div class="column3">
                        <img src="harry.jpg" alt="" width="100%">
                    </div>
                </a>
            </div>
            <br>
            <br>


        </div>


    </main>
    <footer class="footer">
        <div class="container">
            <h1>BRAND</h1>
            <ul class="menu">
                <li><a href="1stpage.php">HOME</a></li>
                <li><a href="feedback.php">FEEDBACK</a></li>
                <li><a href="help.php">HELP</a></li>
                <li><a href="contactus.php">CONTACT</a></li>

            </ul>
            <ul class="media-icons">
                <li><a href="facebook.com">
                        <ion-icon name="logo-facebook"></ion-icon>
                        <i class="facebook"></i>
                    </a></li>
                <li><a href="whatsapp.com">
                        <ion-icon name="logo-whatsapp"></ion-icon>


                        <i class="whatsapp"></i>
                    </a></li>
                <li><a href="instagram.com">
                        <ion-icon name="logo-instagram"></ion-icon>
                        <i class="instagram"></i>
                    </a></li>
                <li><a href="facebook.com">
                        <ion-icon name="logo-linkedin"></ion-icon>
                        <i class="linkedin"></i>
                    </a></li>
            </ul>

        </div>

    </footer>

    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds slideshoe ka hai
        }
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
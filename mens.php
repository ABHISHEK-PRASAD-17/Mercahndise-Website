<?php
// session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENS</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Times New Roman', Times, serif;

        }

        body {
            height: 100vh;
            background-color: black;
            background-size: cover;
            background-position: position;

        }

        li {
            list-style: none;
        }

        a {
            text-decoration: none;
            color: tomato;
            font-size: 1rem;
        }

        a:hover {
            color: grey;

        }

        .links {
            color: tomato;

        }

        .links li:hover {
            color: grey;
        }

        header {
            position: relative;
            padding: 0 2rem;

        }

        .navbar {
            width: 100%;
            height: 60px;
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;

        }

        .navbar .links {
            display: flex;
            gap: 2rem;

        }

        .search {
            border-radius: 4px;
            width: 150px;
            background-color: white;
        }

        .logo img {
            height: 45px;
            width: 35px;
        }

        .container {
            width: 100%;
            height: auto;
        }

        img {
            width: 100%;
            height: auto;
        }

        .container h1 {
            color: tomato;
            text-align: center;
            background-color: grey;
        }

        .container h1:hover {
            color: white;

        }

        .container h2 {
            color: white;
            text-align: center;
            background-color: tomato;
        }

        .column {
            float: left;
            width: 33.33%;
            padding: 5px;
            transition: 1s;
            /* transition bas photo kitna der tak hoga vahi hota hai */

        }

        /* Clear floats after image containers */
        .row::after {
            content: "";
            clear: both;
            display: table;
        }


        .never {
            border-style: inset;
            border-color: grey;
        }

        .never h1 {
            color: grey;
            background-color: black;
            text-align: center;




        }

        .never h3 {
            background-color: black;
            color: tomato;
            text-align: center;
        }

        .j {
            height: 35rem;
        }

        .cart {
            color: tomato;
            padding: 5px;
            border-radius: 10px;
            padding-left: 10px;
            padding-right: 10px;
        }

        /*  fotter css*/
        .footer {
            text-align: center;
            background: grey;

        }

        .footer .menu li {
            display: inline-block;
            margin: 0.7em;
            text-align: center;

        }

        .footer p {
            margin: 0 auto;
        }

        .footer .media-icons li {
            margin: 1.5em 0;
            text-align: center;
            font-size: large;
            display: inline-block;
            padding: 4px;
            size: 20px;
            background-color: black;
            gap: 10px;

        }

        .Brand {
            background: grey;
            color: black;
        }

        .menu {
            background: black;
        }

        .media-icons {
            color: black;

        }
    </style>
</head>

<body>
    <header>
        <div class="navbar">
            <div class="logo">
                <img src="logom.png" alt="">

            </div>

            <ul class="links">
                <li><a href="1stpage.php">HOME</a></li>
                <li><a href="womens.php">WOMENS</a></li>
                <li><a href="kids.php">KIDS</a></li>
                <li><a href="mens.php">MENS</a></li>
                <li><a href="accesories.php">OTHERS</a></li>
                <input type="search" name="" id="" placeholder="Search your Merch" class="search">
                <li><a href="login.php">LOGIN</a></li>
                <li><a href="mycart1.php" target="_blank">CART</a></li>
            </ul>


        </div>
    </header>
    <main class="container">
        <div class="img">
            <img src="mensbg1.jpg" alt="">

        </div>

        <div class="never">

            <h1>NEVER PAY</h1><br>
            <h3>MORE AGAIN</h3>
        </div>

        <main class='container'>
            <div class='row'>
                <?php
                include 'config.php';
                $sql = "SELECT * FROM `products` where `category`='men'";
                $result = mysqli_query($conn, $sql);
                $resultCount = mysqli_num_rows($result);
                if ($resultCount > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        // $img = $row["img_loc"];
                        $name = $row["product_name"];
                        $price = $row["product_price"];
                        $desc = $row["product_description"];
                        $image = $row["product_image"];
                        // echo "$name";
                        echo "

                                <div class='column'>
                                    <a href='mens.html' target='_blank'>
                                        <form action='managecarting.php' method='post'>
                                            <div>
                                                <img src='$image' alt='' width='100%' class='j'>
                                                <h3>$desc</h3>
                                                <p>$name</p>
                                                <p>$price</p>
                                                
                                                <input type='submit' value='cart' name='ADD_TO_CART' class='cart'>
                                                <input type='hidden' name='Item_Name' value='$name'>
                                                <input type='hidden' name='Price' value='$price'>
                                            </div>
                                        </form>
                                    </a>
                                </div>
                        ";
                    }
                } else {
                    echo "<h1> There is no products related to this category! Sorry for the inconvenience!!!";
                }
                $conn->close();
                ?>

            </div>
        </main>


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
</body>

</html>
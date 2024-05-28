<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help & Support</title>
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
        .content h2{
            color: tomato;
            text-align: center;
            
            
        }
        .content li{
            color: grey;
            text-align: center;
            display:inline ;

        }
        h2{
            font-size: 24px;
        }
        body{
            border: 2px solid grey;
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
                <li><a href="accesories.php">OTHER</a></li>
                <input type="search" name="" id="" placeholder="Search your Merch" class="search">
                <li><a href="login.php">LOGIN</a></li>
                <li><a href="mycart1.php" target="_blank">CART</a></li>
            </ul>


        </div>
    </header>
    <br>
    <br>
    <br>

    <section class="content">
        <h2>Frequently Asked Questions</h2><br>
        <br>
        <ul>
            <li>
                <h3>How do I place an order?</h3><br>
                <p>To place an order, follow these steps:</p><br>
                <ol>
                    <li>Go to the "Shop" page.</li><br>
                    <li>Browse our products and click on the one you want to purchase.</li><br><br>
                    <li>Click the "Add to Cart" button.</li><br><br>
                    <li>Review your cart and click the "Checkout" button.</li><br><br>
                    <li>Fill in your shipping and payment information.</li><br><br>
                    <li>Click the "Place Order" button to complete your purchase.</li><br><br><br><br>
                </ol>
            </li>
            <li>
                <h2>What payment methods do you accept?</h2><br><br><br>
                <p>We accept the following payment methods:</p><br><br><br>
                <ul>
                    <li>Credit cards (Visa, MasterCard, American Express)</li><br>
                    <li>PayPal</li><br>
                    <li>Apple Pay</li><br>
                    <li>Google Pay</li><br>
                </ul>
            </li>
            <!-- Add more FAQ items as needed -->
        </ul>
    </section>

    <section class="contact-info">
        <h2>Contact Information</h2><br>
        <p>If you need further assistance, you can contact our support team:</p><br>
        <ul>
            <li>Email: <a href="mailto:support@example.com"></a></li><br>
            <li>Phone: 8692022014</li><br>
        </ul>
    </section>

    <footer>
        <p>&copy; 2023 Your E-commerce Website. All rights reserved.</p><br>
    </footer>

    <script src="script.js"></script>
</body>

</html>
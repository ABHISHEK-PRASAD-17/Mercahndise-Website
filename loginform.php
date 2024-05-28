<?php include("connection.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <style>
        * {
            margin: 0;
            padding: 0%;
            font-family: 'Lilita One', cursive;
            font-family: 'Poppins', sans-serif;
            font-family: 'Rubik', sans-serif;
            font-family: 'Ysabeau Office', sans-serif;
        }

        section {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            width: 100%;

            background: url(loginbg.jpg)no-repeat;
            background-position: center;
            background-size: cover;
        }

        .form-box {
            position: relative;
            width: 400px;
            height: 450px;
            background: transparent;
            border: 2px solid rgba(255, 255, 255, 0.5);
            border-radius: 20px;
            backdrop-filter: blur(10px);
            display: flex;
            justify-content: center;
            align-items: center;

        }

        h2 {
            font-size: 2em;
            color: white;
            text-align: center;
        }

        .inputbox {
            position: relative;
            margin: 30px 0;
            width: 310px;
            border-bottom: 2px solid white;
        }

        .inputbox label {
            position: absolute;
            top: 50%;
            left: 5px;
            transform: translate(-50%);
            color: white;
            font-size: 1em;
            pointer-events: none;
            transition: .5s;

        }

        input:focus~label,
        input:valid~label {
            top: -5px;

        }

        .inputbox input {
            width: 100%;
            height: 50px;
            background: transparent;
            border: none;
            outline: none;
            font-size: 1em;
            padding: 0 35px 0 5px;
            color: white;

        }

        .inputbox ion-icon {
            position: absolute;
            right: 8px;
            color: white;
            font-size: 1.2em;
            top: 20px;
        }

        .forget {
            margin: -15px 0 15px;
            font-size: .9em;
            color: white;
            display: flex;
            justify-content: center;

        }

        .forget label {
            margin-right: 3px;

        }

        .foregt label a {
            color: white;
            text-decoration: none;

        }

        .forget label a:hover {
            text-decoration: underline;
        }

        #login {
            width: 100%;
            height: 40px;
            border-radius: 40px;
            background: white;
            outline: none;
            cursor: pointer;
            font-size: 1em;
            font-weight: 600;

        }

        .register {
            font-size: .9em;
            color: white;
            text-align: center;
            margin: 25px 0 10px;

        }

        .register p a {
            text-decoration: none;
            color: white;
            font-weight: 600;


        }

        .register p a:hover {
            text-decoration: underline;

        }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Poppins:wght@100&family=Rubik:wght@300&family=Ysabeau+Office:wght@1&display=swap"
        rel="stylesheet">

</head>

<body>
    <form action="1stpage.html" method="post" >

        <section>
            <div class="form-box">
                <div class="form-value">
                    <form action="">
                        <h2>Login</h2>
                        <div class="inputbox">
                            <ion-icon name="mail-outline"></ion-icon>
                            <input type="email" required name="email">
                            <label for="">&nbsp;&nbsp;Email</label>
                        </div>
                        <div class="inputbox">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                            <input type="password" required name="password">
                            <label for="">&nbsp;&nbsp;Password</label>
                        </div>
                        <div class="forget">
                            <label for=""><input type="checkbox" name="cbox">Remember Me</label>
                            <a href="#">Forget Password</a>
                        </div>
                        <input type="submit" value="Login" name="login" id="login">
                        <div class="register">
                            <p>Don't have a account <a href="register.html">Register</a></p>
                        </div>
                    </form>
                    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
                    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
                </div>
            </div>
        </section>


    </form>

</body>

</html>




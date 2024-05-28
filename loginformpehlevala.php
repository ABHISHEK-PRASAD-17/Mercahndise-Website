<?php
require 'config.php';
if (isset($_POST["login"])) {
    $usernameemail = $_POST["usernameemail"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM register WHERE username = '$usernameemail' OR email = '$usernameemail'");
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) > 0) {
        if ($password == $row["password"]) {
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("location:1stpage.php");
        } else {
            echo
            "<script> alert('Wrog password'); </script>";
        }
    } else {
        echo
        "<script> alert('User Not Registerd'); </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            margin: 0;
            padding: 0%;
            font-family: 'Lilita One', cursive;
            font-family: 'Poppins', sans-serif;
            font-family: 'Rubik', sans-serif;
            font-family: 'Ysabeau Office', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            width: 100%;

            background: url(registerbackground.jpg)no-repeat;
            background-position: center;
            background-size: cover;
        }

        .form-box {
            position: relative;
            width: 500px;
            height: 650px;
            background: transparent;
            border: 2px solid rgba(255, 255, 255, 0.5);
            border-radius: 20px;
            backdrop-filter: blur(10px);
            display: flex;
            justify-content: center;
            align-items: center;

        }

        h1 {
            font-size: 2em;
            color: white;
            text-align: center;
        }
        .inputbox{
            color: white;
            text-align: center;
            border-radius: 4px;

        }
        .btn{
            color: tomato;
            border-radius: 4px;
        }

        .j{
            border-radius: 6px;
        }
        .form-value{
            color: white;
            
        }
        .btn1{
            border-radius: 10px;
            padding: .4rem;
            margin-left: 50px;
            padding-left: 40px;
            padding-right: 40px;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .a{
            margin-left: 30px;
        }
        .form-box .form-value a{
            text-decoration: none;
            color: white;
        }
    </style>
</head>

<body>
    <div class="form-box">
        <div class="form-value">


            <form action="" method="post">
                <h1>Login</h1>
                <br>
                <br>
                <br>
                <div class="inputbox">

                    <label for="usernameemail">Email  </label>
                    <input type="text" name="usernameemail" id="usernameemail" required class="j"> <br>
                </div>
                <br>
                <br>
                

                <div class="inputbox">

                    
                    <label for="password">Password  </label>
                    <input type="password" name="password" id="password" required class="j"> <br>
                </div>
                <br>
                <br>
                

                <div class="btn">

                    
                    <input type="submit" value="LOGIN" name="login" class="btn1"><br><br>
                    <a href="registration.php" class="a">register? </a>
                    
                    <a href="login.php" class="a">Logout</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
<?php
require("connection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    
    * {
            margin: 0;
            padding: 0%;
            font-family: 'Lilita One', cursive;
            font-family: 'Poppins', sans-serif;
            font-family: 'Rubik', sans-serif;
            font-family: 'Ysabeau Office', sans-serif;
        }

        body{
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
        h1{
            font-size: 2em;
            color: white;
            text-align: center;
        }
        .form-value{
            color: white;
        }

        .form-value p a{
            text-decoration: none;
            color:white;
        }

        .form-value input {
            border-radius: 7px;
        }

        .b{
            padding: 3px;
            text-align: center;
            
            color: black;           
        }
        
       

       


        
    </style>
</head>
<body>
    <div class="form-box">

        <div class="form-value">

            <form action="" method="post" class="login">
                <h1>ADMIN LOGIN</h1>
                <br><br>
            <div>

            <label for="">Email</label>
            <input type="email" name="email" id="" class="c">
        </div><br><br>
        <div>
            <label for="">Password</label>
            <input type="password" name="password" id="" class="c">
        </div><br><br>
        <div class="btn">
            <input type="submit" value="LOGIN" name="login" class="b">

        </div><br>
        <p> <a href="#">forget password?</a></p>

    </form>
</div>
</div>
</body>
</html>

<?php
if(isset($_POST['login']))
{
    $query = "SELECT * FROM `admin_login` WHERE `admin_name` = '$_POST[email]' AND `admin_password` = '$_POST[password]'";
    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result)==1)
    {
        session_start();
        $_SESSION['adminloginid']=$_POST['email'];
        header("location:index.php");
    }
    else{
        echo "<script>alert('Icorrect password');</script>";
    }
}

?>
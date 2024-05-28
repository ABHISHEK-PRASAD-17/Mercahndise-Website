<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <script>
        function validateForm() {
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;

            if (email.trim() === "") {
                alert("Email field cannot be empty");
                return false;
            }

            if (password.trim() === "") {
                alert("Password field cannot be empty");
                return false;
            }

            // You can add more specific email and password validation here if needed.

            return true;
        }
    </script>
</head>
<body>
    <div class="form-box">
        <div class="form-value">
            <form action="" method="post" class="login" onsubmit="return validateForm()">
                <h1>ADMIN LOGIN</h1>
                <br><br>
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="c">
                </div><br><br>
                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="c">
                </div><br><br>
                <div class="btn">
                    <input type="submit" value="LOGIN" name="login" class="b">
                </div><br>
                <p><a href="#">Forget Password?</a></p>
            </form>
        </div>
    </div>
</body>
</html>

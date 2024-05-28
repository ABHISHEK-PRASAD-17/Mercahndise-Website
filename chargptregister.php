<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <script>
        function validateForm() {
            var name = document.getElementById("name").value;
            var username = document.getElementById("username").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirmpassword").value;

            if (name.trim() === "") {
                alert("Name field cannot be empty");
                return false;
            }

            if (username.trim() === "") {
                alert("Username field cannot be empty");
                return false;
            }

            if (email.trim() === "") {
                alert("Email field cannot be empty");
                return false;
            }

            // You can add more specific email validation here if needed.

            if (password.trim() === "") {
                alert("Password field cannot be empty");
                return false;
            }

            if (confirmPassword.trim() === "") {
                alert("Confirm Password field cannot be empty");
                return false;
            }

            if (password !== confirmPassword) {
                alert("Password and Confirm Password do not match");
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
    <div class="form-box">
        <div class="form-value">
            <form action="" method="post" onsubmit="return validateForm()">
                <h1>Registration</h1>
                <br><br>
                <div class="inputbox">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" required class="j"><br>
                </div><br><br>

                <div class="inputbox">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" required class="j"><br>
                </div><br><br>

                <div class="inputbox">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required class="j"><br>
                </div><br><br>

                <div class="inputbox">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="j"><br>
                </div><br><br>

                <div class="inputbox">
                    <label for="confirmpassword">Confirm Password</label>
                    <input type="password" name="confirmpassword" id="confirmpassword" class="j"><br>
                </div><br><br>

                <div class="btn">
                    <input type="submit" value="Register" name="register" class="btn"><br><br>
                    <a href="login.php" class="btn">Login?</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

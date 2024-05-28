<?php
include('conn.php');
// Process form data when the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $feedback = $_POST["feedback"];

    // Prepare an SQL INSERT statement
    $sql = "INSERT INTO `feedback`(`name`, `email`, `feedback`) VALUES ('$name','$email','$feedback')";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo " <script>
        alert('Feedback Submitted Successfully!');
    </script>";;
    } else {
        echo "Error updating password: ";
    }
    // Close the database connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="feedback.css">
    <style>
        body {
            background-image: url(feedback2.jpg);
            background-color: grey;
            color: black;
            font-family: Arial, sans-serif;
        }

        img {
            height: 0;
            width: 100%;
        }

       

        main {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            margin: 20px auto;
            max-width: 600px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            text-align: center;
            /* Add this line to center the content horizontally */
        }


        h1 {
            color: tomato;
            text-align: center;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid black;
            border-radius: 5px;
        }

        textarea {
            resize: vertical;
        }

        button[type="submit"] {
            background-color: tomato;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        button[type="submit"]:hover {
            background-color: darkred;
        }

        footer {
            text-align: center;
            color: grey;
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }
    </style>
    <title>Feedback</title>
</head>

<body>
    <main>
        <h1>Feedback Form</h1>
        <form id="feedback-form" action="feedback.php" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="feedback">Feedback:</label>
                <textarea id="feedback" name="feedback" rows="4" required></textarea>
            </div>

            <button type="submit">Submit Feedback</button>
        </form>

    </main>
    <footer>
        <p>&copy; 2023 Merchandise Website</p>
    </footer>
</body>

</html>
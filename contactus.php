<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Your Merchandise Store</title>
    <style>
        /* Basic CSS styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: red;
            background-image: url(registerbackground.jpg);
        

        font-family: Arial,
        sans-serif;
        padding: 20px;
        /* Add padding to all sides */
        margin: 0;
        
        }


        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 30px;
        }

        h1 {
            text-align: center;
        }

        .contact-form {
            margin-top: 20px;
            font-size: 20px;
            color: black;
        }
        
        .form-group {
            margin-bottom: 20px;
            
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        textarea {
            resize: vertical;
            height: 150px;
        }

        button[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
        formi{
            background-image:url(registerbackground.jpg);
        }
        #message{
            resize: none;

        }

        .submit{
            color: black;
            background-color: red;
            border-radius: 3px;
            padding: 10px;
            
        }

        

        
        
        
    </style>
</head>

<body>
    <div class="container">
        <h1>Contact Us</h1>
        <div class="contact-form">
            <form action="submit_contact_form.php" method="POST" class="formi">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required class="name">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required class="email">
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" required class="text"></textarea>
                </div>
                <input type="submit" value="Submit" class="submit">
            </form>
        </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background-color: #222;
            font-family: Arial, sans-serif;
            color: white;
        }

        .container {
            display: flex;
        }

        .sidebar {
            width: 250px;
            background-color: tomato;
            padding: 20px;
        }

        .sidebar h2 {
            color: white;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar li {
            margin-bottom: 10px;
        }

        .content {
            flex-grow: 1;
            padding: 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 60px;
            background-color: black;
        }

        .header h1 {
            color: tomato;
        }

        .header input[type="submit"] {
            background-color: tomato;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 6px;
            font-weight: 550;
            cursor: pointer;
        }
        input{
            border-radius: 5px;
        }

        textarea{
            border-radius: 10px;
        }
        .btnadd{
            padding: 7px;
            color: black;
            border-radius: 10px;
            background-color: tomato;
            border-color: 5px black;
        }

        .btndel{
            padding-left: 7px;
            padding-right: 7px;
            padding-top: 5px;
            padding-bottom: 5px;
            background-color: tomato;
            color: black;
            border-radius: 7px;
        }

        /* Add your existing styles here */
    </style>
</head>

<body>
    <div class="header">
        <h1>Welcome to Admin Panel - <?php echo $_SESSION['adminloginid'] ?></h1>
        <form action="" method="post">
            <input type="submit" value="Logout" name="logout">
        </form>
        <?php 
        if(isset($_POST['logout']))
        {
            session_destroy();
            header("location:adminlogin.php");
        }
        ?>
    </div>
    <div class="container">
        <div class="sidebar">
            <h2>Navigation</h2>
            <ul>
                <li><a href="#">Add Item</a></li>
                <li><a href="#delItem">Delete Item</a></li>
                <li><a href="#updateItem">Update Item</a></li>
                <!-- Add more navigation links here -->
            </ul>
        </div>
        <div class="content">
            <!-- Content for Add Item -->
            <div class="addItem" id="addItem">
                <!-- Your Add Item Form Goes Here -->
                <div class="addItem" id="addItem">
            <form action="itemUpload.php" method="post" enctype="multipart/form-data">
                <label for="category">Select Category:</label>
                <select id="category" name="category">
                    <option value="women">women</option>
                    <option value="men">men</option>
                    <option value="kids">kids</option>
                    <option value="other">other</option>
                    
                </select>
                <!-- <input type="text" name="category" id ="category" required> -->
                <br>
                <br>
                <label for="prodName">Enter name of product:</label>
                <input type="text" name="prodName" id ="prodName" required>
                <br>
                <br>
                <label for="prodDesc">Enter description of product:</label>
                <textarea name="prodDesc" id="prodDesc" cols="50" rows="8" placeholder="Please refrain from using any quotations."></textarea>
                <br>
                <br>
                <label for="prodPrice">Enter price of product:</label>
                <input type="number" name="prodPrice" id ="prodPrice" required>
                <br>
                <br>
                <label for="prodQ">Enter quantity of product:</label>
                <input type="number" name="prodQ" id ="prodQ" required>
                <br>
                <br>
                <label for="img_upload">Insert Image:</label>
                <input type="text" name="img_upload" id ="img_upload" required>
                <br>
                <br>
                <button  class="btnadd" type="submit" name="addItemBtn" id="passChangeActionBtn">ADD</button>
            </form>
        </div>
        <br>
        <br>
        <br><br>
            </div>
            <!-- Content for Delete Item -->
            <div class="delItem" id="delItem">
                <!-- Your Delete Item Form Goes Here -->
                <div class="delItem" id="delItem">
                    <form action="itemDelete.php" method="post">
                        <label for="prodSelect">Select Item:</label>
                        <input type="text" name="prodSelect" id="prodSelect" required>
                        <br>
                        <br>
                        <button class="btndel" type="submit" id="delItemActionBtn">CONFIRM DELETE</button>
                    </form>
                </div>
            </div>
            <br><br><br><br>
            <!-- Content for Update Item -->
            <div class="updateItem" id="updateItem">
                <!-- Your Update Item Form Goes Here -->
                <div class="updateItem" id="updateItem">
            <!-- <button type="submit" id="updateDesc">Add Item</button>
            <button type="submit" id="updatePrice">Delete Item</button>
            <button type="submit" id="updateName">Update Item</button> -->

            <form action="itemUpdate.php" method="post">
                <label for="prodSelect">Select Product:</label>
                <input type="text" name="prodSelect" id ="prodSelect" required>
                <br>
                <br>
                <label for="updProdName">Change name of product:</label>
                <input type="text" name="updProdName" id ="updProdName" >
                <br>
                <br>
                <label for="updProdDesc">Change description of product:</label>
                <textarea name="updProdDesc" id="updProdDesc" cols="50" rows="8"></textarea>
                <br>
                <br>
                <label for="updProdPrice">Change price of product:</label>
                <input type="number" name="updProdPrice" id ="updProdPrice" >
                <br>
                <br>
                <p>If you want to change 'image' of product, 'category' or 'type of product' then please delete the entire product and add again</p>
                <br>
                <br>
                <button type="submit" id="passChangeActionBtn">CONFIRM UPDATE</button>
            </form>
        </div>
            </div>
            <!-- Add more content sections for other navigation links -->
        </div>
    </div>
</body>

</html>
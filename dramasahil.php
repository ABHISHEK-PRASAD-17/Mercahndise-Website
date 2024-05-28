<?php
// Database configuration
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'project_21';

// Create a database connection
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle the "Add to Cart" button click
if (isset($_POST['add_to_cart'])) {
    $item_name = $_POST['item_name'];
    $item_price = $_POST['item_price'];
    $serial_no = $_POST['serial_no'];

    // Insert item details into the database
    $sql = "INSERT INTO cart (item_name, item_price, serial_no) VALUES ('$item_name', '$item_price', '$serial_no')";
    if ($conn->query($sql) === TRUE) {
        echo "Item added to cart successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Fetch items to display on the webpage
$sql = "SELECT * FROM cart";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>
</head>
<body>
    <h1>Items</h1>
    <table border="1">
        <tr>
            <th>Item Name</th>
            <th>Item Price</th>
            <th>Serial No</th>
            <th>Action</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['item_name'] . "</td>";
                echo "<td>" . $row['item_price'] . "</td>";
                echo "<td>" . $row['serial_no'] . "</td>";
                echo "<td><form method='post'><input type='hidden' name='item_name' value='" . $row['item_name'] . "'><input type='hidden' name='item_price' value='" . $row['item_price'] . "'><input type='hidden' name='serial_no' value='" . $row['serial_no'] . "'><input type='submit' name='add_to_cart' value='Add to Cart'></form></td>";
                echo "</tr>";
            }
        } else {
            echo "No items found.";
        }
        ?>
    </table>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>

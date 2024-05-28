<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    include 'config2.php';
    $prodSelect = $_POST['prodSelect'];
   // UPDATE `products` SET `description` = 'very speed,too many ads,descent cameras, good display,good battery,good !' WHERE `products`.`prod_id` = 4;
    // Initialize an empty array to store the update statements
    $updates = array();

    // Check if each field is set and add it to the update statements
    if (!empty($_POST['updProdName'])) {
        $newName = $_POST['updProdName'];
        $updates[] = "product_name = '$newName'";
    }

    if (!empty($_POST['updProdDesc'])) {
        $newDesc = $_POST['updProdDesc'];
        $updates[] = "product_description = '$newDesc'";
    }

    if (!empty($_POST['updProdPrice'])) {
        $newPrice = $_POST['updProdPrice'];
        $updates[] = "product_price = '$newPrice'";
    }

    // Construct the SQL query based on the updates array
    $updateQuery = "UPDATE products SET " . implode(", ", $updates) . " WHERE product_name = '$prodSelect'";

    // Execute the query
    $result = mysqli_query($conn, $updateQuery);
    // if (!$result) {
    //     echo "Error: " . mysqli_error($conn);
    // }
    if ($result) {
        echo '<script>
            alert("Product details updated successfully!!");
            // window.location.href = "sellerProfile.php";
        </script>';
    } else {
        echo '<script>
            alert("Product update failed!!");
            // window.location.href = "sellerProfile.php";
        </script>';
    }
}
?>

<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    include 'config2.php';
    $title = $_POST['prodName'];
    $desc = $_POST['prodDesc'];
    $price = $_POST['prodPrice'];
    $img = $_POST['img_upload'];
    $category = $_POST['category'];
$quantity = $_POST['prodQ'];

    
    $sql = "INSERT INTO `products` (`product_name`, `product_price`, `product_quantity`, `product_image`, `product_description`, `category`) VALUES ('$title', '$price', '$quantity', '$img' , '$desc', '$category')";
    // echo $sql;
    $result = mysqli_query($conn, $sql);

    if ($result){
        echo '<script>
        alert("File uploaded");
        window.location.href = "sellerProfile.php";
        </script>';
    }
    else{
        echo '<script>
        // window.location.href = "login.php";
        alert("File couldnt be uploaded");
        </script>';
    }

}

?>
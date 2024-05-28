<?php
// isset($_POST['addItemBtn'])
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    include 'config2.php';
    $prodSelect = $_POST['prodSelect'];
     
    $sql = "Delete from `products` where product_name = '$prodSelect'";
    $result = mysqli_query($conn, $sql);
    // echo $result;
    $resultCount = mysqli_affected_rows($conn);
    // echo $resultCount;
    // $resultCount = mysqli_num_rows($result);
    if ($resultCount > 0){
        echo "<script>
            alert('Item has been successfully deleted!!');
        </script>";   
    }
    else{
        echo "<script>
            alert('Item deletion failed!! There may not be any such item left to be deleted');
       
        </script>"; 
    }


}

?>

<?php
session_start();

$conn = mysqli_connect("localhost","root","","project_21");

if(mysqli_connect_error()){
    echo"
    <script>
    alert('cannot connect to php');
    window.location.href='mycart1';
    </script>
    ";
    exit();
}



if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if(isset($_POST['purchase']))
    {
        $query1 = "INSERT INTO `order_manager`( `Full_Name`, `Phone_No`, `Address`, `pay_mode`) VALUES ('$_POST[full_name]','[phone_no]','[address]','[pay_mode]')";
        if(mysqli_query($conn,$query1))
        {
            $order_Id = mysqli_insert_id($conn);
            $query2 = "INSERT INTO `user_orders`(`Order_id`, `Item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
            $stmt = mysqli_prepare($conn,$query2);
            if($stmt)
            {
                mysqli_stmt_bind_param($stmt,"isii",$order_Id,$Item_Name,$Price,$Quantity);
                foreach($_SESSION['cart'] as $key => $values)
                {
                    $Item_Name = $values['Item_Name'];
                    $Price = $values['Price'];
                    $Quantity = $values['Quantity'];
                    mysqli_stmt_execute($stmt);
                }
                unset($_SESSION['cart']);
                echo"
                <script>
                alert('Order Placed and Yor Order will Deliver to your adress soon enough!!');
                window.location.href='1stpage.php';
                </script>
                ";


            }
            else{
                echo"
                <script>
                alert('SQL Query Prepare ERROR');
                window.location.href='mycart1';
                </script>
                ";
    

            }


        }
        else
        {
            echo"
            <script>
            alert('SQL ERROR');
            window.location.href='mycart1';
            </script>
            ";

        }
    }
}


?>
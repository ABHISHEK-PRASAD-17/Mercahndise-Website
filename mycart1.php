<?php
include("heder.php");
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>MY CART</h1>
            </div>
            <div class="col-lg-9">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Serial No</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Item Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                        if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $key => $value) {
                                $sr = $key + 1;
                                echo "
                                <tr>
                                    <td>$sr</td>
                                    <td>$value[Item_Name]</td>
                                    <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
                                    <td>
                                        <form action='managecarting.php' method='POST'>
                                            <input class='text-center iquantity' name='Mod_Quantity'  onchange='subTotal()' type='number' value='$value[Quantity]' min='1' max='10'>
                                            <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                        </form>
                                    </td>
                                    <td class='itotal'></td>
                                    <td>
                                    <form action='managecarting.php' method='POST'>
                                    <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                                    <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                    </form>
                                    </td>
                                </tr>
                                ";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-3">
                <div class="bg-light rounded p-4">
                    <h3>Grand Total:</h3>
                    <h5 class="text-right" id="gtotal"></h5>
                    <br>
                    <?php
                    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0)
                    {


                    ?>
                        <form action="purchase.php" method="POST">
                            <div class="mb-3">
                                <label>FuLL Name</label>
                                <input type="text" name="full_name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Phone Number</label>
                                <input type="Number" name="phone_no" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control" required>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pay_mode" value="cd" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    CREDIT / DEBIT CARD
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pay_mode" value="cod" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    CASH ON DELIVERY
                                </label>
                            </div>
                            <div>

                                <a href="thankyou.php">
                                    
                                    <button class="btn btn-primary btn-block" name="purchase">Shop</button>
                                </a>
                            </div>
                        </form>
                    <?php
                    } 
                    ?>
                </div>
            </div>
        </div>
    </div>

    <script>
        var gt = 0;
        var iprice = document.getElementsByClassName('iprice');
        var iquantity = document.getElementsByClassName('iquantity');
        var itotal = document.getElementsByClassName('itotal');
        var gtotal = document.getElementById('gtotal');

        function subTotal() {
            gt = 0;
            for (var i = 0; i < iprice.length; i++) {
                itotal[i].innerText = (parseFloat(iprice[i].value) * parseInt(iquantity[i].value)).toFixed(2);
                gt += parseFloat(iprice[i].value) * parseInt(iquantity[i].value);
            }
            gtotal.innerText = gt.toFixed(2);
        }

        subTotal();
    </script>

</body>

</html>
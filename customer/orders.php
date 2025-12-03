

<?php

include "authguard.php";
include "../shared/connection.php";
include "menu.html";


// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $userid = $_POST['userid'];
//     $pid = $_POST['pid'];
    

//     $sql_result = "INSERT INTO orders (userid, pid) VALUES ('$userid', '$pid')";

//     if ($conn->query($sql_result) === TRUE) {
//         echo "Order placed successfully!";
        
//     } else {
//         echo "Error: " . $sql_result . "<br>" . $conn->error;
//     }
    
//     $conn->close();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userid = $conn->real_escape_string($_POST['userid']);
    $pid = $conn->real_escape_string($_POST['pid']);
    
    // Check if user and product exist
    $user_check = "SELECT userid FROM user WHERE userid = '$userid'";
    $product_check = "SELECT pid, price FROM product WHERE pid = '$pid'";
    
    $user_result = $conn->query($user_check);
    $product_result = $conn->query($product_check);

    if ($user_result->num_rows > 0 && $product_result->num_rows > 0) {
        $product = $product_result->fetch_assoc();
        $price = $product['price'];

        $sql_result = "INSERT INTO orders (userid, pid, price) VALUES ('$userid', '$pid', '$price')";

        if ($conn->query($sql_result) === TRUE) {
            echo "Order placed successfully!";
            header('location:track_orders.php');
        } else {
            echo "Error: " . $sql_result . "<br>" . $conn->error;
        }
    } else {
        echo "Invalid user or product ID.";
    }

    $conn->close();
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Place Order</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<div class="d-flex justify-content-center align-items-center text-white">
    
    <form action="orders.php" method="post" enctype="multipart/form-data" class="w-50 bg-primary p-4">
    <h3 class="text-center text-white">Place your order</h3>
       <input  class="form-control " name="name" placeholder="enter customer name"></input>
       <input  class="form-control mt-2" name="email" placeholder="enter your email"></input>
        <label for="userid">User ID:</label>
        <input  class="form-control " type="number" id="userid" name="userid" required>
        <label for="pid">Product ID:</label>
        <input  class="form-control " type="number" id="pid" name="pid" required>
          
         <textarea class="form-control mt-1" name="address" cols="30" rows="3" placeholder="Enter your Address"></textarea>
         
       
        <div class="clearfix space30"></div>
			<h4 class="heading">Payment Method</h4>
			<div class="clearfix space20"></div>
			
			<div class="payment-method mt-5">
             
				<div class="row d-flex">
				
						<div class="col-md-4">
							<input name="payment" value='COD'  id="radio1" class="mr-2 css-checkbox" type="radio"><span>COD</span>
							<div class="space20"></div>
							<p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won't be shipped until the funds have cleared in our account.</p>
						</div>
						<div class="col-md-4">
							<input name="payment" value='Cheque'  id="radio2" class="mr-2 css-checkbox" type="radio"><span>Cheque Payment</span>
							<div class="space20"></div>
							<p>Please send your cheque to All-in-one Shop, Oatland Rood, UK, LS71JR</p>
						</div>
						
				
                </div>
           
				
				<!-- <a href="#" class="button btn-lg bg-danger text-white">Pay Now</a> -->
			</div>
        </div>		
        
        <div class="row">
            <div class="col-md-12 text-center">
                <!-- <input type='submit' name='submit' value='Pay Now' class="btn"> -->
                <input type="submit" name="submit" value="Place Order">
            </div>
        </div>

    </form>

</div>
</body>
</html>
<?php

$cartid=$_GET['cartid'];

include "../shared/connection.php";
mysqli_query($conn,"delete from cart where cartid=$cartid");

header('location:view_cart.php');

?>
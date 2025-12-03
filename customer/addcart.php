<?php
  include "authguard.php";
  include "../shared/connection.php";

  $pid=$_GET['pid'];
  mysqli_query($conn,"insert into cart(userid,pid) values($_SESSION[userid],$pid)");

  header('location:view_cart.php');
  
  ?>
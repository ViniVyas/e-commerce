<?php

print_r($_POST);

//$conn=new mysqli("localhost","root","","acme24_apr",3306);
include_once "connection.php";
$options= [
    'cost' => 12
    ];
$hash=password_hash($_POST['password1'],PASSWORD_BCRYPT, $options);

$query="insert into user(username,password,usertype) values('$_POST[username]','$hash','$_POST[usertype]')";
echo $query;

$status=mysqli_query($conn,$query);

?>
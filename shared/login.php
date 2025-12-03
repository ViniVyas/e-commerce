<?php
session_start();
$_SESSION['login_status']=false;

//$conn=new mysqli("localhost","root","","acme24_apr",3306);
include_once "connection.php";
//$query="select *from user where username='$_POST[username]'and password='$_POST[password]'";
$query="select *from user where username='$_POST[username]'";


$sql_result=mysqli_query($conn,$query);



if(mysqli_num_rows($sql_result)>0){
    echo "<h1>Login Success</h1>";

    $dbrow=mysqli_fetch_assoc($sql_result);
    $hash= $dbrow['password'];

    if(password_verify($_POST['password'],$hash)){
        $_SESSION['login_status']=true;
    $_SESSION['usertype']=$dbrow['usertype'];
    $_SESSION['userid']=$dbrow['userid'];
    $_SESSION['username']=$dbrow['username'];

    if($dbrow['usertype']=='Vendor'){
              header('location:../vendor/home.php');
    }
    else if($dbrow['usertype']=='Customer'){
        header('location:../customer/view_pdt.php');
    }
    }
    

    // $_SESSION['login_status']=true;
    // $_SESSION['usertype']=$dbrow['usertype'];
    // $_SESSION['userid']=$dbrow['userid'];
    // $_SESSION['username']=$dbrow['username'];

    // if($dbrow['usertype']=='Vendor'){
    //           header('location:../vendor/home.php');
    // }
    // else if($dbrow['usertype']=='Customer'){
    //     header('location:../customer/view_pdt.php');
    // }
}
else{
    echo "<h1>Login Failed";
}

?>
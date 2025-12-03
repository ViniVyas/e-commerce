<?php
session_start();

if(!isset($_SESSION['login_status'])){
    echo "Login Attempt is skipped, please login again";
    die;
}

if($_SESSION['login_status']==false){
    echo "Unauthorised Attempt 403";
    die;
}

if($_SESSION['usertype']!='Customer'){
    echo "Forbidden Access! 403";
    die;
}
echo "<div class='d-flex justify-content-evenly bg-secondary text-white p-1'>
     <div>$_SESSION[userid]</div>
     <div>$_SESSION[username]</div>
     <div>$_SESSION[usertype]</div>
     <div class=''>
        <a href='../shared/logout.php'>
            <button class='btn btn-primary'>Logout</button>
        </a>
     </div>
</div>"
?>
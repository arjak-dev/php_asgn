<?php
if(isset($_POST['submit'])){
    $user_name = $_POST['user_name'];
    $password = $_POST['user_name'];
    if($user_name == "admin" && $password == "admin"){
        session_start();
        $_SESSION['code']="pass";
        header("Location: http://www.phpasgn.com/Assignment1/");
    }else{
        echo "invalid password";
    }
}elseif(isset($_POST['logout'])){
    session_start();
    unset($_SESSION['code']);
    header("Location: http://www.phpasgn.com/Login/");
}

?>
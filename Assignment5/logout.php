<?php
    session_start();
    //$code = $_SESSION['code'];
    //print_r($code);
    unset($_SESSION['code']);
    header("Location: http://www.phpasgn.com/Login/");
?>
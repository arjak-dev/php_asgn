<?php 
    session_start();
    $first_name = $_SESSION['first_name'];
    //echo "$first_name";
    $second_name = $_SESSION['second_name'];
    $final_marks = $_SESSION['marks'];
    $phone_no = $_SESSION['phone_no.'];
    $email_id = $_SESSION['email_id'];
    $img_src = $_SESSION['img_path'];
    session_destroy();
    header("Content-type: application/vnd.ms-word");
    header("Content-Disposition: attachment;Filename=document_name.doc");
    $a = "First name : ".$first_name."\r\n";
    $a .= "Last name: ".$last_name."\r\n";
    $a .= "Email id : ".$email_id."\r\n";
    $a .="Phone No.: ".$phone_no."\r\n";
    $file_name = $first_name.'.doc';
    file_put_contents($file_name,$a);
    readfile($file_name);
    
?>

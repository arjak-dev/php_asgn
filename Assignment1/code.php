<?php  
        if(isset($_POST['submit'])){
           
            $first_name = $_POST['fname'];
            $second_name = $_POST['sec'];
            $pattern = '/^[a-zA-Z]+$/';
            if(preg_match($pattern,$first_name) && preg_match($pattern,$second_name)){
                header("Location: http://www.phpasgn.com/Assignment2/");
          
            }   
            else{
                echo "Invalid First Name And second name";
            }
        }
?>
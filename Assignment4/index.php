<?php   
        
         session_start();
         if(!isset($_SESSION['code'])){
                unset($_SESSION['code']);
                header("Location: /Login/");
         }elseif(isset($_GET['q'])){
            $q=$_GET['q'];
            switch($q){
                  case 1:
                            header("Location: /Assignment1/");
                           break;
                  case 2:
                           header("Location: /Assignment2/");
                           break;
                   case 3:
                           header("Location: /Assignment3/");
                           break;
                   
                   case 4:
                           header("Location: /Assignment4/");
                           break;

                   case 5:
                           header("Location: /Assignment5/");
                           break;
                   default:
                           header("Location: /Login/");
            }
        }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Phone Number Input</title>
        <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
        <meta content="utf-8" http-equiv="encoding">
    </head>
    <body>
        <h1>Assignment Four</h1>
        <form action="code.php" method="POST" id="form_call" enctype="multipart/form-data">
                <b>First Name: </b><input type="text" name="fname" id="fname" placeholder = "First Name" required>
                <label id="fname_error"></label></br></br>
                <b>Second name: </b><input type="text" id="sname" name="sec" placeholder = "Second Name" required>
                <label id= "sname_error"></label></br></br>
                <b> Full name:</b><input type="text" id="fullname" value="" disabled></br></br>
                <b> Enter your image:</b><input type="file" name="file" id="img_upload" required></br></br>    
                <b> Enter the marks: </b><textarea name="marks" id = "marks_table" placeholder = "Marks" required></textarea></br></br>
                <b> Enter the phone no.: </b><input type="text" name="ph_no" id= "phno" placeholder = "Phone Number" required>
                <label id = "ph_no_error"></label></br></br>
                <input type="submit" name="submit" value="submit">
        </form>
        <a href="logout.php">logout</a>
        </br>
        </br>
        <ul type="square">Page Links:
                <a href="/Assignment1/"><li >Question 1</li></a>
                <a href="/Assignment2/"><li>Question 2</li></a>
                <a href="/Assignment3/"><li>Question 3</li></a>
                <a href="/Assignment5/"><li>Question 5</li></a>

        </ul>
    </body>
    <script src="valid.js"></script>
</html>
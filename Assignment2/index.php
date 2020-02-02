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
        <title>Image upload</title>
        <link rel="stylesheet" href="/style.css">
    </head>
    <body>
            
        <form action="code.php" method="POST" enctype=multipart/form-data id = "form_call">
        <h1>Assignment Two</h1>
                <b>First Name: </b><input type="text" name="fname" id="fname" required>
                 <label id="fname_error"></label></br></br>
                <b>Second name: </b><input type="text" id="sname" name="sec" required>
                <label id= "sname_error"></label></br></br>
                <b> Full name:</b><input type="text" id="fullname" value="" disabled></br></br>
                <b> Enter your image:</b><input type="file" name="file" id="img_upload" required></br></br>    
                <input type="submit" name="submit" value="submit">
                <a href="logout.php" class="logout">logout</a>
        </form>
       
        </br>
        </br>
    </body>
    <script src="valid.js"></script>
</html>
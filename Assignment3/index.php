<?php   
        
         session_start();
         if(!isset($_SESSION['code'])){
                unset($_SESSION['code']);
                header("Location: http://www.phpasgn.com/Login/");
         }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Marks Input</title>
        <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
        <meta content="utf-8" http-equiv="encoding">
    </head>
    <body>
        <form action="code.php" method="POST" id="form_call" enctype="multipart/form-data">
            
             <b>First Name: </b><input type="text" name="fname" id="fname" required>
             <label id="fname_error"></label></br>
            <b>Second name: </b><input type="text" id="sname" name="sec" required>
            <label id= "sname_error"></label></br>
            <b> Full name:</b><input type="text" id="fullname" value="" disabled></br>
            <b> Enter your image:</b><input type="file" name="file" id="img_upload" required>    
            <div>
                <b> Enter the marks: </b><textarea name="marks" id = "marks_table" required></textarea>
            </div>
             <input type="submit" name = "submit"/>
        </form>
        <a href="logout.php">logout</a>
        </br>
        </br>
        <ul type="square">Page Links:
                <a href="http://www.phpasgn.com/Assignment1/"><li >Question 1</li></a>
                <a href="http://www.phpasgn.com/Assignment2/"><li>Question 2</li></a>
                <a href="http://www.phpasgn.com/Assignment4/"><li>Question 4</li></a>
                <a href="http://www.phpasgn.com/Assignment5/"><li>Question 5</li></a>

        </ul>
    </body>
    <script src="valid.js"></script>
</html>
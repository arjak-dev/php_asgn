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
        <title>Email Input</title>
    </head>
    <body>
        <form action="code.php" method= "POST" id="form_call" enctype="multipart/form-data">
                <b>First Name: </b><input type="text" name="fname" id="fname" required>
                <label id="fname_error"></label></br>
                <b>Second name: </b><input type="text" id="sname" name="sec" required>
                <label id= "sname_error"></label></br>
                <b> Full name:</b><input type="text" id="fullname" value="" disabled></br>
                <b> Enter your image:</b><input type="file" name="file" id="img_upload" required>    
                <div>
                   <b> Enter the marks: </b><textarea name="marks" id = "marks_table" required></textarea>
                </div>
                <div>
                    <b> Enter the phone no.: </b><input type="text" name="ph_no" id= "phno" required>
                    <label id = "ph_no_error"></label>
                </div>
                <div>
                    <b> Enter email id:</b><input name = "email_input" type="text" id="email_input" required>
                    <label id="email_error"></label>
                </div>
                <input type="submit" value="submit" name="submit">
        </form>
        <a href="logout.php">logout</a>
        </br>
        </br>
        <ul type="square">Page Links:
                <a href="http://www.phpasgn.com/Assignment1/"><li >Question 1</li></a>
                <a href="http://www.phpasgn.com/Assignment2/"><li>Question 2</li></a>
                <a href="http://www.phpasgn.com/Assignment3/"><li>Question 3</li></a>
                <a href="http://www.phpasgn.com/Assignment4/"><li>Question 4</li></a>

        </ul>
      
    </body>
    <script src="valid.js"></script>
</html>

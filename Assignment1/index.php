<?php   
        // echo "session delete";
         session_start();
         //$_SESSION['code'] = "2";
        // $_SESSION['code'] = 0;
         if(!isset($_SESSION['code'])){
                unset($_SESSION['code']);
                header("Location: http://www.phpasgn.com/Login/");
         }
?>
<!DOCTYPE html>
<html>
<head>
        <title> First assignment</title>
</head>
<body>
        <form action="code.php" method="post" id="form_call">
                <b>First Name: </b><input type="text" name="fname" id="fname" required>
                 <label id="fname_error"></label></br>
                <b>Second name: </b><input type="text" id="sname" name="sec" required>
                <label id= "sname_error"></label></br>
                <b> Full name:</b><input type="text" id="fullname" value="" disabled></br>
		<button type="submit" name="submit">Submit</button>
         </form>
         <a href="logout.php">logout</a>
        </br>
        </br>
        <ul type="square">Page Links:
                <a href="http://www.phpasgn.com/Assignment2/"><li >Question 2</li></a>
                <a href="http://www.phpasgn.com/Assignment3/"><li>Question 3</li></a>
                <a href="http://www.phpasgn.com/Assignment4/"><li>Question 4</li></a>
                <a href="http://www.phpasgn.com/Assignment5/"><li>Question 5</li></a>

        </ul>

</body>
<script src="valid.js"></script>
</html>

<!DOCTYPE html>
<html>
    <head>
        <title>php_asgn_1</title>
     
    </head>
    <body>
    <div>
        <form action="code.php" id = "form" method="POST" enctype="multipart/form-data">
            <div>
                <b> First Name: </b><input type="text" name="first" id="fname"/>
                 <label id="fname_error"></label>
            </div>
            </br>
            <div>
                <b>Second name: </b><input type="text" id="sname" name="sec"/>
                <label id= "sname_error"></label>
            </div>
            </br>
            <div>
                <b> Full name:</b>
                <input type="text" id="fullname" value="" disabled>
            </div>
            </br>    
            <div>
                <b> Enter your image:</b><input type="file" name="file" id="img_upload">
                <?php
                    $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                    if(strpos($fullUrl,"value=false")){
                            echo "<p>No image is input</p>";
                    }
                ?>
            </div>
            </br>
            <div>
               <b> Enter the marks: </b><textarea name="marks" id = "marks_table"></textarea>
                <label id="textarea_error"></label>
            </div>
            </br>
            <div>
               <b> Enter the phone no.: </b><input type="text" name="ph_no" id= "phno">
                <label id = "ph_no_error"></label>
            </div>
            </br>
            <div>
               <b> Enter email id:</b><input name = "email_input" type="text" id="email_input">
                <label id="email_error"></label>
            </div>
            </br>
            <input type="submit" name="submit" value="submit" />
        </form>
     </div>   
    </body>
    <script type="text/javascript" src="Scripting.js"></script>
</html>
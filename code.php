<?php
    $first = $_REQUEST['first'];
    $sec= $_REQUEST['sec'];
    echo "<h1> Hello $first $sec</h1>";
    
    if (isset($_POST['submit'])){
      image_upload();
      marks_table();
      phone_no();
      email_check();
    }
    function image_upload(){
      $file = $_FILES['file'];
        if($file['name'] != NULL){
          $fileName = $file['name'];
          $fileTempName = $file['tmp_name'];
          $fileType = $file['type'];
          $fileError = $file['error'];
        
          $fileExtension = explode('.',$fileName);
          $allowed = array("jpg","jpeg","png");
          $fileActualExtension = strtolower(end($fileExtension));
          
          if(in_array($fileActualExtension,$allowed)){
          
            if($fileError === 0){
          
              $fileNewName = uniqid(rand(),true).".".$fileActualExtension;
              $fileDestination="upload/".$fileNewName;
              move_uploaded_file($fileTempName,$fileDestination);
              echo "<img src=$fileDestination width = 100px height = 100px>";
              echo "<br>";
              echo "<br>";
            }
          }else{
          
            echo "Wrong file Type";
        }
      }else{
        error("value=false");
      }
    }
    function marks_table(){
      $marks = $_REQUEST['marks'];
      $test = explode(PHP_EOL,$marks);
      foreach($test as $val)
      {
          if(strlen($val) > 1){
              $temp = explode('|',$val);
              $final_val[$temp[0]]=$temp[1];
          }  
      }
      echo "<table style='border: 1px solid black'>";
      echo "<th>Marks</th>";
      foreach($final_val as $sub => $point){
          echo "<tr >";
              echo "<td style='border: 1px solid black'>$sub</td>";
              echo "<td style='border: 1px solid black'>$point</td>";
          echo "</tr>";
      }
      echo "</table>";
      echo "<br>";
      echo "<br>";
  }
  function phone_no(){
    $ph_no = $_POST['ph_no'];
    $valid='/^\+(91)[0-9]{10}$/';
    if(preg_match($valid,$ph_no)){
      echo "Your phone no.: $ph_no<br/>";
    }else{
      echo "invalid phn no.";
    }
    echo "<br>";
    echo "<br>";
  }
  function email_check(){
      
    //api Key
    $key = '5a4e62a20fafb27a5caa9d6d94776fe6';

    //email input from user
    $email_id = $_POST['email_input'];

    //initialize curl:
    $ch = curl_init('http://apilayer.net/api/check?access_key='.$key.'&email='.$email_id);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

    //DATA STORE
    $json = curl_exec($ch);
    curl_close($ch);


    //Decoding jason file:
    $final_result = json_decode($json, true);
    //print_r($final_result);
   if($final_result['format_valid'] && $final_result['smtp_check']){
     echo "your mail id is valid: $email_id";
    }else{
      print_r("your mail id is not valid");
    }

  }
  function error($s){
    header("location: ../index.php?$s");  
    exit();
  }
?> 
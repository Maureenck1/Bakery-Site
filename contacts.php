<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $callTime = $_POST['callTime'];
    $comments = $_POST['comments'];
    $to = "ngugigeorge697@gmail.com";
    $subject = "comments done." ;
   echo  $name . ' '. $email .' '. $phone . ' '. $callTime .' '. $comments;
    function cleanUp($var){
        // $var = 

    }
   //mail( );
    
}
else{
    echo "No submission";
}
  
?>
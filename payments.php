<?php
session_start();
require_once('db-con.php');
if (isset($_POST['checkout'])) {
  
     $fname =  $_POST['FName'];
     $lname =  $_POST['LName'];
      $username = $_POST['username'];
      $email =  $_POST['email'];
      $address =  $_POST['address'];
       $addressT =  $_POST['addressT'];
       $amount =  $_POST['amount'];
       $phone =  $_POST['phone'];

       $sql = "INSERT INTO orders(fname,lname,username,email,address,addressT,amount,phone) VALUES('$fname','$lname','$username','$email','$address','$addressT','$amount','$phone')";
       if ($conn->query($sql) === TRUE) {
       
        $receiver=$email;
        $subject = "AFMA Receipt";
        $message = "<a>Total amount to be paid is $amount</a> \r\n ";
        $senders = "From: afma.a@yahoo.com \r\n";
        $senders .= "MIME-Version: 1.0" . "\r\n";
        $senders .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
        

        mail($receiver,$subject,$message,$senders);
        header('location:e.php');
      
                   
                       
                        
       
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
}
    ?>
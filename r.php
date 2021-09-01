<?php
session_start();
require_once('db-con.php');

if(isset($_POST['reset'])){

        $Email = $_POST['Email'];

        $check_email = "SELECT * FROM users WHERE Email='$Email'";
        
        $run_sql = mysqli_query($conn, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            
            $code = rand(999999, 111111);
            $insert_code = "UPDATE users SET code = $code WHERE Email = '$Email'";
            $run_query =  mysqli_query($conn, $insert_code);
            if($run_query){
                $subject = "Password Reset Code";
                $message = "Your password reset code is $code";
                $sender = "From: afma.a@yahoo.com \r\n";
                if(mail($Email, $subject, $message, $sender)){
                    $info = "We've sent a passwrod reset otp to your email - $email";
                    $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    header('location: reset-code.php?codesent');
                    exit();
                }else{
                    header("Location: reset.php?Failedwhilesendingcode");
                  
                }
            }else{
                header("Location: reset.php?Somethingwentwrong");
               
            }
        }else{
            header("Location: reset.php?Thisemailaddressdoesnotexist");
           
        }
    }
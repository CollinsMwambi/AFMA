<?php
session_start();
require_once('db-con.php');

if(isset($_POST['check-reset-otp'])){
        $_SESSION['info'] = "";
        $otp_code =$_POST['otp'];
      
        $check_code = "SELECT * FROM users WHERE code = $otp_code";
        $code_res = mysqli_query($conn, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $Email = $fetch_data['Email'];
            $_SESSION['Email'] = $Email;
            $info = "Please create a new password ";
            $_SESSION['info'] = $info;
            header('location: new-password.php?successful');
            exit();
        }else{
            header('location: reset-code.php?Youhaveenteredthewrongcode');
            
        }
    }
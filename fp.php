<?php
session_start();
require_once('db-con.php');

if(isset($_POST['change-password'])){

       
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        if($password !== $cpassword){
            header('Location: new-password.php?passwordsdontmatch');
        }else{
         

            $Email = $_SESSION['Email']; //getting this email using session

            $encpass = password_hash($password, PASSWORD_DEFAULT);

            $update_pass = "UPDATE users SET  password = '$encpass' WHERE Email = '$Email'";
            $run_query = mysqli_query($conn, $update_pass);
            if($run_query){
                
                header('Location:login.php?sreset');
            }else{
                header('Location: new-password.php.php?error');
               
            }
        }
    }
    ?>
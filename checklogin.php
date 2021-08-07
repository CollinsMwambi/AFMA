<?php

        session_start();
        require_once("db-con.php");
       
    if (isset($_POST['lsubmit'])) {
         $user_alias =  $_POST['username'];
        $user_pwd = $_POST['user_pwd'];
 
        
            if (empty($user_alias) || empty(($user_pwd))) {
              
                    header("Location:login.php?login=empty");
                    
                        exit();
            } else {
                    $query = "SELECT * FROM users WHERE username = '$user_alias'";
                    $mysqli_result = mysqli_query($conn, $query); 
                        if(mysqli_num_rows($mysqli_result) < 1) {
                             header("Location: login.php?login=wrong_user");
                            
                                exit();
                        } else {
                             $row = mysqli_fetch_assoc($mysqli_result);
                             
                             $hashed_pwd_check = password_verify($user_pwd, $row['password']);
                             if ($hashed_pwd_check === false) {
                                header("Location:login.php?login=wrong_pwd");
                                  
                             } else if ($hashed_pwd_check === true && $row['usertype']=='user') {  //log in the user
                                  $_SESSION["loggedin"] = true;
                                  $_SESSION["id"] = $id;
                                 $_SESSION['username'] = $row['username'];

                                    header("Location:welcomef.php?login=login_successful");
                                    exit();
                             }

                             else if($hashed_pwd_check===true && $row['usertype']=='admin'){
                                $_SESSION['loggedin']= true;
                                $_SESSION['id']= $id;
                                $_SESSION['username']= $row['username'];

                                header("Location:adminpage.php?login=adminlogin_successful");
                                exit();


                             }

                             else{
                                header("Location:login.php?login=error");
                             }

                        }
            
    } 
  }
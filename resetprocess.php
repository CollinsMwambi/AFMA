 <?php

session_start();
 
 
require_once('db-con.php');
if (isset($_POST['changepasswordu'])) {

$newpassword= $_POST['newpassword'];
 $confirmpasswordu =$_POST['confirmpasswordu'];

    
    if (empty($newpassword) || empty($confirmpasswordu)) {
        header("Location:reset-password.php?fill_in_all_fields");
            exit();
} 

         elseif ($newpassword!= $confirmpasswordu) {
           header("Location:reset-password.php?passwords_dont_match");
              exit();
         }
         else {

         header("Location:login.php?success=Your password has been changed successfully");
         exit();
            }
        }
    
    //             } else{

    //                 header("Location:reset-password.php?something went wrong"); 
    //             }
                
    //      }
    //     }
    // }
        
//            
     
//             


//              
//            
            
//             // Attempt to execute the prepared statement
//              if(mysqli_stmt_execute($stmt)){
//                  // Password updated successfully. Destroy the session, and redirect to login page
//                  session_destroy();
//                  header("location: login.php");
//                  exit();
//              } else{
//                  echo "Oops! Something went wrong. Please try again later.";
//              }

// //             // Close statement
//              mysqli_stmt_close($stmt);
//          }
//      }
    
// //     // Close connection
//      mysqli_close($conn);
 
// 

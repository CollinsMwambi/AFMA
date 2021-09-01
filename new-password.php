<?php
session_start();
require_once('db-con.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create a New Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head >
<body style=background-color:rgb(224,159,159);>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="fp.php" method="POST" autocomplete="off">
                    <h2 class="text-center">New Password</h2>
                    <?php
$fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if(strpos($fullUrl,"successful")==true){
echo"<p style=background-color:green;>You entered the correct code.You can now create a new password<p>";

}
elseif(strpos($fullUrl,"error")==true){
    echo"<p style=background-color:red;>error<p>";
 
    }
    elseif(strpos($fullUrl,"passwordsdontmatch")==true){
        echo"<p style=background-color:red;>Passwords don't match<p>";
     
        }
?>
                    
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Create new password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirm your password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="change-password" value="Change">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
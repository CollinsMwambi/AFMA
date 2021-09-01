<?php
session_start();
require_once('db-con.php');



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Code Verification</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body style=background-color:rgb(109,120,138);>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="rde.php" method="POST" autocomplete="off">
                    <h2 class="text-center">Code Verification</h2>
                    <?php
$fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if(strpos($fullUrl,"codesent")==true){
echo"<p style=background-color:green;>Code sent to email,Check email and enter code<p>";

}
elseif(strpos($fullUrl,"Youhaveenteredthewrongcode")==true){
    echo"<p style=background-color:red;>Wrong code!!<p>";
  
    }
?>
                    <div class="form-group">
                        <input class="form-control" type="number" name="otp" placeholder="Enter code" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="check-reset-otp" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
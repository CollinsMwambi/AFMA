<!-- <?php require_once "db-con.php"; 
$errors = array();
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Code Verification</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styleotp.css">
</head>
<body>
<form action="ot.php" method="POST" autocomplete="off">
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">

                

                    <h2 class="text-center">Code Verification</h2>
                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="number" name="otpcode" placeholder="Enter verification code" required>
                    </div>
                    <div class="form-group">
                    <button type="submit" name="submitotp" class="form-control">Create account</button>
                    </div>
                </form>
            </div>
        </div> -->
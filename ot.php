<!-- <?php
require_once('db-con.php');


    $_SESSION['info'] = "";

    if (isset($_POST['submitotp'])) {

    $otpcode = $_POST['otpcode'];
    $check_code = "SELECT * FROM users WHERE code='$otpcode'";

    $code_res = mysqli_query($conn,$check_code);

    if(mysqli_num_rows($code_res) > 0){

        $fetch_data = mysqli_fetch_assoc($code_res);

        $fetch_code = $fetch_data['code'];
        $Email = $fetch_data['Email'];
        $code = 0;
        $status = 'verified';
        $update_otp = "UPDATE users SET code = $code, status = '$status' WHERE code = $fetch_code";
        $update_res = mysqli_query($conn, $update_otp);
       
        if($update_res){
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
            header('location: login.php');
          
        }else{
            $errors['otp-error'] = "Failed while updating code!";
        }
    }else{
        $errors['otp-error'] = "You've entered incorrect code!";
    }

    }

      ?> -->
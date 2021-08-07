<?php
session_start();
    require_once('db-con.php');
    if (isset($_POST['update_button'])) {
       $id= $_POST['update_id'];
 

        $query= "SELECT * FROM users WHERE id='$id'";
        $query_run= mysqli_query($conn,$query);

        
    }

    if (isset($_POST['ubtn'])){
        $id = $_POST['update_id'];
        $Fname = $_POST['e_fname'];
        $Lname = $_POST['e_lname'];
        $Email = $_POST['e_email'];
        $Username = $_POST['e_username'];
        $Usertype = $_POST['e_usertype'];
     
        $query="UPDATE users SET FName='$Fname',LName=' $Lname',Email='$Email',username='$Username',usertype='$Usertype' WHERE id='$id';" ;  
    $query_run=mysqli_query($conn,$query);

    if($query_run){


        header("Location:adminpage.php?Data is updated");
}
    else{
        header("Location:updaterecords.php?Data is not updated");

    }
    }

    
    ?>
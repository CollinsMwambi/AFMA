<?php
    include("db-con.php");
    if(isset($_POST['upl']))
    {
        

        $FName=$_POST['FName'];
        $LName=$_POST['LName'];
        $Email=$_POST['Email'];
        $username=$_POST['username'];
     
        $id=$_POST['id'];
    
        $q= "UPDATE users set FName='$FName',LName='$LName',Email='$Email', username='$username' where id=$id";
        $query=mysqli_query($conn,$q);

        if($query){


            header('location:account_info.php?successupdate');
        }
        else{
            header('location:account_info.php?error');
            echo $conn->error;
        }
    }?>
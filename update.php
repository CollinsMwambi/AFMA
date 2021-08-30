<?php
    include("db-con.php");
    if(isset($_POST['uptn']))
    {
        

        $FName=$_POST['FName'];
        $LName=$_POST['LName'];
        $Email=$_POST['Email'];
        $username=$_POST['username'];
        $usertype=$_POST['usertype'];
        $id=$_POST['id'];
    
        $q= "UPDATE users set FName='$FName',LName='$LName',Email='$Email', username='$username', usertype='$usertype' where id=$id";
        $query=mysqli_query($conn,$q);

        if($query){


            header('location:users.php?successupdate');
        }
        else{
            header('location:users.php?error');
            echo $conn->error;
        }
    //     header('location:users.php');
    // } 
    // else if(isset($_GET['id'])) 
    // {
    //     $q = "SELECT * FROM users WHERE id='".$_GET['id']."'";
    //     $query=mysqli_query($conn,$q);
    //     $res= mysqli_fetch_array($query);
     }

?>
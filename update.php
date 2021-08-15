<?php
require_once('db-con.php');

if (isset($_POST['ubtn'])){
    $id = $_POST['id'];
    $Fname = $_POST['fname'];
    $Lname = $_POST['lname'];
    $Email = $_POST['email'];
    $Username = $_POST['username'];
    $usertype = $_POST['usertype'];
 
    $sql="UPDATE 'users' SET FName='$Fname',LName=' $Lname',Email='$Email',username='$Username',usertype='$usertype' WHERE id='$id'" ;  
    if ($conn->query($sql) === TRUE) {
        echo'<script>alert("Account has been updated")<?script>';
        echo'<script>window.location="users.php"</script>';
    }else{
        echo'<script>alert("Try again")</script>';
        echo"something went wrong";
    }
 } else{
        echo"Invalid";
    }





?>
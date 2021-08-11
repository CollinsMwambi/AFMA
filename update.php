<?php
require_once('db-con.php');
require_once
session_start();
if (isset($_POST['ubtn'])){
    $id = $_POST['update_id'];
    $Fname = $_POST['fname'];
    $Lname = $_POST['lname'];
    $Email = $_POST['email'];
    $Username = $_POST['username'];
    $Usertype = $_POST['usertype'];
 
    $sql="UPDATE users SET FName='$FName',LName=' $Lname',Email='$Email',username='$Username',usertype='$Usertype' WHERE id='$id';" ;  
    $query_run=mysqli_query($conn, $sql);


}


?>
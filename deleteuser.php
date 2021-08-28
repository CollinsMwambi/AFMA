<?php
     include("db-con.php");
     if(isset($_POST['delete_button']))
     {

     $id= $_GET['delete_id'];
     $sql = "DELETE from users WHERE id = $id ";
     mysqli_query($conn,$ql);  
    header('location:adminpage.php');  
     }

?>
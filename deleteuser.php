<?php
    include("db-con.php");
    $id = $_GET['id'];
    $q = "delete from users where id = $id ";
    mysqli_query($conn,$q);  
    header('location:users.php?userdelete');  
?>
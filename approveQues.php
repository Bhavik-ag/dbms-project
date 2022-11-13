<?php
    session_start();
    include('conf.php');
    $sql="update message set approved = '1' where msgid ='".$_GET['id']."'";
    $res=mysqli_query($conn,$sql);
    if($res) {
        header('location:/dbms-project/adminDashboard.php');
    }
?>
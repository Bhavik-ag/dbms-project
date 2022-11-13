<?php
    session_start();
    include('conf.php');
    $sql="delete from message where msgid ='".$_GET['id']."'";
    $res=mysqli_query($conn,$sql);
    if($res) {
        header('location:/dbms-project/adminDashboard.php');
    }
?>
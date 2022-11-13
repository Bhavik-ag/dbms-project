<?php
    include('conf.php');
    $userid=$_POST['user'];
    $pass=$_POST['pwd'];
    $sql="select * from admin where username='$userid' and pass='$pass' ";
    $res=mysqli_query($conn,$sql);
    if($result=mysqli_fetch_assoc($res)) {
        session_start();
        $_SESSION['adminUserid'] = $result['username'];
        header('location:adminDashboard.php');
    }
    else {
        header('location:adminLogin.php');
    }
?>
<?php
    include('conf.php');
    $userid=$_POST['user'];
    $pass=$_POST['pwd'];
    $sql="select * from auth where username='$userid' and pass='$pass' ";
    $res=mysqli_query($conn,$sql);
    if($result=mysqli_fetch_assoc($res)) {
        session_start();
        $_SESSION['userid']=$result['username'];
        header('location:index.php');
    }
    else {
        header('location:loginPage.php');
    }
?>
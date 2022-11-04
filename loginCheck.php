<?php
    include('conf.php');
    $userid=$_POST['user'];
    $pass=$_POST['pwd'];
    $sql="select * from auth where username='$userid' and pass='$pass' ";
    $sql2="select * from student where email='$userid'";
    $res=mysqli_query($conn,$sql);
    $res2=mysqli_query($conn,$sql2);
    if($result=mysqli_fetch_assoc($res)) {
        session_start();
        $_SESSION['userid'] = $result['username'];
        if($result2=mysqli_fetch_assoc($res2)) {
            $_SESSION['rno'] = $result2['rollno'];
        }
        header('location:index.php');
    }
    else {
        header('location:loginPage.php');
    }
?>
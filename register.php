<?php
    include('conf.php');
    $name=$_POST['name'];
    $rno=$_POST['rno'];
    $email=$_POST['email'];
    $disc=$_POST['disc'];
    $degree=$_POST['degree'];
    $year=$_POST['year'];
    $pass=$_POST['pass'];


    $sql="insert into student values('$name', '$rno', '$email', '$disc', '$degree', '$year')";
    $res=mysqli_query($conn,$sql);

    $sql2="insert into auth values('$email', '$pass', '$rno')";
    $res2=mysqli_query($conn,$sql2);
    
    if($res && $res2) {
        // $_SESSION['userid']=$result['userid'];
        header('location:loginPage.php');
    }
    else {
        header('location:signUP.php');
    }
// ?>
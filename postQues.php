<?php
    session_start();
    include('conf.php');
    date_default_timezone_set("Asia/Calcutta");
    $msgId = "" . $_SESSION['userid'] . date("Y.m.d") . date("h:i:sa");
    $timeSt = date("h:i:sa");
    $body = $_POST['body'];
    $cat = $_POST['cat'];
    $rno = $_SESSION['userid'];
    $head = $_POST['heading'];
    $sql="insert into message values('$msgId', '$body', '$timeSt', '$cat', '$rno', '$head')";
    $res=mysqli_query($conn,$sql);
    echo $timeSt;
    if($res) {
        header('location:index.php');
    }
?>
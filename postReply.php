<?php
    session_start();
    include('conf.php');
    date_default_timezone_set("Asia/Calcutta");
    $replyId = "" . $_SESSION['userid'] . date("Y.m.d") . date("h:i:sa");
    $timeSt = date("h:i:sa");
    $body = $_POST['body'];
    $msgId = $_POST['msgId'];
    echo $msgId;
    $sql="insert into replies values('$replyId', '$body', '$timeSt','$msgId')";
    $res=mysqli_query($conn,$sql);
    echo $timeSt;
    if($res) {
        header('location:replies.php/?id='.$msgId);
    }
?>
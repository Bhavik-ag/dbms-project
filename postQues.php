<?php
    session_start();
    include('conf.php');
    date_default_timezone_set("Asia/Calcutta");
    $msgId = "" . $_SESSION['userid'] . date("Y.m.d") . date("h:i:sa");
    $timeSt = date("h:i:sa");
    $body = $_POST['body'];
    $cat = $_POST['cat'];
    $rno = $_SESSION['rno'];
    $head = $_POST['heading'];
    $sql="insert into message values('$msgId', '$body', '$timeSt', '$cat', '$rno', '$head', '0')";
    $res=mysqli_query($conn,$sql);
    // echo $timeSt;
    if($res){
        echo '<form id="sendAlert" action="/dbms-project/index.php" method="post">
        <input type="hidden" name="alert" value="Question Added, Please wait till it is approved!!" hidden>
        </form>';
        echo '<script type="text/javascript">';
        echo 'document.getElementById("sendAlert").submit();';
        echo '</script>';
    };
?>
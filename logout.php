<?php
    session_start();
    // echo $_SESSION['userid'];
    session_destroy();
    header('location:loginPage.php');
?>
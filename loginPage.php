<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./loginPage.css">
    <title>Doubt Forum</title>
</head>

<body>

    <?php
        session_start();
        echo $_SESSION['userid'];
        if (isset($_SESSION['userid'])) {
            header('location:index.php');
        }
    ?>

    <div class="area">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="content">
            <div class='loginWindow'>
                <div class="sideimg"></div>
                <div class="login-details">
                    <div class="signUp">
                        <span>Don't have an account?</span>
                        <a href="./signUp.php">SIGN UP</a>
                    </div>
                    <div class="heading">Welcome Back</div>
                    <div class="heading-sub">Login into your account</div>
                    <form action="./loginCheck.php" method="post">
                        <div class='entry'>
                            <div class="e_title">Username</div>
                            <input type="text" name="user" />
                        </div>
                        <div class='entry'>
                            <div class="e_title">Password</div>
                            <input type="password" name="pwd" />
                        </div>
                        <div class="submit">
                            <input type="submit" value="Login">
                            <!-- <button>Login</button> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./signUp.css">
    <title>Doubt Forum</title>
</head>

<body>
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
                        <span>Already have an account?</span>
                        <a href="./loginPage.php">SIGN IN</a>
                    </div>
                    <div class="heading">Welcome!</div>
                    <div class="heading-sub">Register your account</div>
                    <form action="./register.php" method="post">
                        <div class='entry'>
                            <div class="e_title">Name</div>
                            <input type="text" name="name" placeholder="Enter your name" required />
                        </div>
                        <div class='entry'>
                            <div class="e_title">Roll No.</div>
                            <input type="text" name="rno" placeholder="21BCS001" required />
                        </div>
                        <div class='entry'>
                            <div class="e_title">Email (This is your username)</div>
                            <input type="text" name="email" placeholder="abc@xyz.com" required />
                        </div>
                        <div class='entry'>
                            <div class="e_title">Discipline</div>
                            <select name="disc" required>
                                <option value="" disabled selected hidden>Select Discipline</option>
                                <option value="cse">CSE</option>
                                <option value="ece">ECE</option>
                                <option value="me">Mech</option>
                                <option value="sm">SM</option>
                            </select>
                            <!-- <input type="text" name="disc" placeholder="CSE/ECE/ME/SM" /> -->
                        </div>
                        <div class='entry'>
                            <div class="e_title">Degree</div>
                            <select name="degree" required>
                                <option value="" disabled selected hidden>Select Degree</option>
                                <option value="btech">B.Tech</option>
                                <option value="mtech">M.Tech</option>
                                <option value="phd">Phd.</option>
                            </select>
                            <!-- <input type="text" name="degree" placeholder="B.Tech/M.Tech/PHD" /> -->
                        </div>
                        <div class='entry'>
                            <div class="e_title">Year of Admission</div>
                            <input type="number" name="year" placeholder="20XX" required/>
                        </div>
                        <div class='entry'>
                            <div class="e_title">Password</div>
                            <input type="password" name="pass" placeholder="8+ Characters" required />
                        </div>
                        <div class="submit">
                            <input type="submit" value="Register">
                            <!-- <button>Login</button> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Doubt</title>
    <link rel="stylesheet" href="./newQues.css">
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
                <form action="./postQues.php" method="post">
                    <div class='entry'>
                        <div class="e_title">Question Heading</div>
                        <input type="text" name="heading"> <br>
                    </div>
                    <div class='entry'>
                        <div class="e_title">Question Body</div>
                        <input type="text" name="body"> <br>
                    </div>
                    <div class='entry'>
                        <div class="e_title">Discipline</div>
                        <select name="cat" required>
                            <option value="" disabled selected hidden>Select Category</option>
                            <option value="cse">CSE</option>
                            <option value="ece">ECE</option>
                            <option value="me">Mech</option>
                            <option value="sm">SM</option>
                        </select> <br>
                    </div>
                    <div class="submit">
                        <input type="submit" value="Post">
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
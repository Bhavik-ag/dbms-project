<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Discussion Forum</title>
    <link rel="stylesheet" href="./indexStyle.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php
        include('./navbar.php');
    ?>

    <section class="flex-col w-full justify-center mt-10 mb-10">
        <?php
        include("./catnav.php");
        include("./conf.php");
        $sql = "select * from message where approved = 1";
        $res = mysqli_query($conn, $sql);
        while ($result = mysqli_fetch_assoc($res)) {
            echo
            '<div class="flex justify-center">
            <div class="rounded-xl border p-5 shadow-md bg-white m-3 w-4/5">
                <div class="flex w-full items-center justify-between border-b pb-3">
                    <div class="flex items-center space-x-3">
                        <div class="text-lg font-bold text-slate-700 cursor-pointer"><a href="/dbms-project/profile.php?rno='.$result['rollno'].'">@' . strtoupper($result['rollno']) . '</a></div>
                        </div>
                        <div class="flex items-center space-x-8">
                        <a href="/category.php/?cat='.strtolower($result['category']).'"><button class="rounded-2xl border hover:bg-gray-200 bg-neutral-100 px-3 py-1 text-xs font-semibold">'.strtoupper($result['category']).'</button></a>
                        <div class="text-xs text-neutral-500">' . $result['timeSt'] . '</div>
                    </div>
                    </div>

                <div class="mt-4 mb-6">
                    <div class="mb-3 text-xl font-bold">' . $result['heading'] . '</div>
                    <div class="flex justify-between">
                        <div class="text-lg text-neutral-800">' . $result['body'] . '</div>
                        <a class="float-right font-bold text-[#4e53c8]" href="./replies.php/?id='.$result['msgid'].'">Show More -></a>
                    </div>
                </div>
            </div>
        </div>';
        }
        ?>
    </section>

    <div class="overlay" id="divOne">
        <div class="wrapper">
            <!-- <h2>Please Fill up The Form</h2> -->
            <a class="close" href="#">&times;</a>
            <div class="content">
                <div class="container">
                    <form action="./postQues.php" method="post">
                        <div class='entry'>
                            <div class="e_title">Title</div>
                            <input name="heading" placeholder="Ques title" type="text">
                        </div>
                        <div class='entry'>
                            <div class="e_title">Body</div>
                            <textarea name="body" placeholder="Ques explanation" rows="6"></textarea>
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
                            <input type="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
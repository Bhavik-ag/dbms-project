<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Discussion Forum</title>
    <link rel="stylesheet" href="./adminDashboard.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <?php
        session_start();
        if (!isset($_SESSION['adminUserid'])) {
            header('location:/dbms-project/adminLogin.php');
        }
    ?>

    <?php
        include('./adminNavbar.php');
    ?>

    <section class="flex-col w-full justify-center mt-10 mb-10">
        <?php
        include("./conf.php");
        $sql = "select * from message where approved='0'";
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
                        <button class="rounded-2xl border hover:bg-gray-200 bg-neutral-100 px-3 py-1 text-xs font-semibold">'.strtoupper($result['category']).'</button></a>
                        <div class="text-xs text-neutral-500">' . $result['timeSt'] . '</div>
                    </div>
                    </div>

                <div class="mt-4 mb-6">
                    <div class="mb-3 text-xl font-bold">' . $result['heading'] . '</div>
                    <div class="flex justify-between">
                        <div class="text-lg text-neutral-800">' . $result['body'] . '</div>
                    </div>
                    <a class="rejBtn float-right font-bold" href="./rejectQues.php/?id='.$result['msgid'].'">Reject</a>
                    <a class="apprBtn float-right font-bold" href="./approveQues.php/?id='.$result['msgid'].'">Approve</a>
                </div>
            </div>
        </div>';
        }
        ?>
    </section>

    
</body>

</html>
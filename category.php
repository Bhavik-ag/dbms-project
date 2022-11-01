<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Discussion Forum</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php
        include('./navbar.php');
    ?>

    <section class="flex-col w-full justify-center mt-10">
        

        <?php
        include("./conf.php");
        $sql = "select * from Message where category ='".$_GET['cat']."'";
        $res = mysqli_query($conn, $sql);
        while ($result = mysqli_fetch_assoc($res)) {
            echo
            '<div class="flex justify-center">
            <div class="rounded-xl border p-5 shadow-md bg-white m-3 w-4/5">
                <div class="flex w-full items-center justify-between border-b pb-3">
                    <div class="flex items-center space-x-3">
                        <div class="text-lg font-bold text-slate-700 cursor-pointer">@' . $result['rollno'] . '</div>
                        </div>
                        <div class="flex items-center space-x-8">
                        <button class="rounded-2xl border hover:bg-gray-200 bg-neutral-100 px-3 py-1 text-xs font-semibold">'.strtoupper($result['category']).'</button>
                        <div class="text-xs text-neutral-500">' . $result['timeSt'] . '</div>
                    </div>
                    </div>

                <div class="mt-4 mb-6">
                    <div class="mb-3 text-xl font-bold">' . $result['heading'] . '</div>
                    <div class="text-lg text-neutral-800">' . $result['body'] . '</div>
                </div>
            </div>
        </div>';
        }
        ?>
    </section>
</body>

</html>
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


    <section class="flex-col w-full justify-center mt-10 mb-10">
        <div class="flex justify-center items-center">
            <div class="flex justify-end items-center m-3 w-4/5">
                <a class="button" href="#divOne"><button type="button" class="inline-block px-6 mx-2 py-2.5 bg-[#4e53c8] text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150">Add a reply</button></a>
            </div>
        </div>
        <?php
        include("./conf.php");

        $sql = "select * from message where msgid ='".$_GET['id']."'";
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
                            <div class="text-xs text-neutral-500">' . $result['timeSt'] . '</div>
                        </div>
                    </div>
                            
                    <div class="mt-4 mb-6">
                        <div class="mb-3 text-xl font-bold">' . $result['heading'] . '</div>
                        <div class="flex justify-flexend">
                            <div class="text-lg text-neutral-800">' . $result['body'] . '</div>
                        </div>
                    </div>
                </div>
            </div>';
                
        }

        $sql = "select * from replies where msgid ='".$_GET['id']."'";
        $res = mysqli_query($conn, $sql);

        while ($result = mysqli_fetch_assoc($res)) {
            echo
            '<div class="flex justify-center pl-20">
                <div class="rounded-xl border p-5 shadow-md bg-white m-3 w-9/12">
                    <div class="flex w-full items-center justify-between border-b pb-3">
                        <div class="flex items-center space-x-3">
                            <div class="text-lg font-bold text-slate-700 cursor-pointer">@' . substr($result['replyid'],0,8). '</div>
                        </div>
                        <div class="flex items-center space-x-8">
                            <div class="text-xs text-neutral-500">' . $result['timest'] . '</div>
                        </div>
                    </div>

                    <div class="mt-4 mb-6">
                        <div class="flex justify-between">
                            <div class="text-lg text-neutral-800">' . $result['body'] . '</div>
                        </div>
                    </div>
                </div>
            </div>';
            }
        ?>

        <div class="flex justify-center pl-20"> 
            <div class="rounded-xl border p-5 shadow-md bg-white m-3 w-9/12">
                <div class="flex w-full items-center justify-between border-b pb-3">
                    <div class="flex items-center space-x-3">
                        <div class="text-lg font-bold text-slate-700 cursor-pointer">Add a reply</div>
                    </div>
                </div>

                <div class="mt-4 mb-6">
                <form action="/dbms-project/postReply.php" method="post">
                        <div class='entry'>
                            <textarea name="body" class="!outline-none bg-slate-100 w-full p-5 rounded-md" placeholder="Add your reply here..." rows="6"></textarea>
                        </div>
                        <div class="submit">
                            <input type="hidden" name="msgId" value="<?php echo $_GET['id']; ?>">
                            <button type="submit" class="inline-block px-6 py-2.5 bg-[#4e53c8] text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-[#464bc6] hover:shadow-lg focus:bg-[#464bc6] focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
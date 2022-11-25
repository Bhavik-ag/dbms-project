<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
</head>
<body>
    
    <main class="profile-page">
        <section class="relative block h-500-px">
            <div class="absolute top-0 w-full h-full bg-center bg-cover" style="
                    background-image: url('https://images.unsplash.com/photo-1499336315816-097655dcfbda?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2710&amp;q=80');
                ">
            <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
            </div>
            <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px" style="transform: translateZ(0px)">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
            </div>
        </section>
        <section class="relative py-16 bg-blueGray-200">
            <div class="container mx-auto px-4">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64">
                <div class="px-6">
                
                <!-- <div class="mt-10 py-10 border-t border-blueGray-200 text-center"> -->
                    <div class="flex flex-wrap justify-center">
                    <div class="w-full lg:w-9/12 px-4">
                        <?php 
                            include('conf.php');
                            // session_start();
                            $rno = $_GET['rno'];
                            $sql = "select * from student where rollno='$rno'";
                            $sql2 = "select * from message where rollno='$rno' and approved = 1 order by timeSt desc";
                            $res = mysqli_query($conn, $sql);
                            if($result = mysqli_fetch_assoc($res)) {
                                echo "<div class='text-center mt-8 mb-4'>
                                    <h3 class='text-4xl font-semibold leading-normal mb-2 text-blueGray-700 mb-2'>"
                                        .ucwords($result['name']).
                                "</h3>
                                </div>";
                                echo "<div claas='mt-10' py-10 border-t border-blueGray-200 text-center '>
                                    <div class='flex flex-wrap justify-center'>
                                        <div class='w-full lg:w-9/12 px-4'>
                                            <div class='relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0'>
                                                <div class='flex-auto p-5 lg:p-10'>
                                                    <h4 class='text-2xl font-semibold text-center pb-4 '>Personal Information</h4>
                                                    <form>
                                                        <div class='relative w-full mb-3 '>
                                                            <div class='flex flex-wrap'>
                                                                <div class='w-full lg:w-6/12 px-4'>
                                                                    <div class='relative w-full mb-3'>
                                                                        Roll No. : ".$result['rollno']."
                                                                    </div>
                                                                </div>
                                                                <div class='w-full lg:w-6/12 px-4'>
                                                                    <div class='relative w-full mb-3'>
                                                                        Email : ".$result['email']."
                                                                    </div>
                                                                </div>
                                                                <div class='w-full lg:w-6/12 px-4'>
                                                                    <div class='relative w-full mb-3'>
                                                                        Discipline : ".strtoupper($result['discipline'])."
                                                                    </div>
                                                                </div>
                                                                <div class='w-full lg:w-6/12 px-4'>
                                                                    <div class='relative w-full mb-3'>
                                                                    Degree : ".strtoupper($result['degree'])."
                                                                    </div>
                                                                </div>
                                                                <div class='w-full lg:w-6/12 px-4'>
                                                                    <div class='relative w-full mb-3'>
                                                                        Year : ".$result['st_year']."
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>";
                            }
                            $res2 = mysqli_query($conn, $sql2);
                            echo "<div class='mt-5 py-4cd border-t border-blueGray-200 text-center'>
                                    <h3 class='text-4xl font-semibold leading-normal text-blueGray-700 mb-2'>Messages</h3>
                                </div>";
                            while($result2 = mysqli_fetch_assoc($res2)) {
                                echo "<div class='flex flex-col flex-wrap justify-center w-full '>
                                            <div> 
                                                <div class='relative flex flex-col min-w-0 break-words w-full mb-8 shadow-lg rounded-lg bg-blueGray-100 border-0'>
                                                    <div class='flex-auto p-5 lg:p-10'>
                                                            <div class='relative w-full mb-1 '>
                                                                <div class='flex flex-wrap'>
                                                                        <div class='relative w-full mb-1'>
                                                                            Message : ".$result2['body']."
                                                                        </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>";
                            }
                        ?>
                </div>
            </div>
            </div>
        </section>
        </main>
</body>
</html>
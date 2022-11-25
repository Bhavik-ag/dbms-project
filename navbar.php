<nav class="text-gray-600 bg-[#4e53c8] body-font">
    <div class="flex flex-wrap p-3 flex-col md:flex-row items-center">
        <div style="flex-grow: 1;"><a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" href="/dbms-project/index.php">
            <span class="ml-3 text-xl text-white">Students Discussion Forum</span>
        </a>
        </div>
        <div style="margin-right: 20px; color: white; display: flex; align-items: center;">
            <?php
            session_start();
            echo '<a href="/dbms-project/profile.php?rno='.$_SESSION['rno'].'"><img src="./assets/user.png" alt="userIcon" width="40px"> </a> <span style="margin-left: 10px;"></span>
                <a href="/dbms-project/profile.php?rno='.$_SESSION['rno'].'"> ' . $_SESSION['name'] . '</a>';
            ?>
        </div>
        <div>
            <a href="/dbms-project/logout.php"><button class="inline-flex md:ml-auto items-center bg-white border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Logout</button></a>
        </div>
    </div>
</nav> 
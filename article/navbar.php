<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

?>
<div class="divh">
    <div id="menuToggle">
        <input type="checkbox"/>
        <span></span>
        <span></span>
        <span></span>
        <ul id="menu">
            <a href="/"><li>หน้าหลัก</li></a>
            <a href="major-1.php"><li>การสร้างความมั่นใจทางเพศ</li></a>
            <a href="major-2.php"><li>เกี่ยวกับชาย</li></a>
            <a href="major-3.php"><li>เกี่ยวกับหญิง</li></a>
            <a href="major-4.php"><li>เพศสัมพันธ์</li></a>
            <li><hr></li>

            <?php
            if(!isset($_SESSION['login'])){

                    echo '
                    <a href="login.php">
                        <li>เข้าสู่ระบบ</li>
                    </a>
                    <a href="register.php">
                        <li>สมัครสมาชิก</li>
                    </a>';
                }
                else if($_SESSION['login']){
                    $username = $_SESSION['username'];
                    echo '
                    <a href="profile.php?username='.$username.'">
                        <li>'.$username.'</li>
                    </a>
                    <a href="backend/logout.php">
                        <li>ออกจากระบบ</li>
                    </a>
                    ';
            }
            ?>

        </ul>
    </div>
    <div class="head"><a class="logo" href="/">เพศศึกษา</a></div>
</div>



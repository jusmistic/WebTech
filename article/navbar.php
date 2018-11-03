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
            <?php
            if(!isset($_SESSION['login'])){

                    echo '
                    <a href="login.php">
                        <li>Login</li>
                    </a>
                    <a href="register.php">
                        <li>Register</li>
                    </a>';
                }
                else if($_SESSION['login']){
                    $username = $_SESSION['username'];
                    echo '
                    <a href="backend/profile.php?username='.$username.'">
                        <li>'.$username.'</li>
                    </a>
                    <a href="backend/logout.php">
                        <li>logout</li>
                    </a>
                    ';
            }
            ?>

        </ul>
    </div>
    <div class="head"><a class="logo" href="/">SS</a></div>
</div>



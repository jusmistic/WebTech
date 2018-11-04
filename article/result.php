<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <title></title>
</head>
<body style="background-color: #BFBCBC">
<?php
include('navbar.php');
?>
<div class="login">
    <form method="POST">
        <div class="imgcontainer">
            <img src="pic web/login.png" alt="Avatar" class="avatar">
        </div>
        <div class="container" style="text-align: center">
            <hr>
            <b><p>สวัสดี <?php echo $_SESSION['username']." คุณได้คะแนน ". $_GET['score']."/20" ?></p></b>
            <div class="exercise-group">
                <a class="exercise" href="/">กลับไปหน้าหลัก</a>
                <a class="score" href="/quiz.php"> ทำแบบฝึกหัดอีกครั้ง</a>
            </div>
        </div>
    </form>
</div>
</body>
</html>
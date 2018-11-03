<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">

    <link rel="stylesheet" href="style2.css">
    <title>Document</title>
</head>
<body>
<?php
include('navbar.php');
?>
<br>

<div class="container">
    <div class="header-group">
        <div class="header-img">
            <img src="pic web/header.jpg" width="100%">
        </div>
        <div class="header-text">
            <h3>ทำไมถึงต้องเรียนเรื่องเพศศึกษา?</h3>
            <p>เรื่องเพศจริงๆ แล้วเป็นเรื่องใกล้ตัวเราแต่สังคมไทยชอบมองว่าเป็น 'เรื่องของผู้ใหญ่' ทั้งที่จริงๆแล้วเรื่องเพศควรถูกสอนตั้งแต่เด็กและวันรุ่นเพื่อให้เข้าใจและป้องกันปัญหาที่จะเกิดขึ้นได้</p>
        </div>
    </div>
    <div class="body-container">
        <h2>หัวข้อที่น่าสนใจ</h2>
        <div class="grid">
            <article>
                <img src="pic web\teach.jpg" alt="Avatar" style="width:100%">
                <div class="text">
                    <a href="#"><h4>การสร้างความมั่นใจทางเพศ</h4></a>
                </div>
            </article>
            <article>
                <img src="pic web\man.jpg" alt="Avatar" style="width:100%">
                <div class="text">
                    <a href="#"><h4>เกี่ยวกับชาย</h4></a>
                </div>
            </article>
            <article>
                <img src="pic web\woman.jpg" alt="Avatar" style="width:100%">
                <div class="text">
                    <a href="#"><h4>เกี่ยวกับหญิง</h4></a>
                </div>
            </article>
            <article>
                <img src="pic web\sex.jpg" alt="Avatar" style="width:100%">
                <div class="text">
                    <a href="#"><h4>เพศสัมพันธ์</h4></a>
                </div>
            </article>
        </div>
        <div class="exercise-group">
            <a class="exercise" href="?refer=exercise">ทำแบบทดสอบ</a>
            <a class="score" href="#"> ตารางคะแนน</a>
        </div>
        <?php
        if($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET["refer"])){
            if(isset($_SESSION['login'])){
                header("Location: /quiz.html");
            }else{
                echo "<h3 style='text-align: center'>เข้าสู่ระบบก่อนทำแบบทดสอบ</h3>";
            }
        }

        ?>
    </div>
</div>

</body>
</html>

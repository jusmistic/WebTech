<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <title></title>
</head>
<body style="background-color: #BFBCBC">
<?php
    include('navbar.php');
?>
<div class="login">
    <form action="">
        <div class="imgcontainer">
            <img src="pic web/login.png" alt="Avatar" class="avatar">
        </div>
        <div class="container">
            <label for="uname"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="uname" required>

            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <label for="psw"><b>Confirm Password</b></label>
            <input type="password" placeholder="Re-Enter Password" name="psw" required>

            <button type="submit">Register</button>
        </div>
    </form>
</div>
</body>
</html>
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
    <form method="POST"">
        <div class="imgcontainer">
            <img src="pic web/login.png" alt="Avatar" class="avatar">
        </div>
        <div class="container">
            <label for="uname"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <label for="psw"><b>Confirm Password</b></label>
            <input type="password" placeholder="Re-Enter Password" name="password2" required>

            <button type="submit">Register</button>
            <?php
            include_once('backend/user.php');
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $user = new User();
                extract($_POST);
                $res = $user->register($username, $password, $email);
                if($res){
                    echo "Register Success You can login now";
                } else{
                    echo "Register error Try again later";
                }
            }
            ?>
        </div>
    </form>
</div>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label>Username: </label>
        <input name="username" type="text"><br>
        <label>Password: </label>
        <input name="password" type="password"><br>
        <label>Confirm Password: </label>
        <input name="password2" type="password"><br>
        <label>Email: </label>
        <input name="email" type="text"><br>
        <button type="submit">Register</button>
    </form>
    <?php
        include_once('verify.php');
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
</body>
</html>
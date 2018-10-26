<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ez</title>
</head>
<body>
    <div class="login">
        <form method="POST">
            <label>Username:</label>
            <input type='text' name='username'><br>
            <label>Password:</label>
            <input type='text' name='password'><br>
            <button type="submit">Login</button>
        </form>
    </div>
    <?php
    session_start();
    include_once('user.php');
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        include_once('user.php');
        $user = new User();
        extract($_POST);
        $login = $user->check_login($username, $password);
        if($login){
            echo "logged in <br>";
            echo "Hello ". $_SESSION['username']. '<br>';
        } else{
            echo "Login failed!<br>";
        }
    }
    ?>
</body>
</html>
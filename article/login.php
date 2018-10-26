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
            <form method="POST">
                <div class="imgcontainer">
                    <img src="pic web/login.png" alt="Avatar" class="avatar">
                </div>
                <div class="container">
                    <label for="username"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="username" required>

                    <label for="password"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" required>

                    <button type="submit">Login</button>

                    <?php
                    session_start();
                    include('backend/user.php');
                    if ($_SERVER['REQUEST_METHOD'] == "POST") {
                        $user = new User();
                        extract($_POST);
                        $login = $user->check_login($username, $password);
                        if ($login) {
                            echo "logged in <br>";
                            header('Location: /article');
                        } else {
                            echo "Login failed!<br>";
                        }
                    }
                    ?>
                </div>
            </form>
        </div>
    </body>
</html>
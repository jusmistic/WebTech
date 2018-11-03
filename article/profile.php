<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <meta charset="utf-8">
    <title></title>
</head>
    <body style="background-color: #BFBCBC">
<!--        --><?php
//        include('navbar.php');
//        ?>
        <div>
            
        </div>
        <div class="pro">
                <div class="profile" >
                    <img src="pic web/login.png" alt="Avatar" class="img1">
                    <!-- <div class="prodiv"> -->
                    <p class="protext">hello eiei</p>
                    <!-- </div> -->
                </div>
                <div class="containerpro">
                    <?php
                    session_start();
                    include("backend/user.php");
                    if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_SESSION["username"])){
                        $username = $_GET["username"];
                        if($_SESSION["username"] == $username && $_SESSION["login"]){
                            $check = new User();
                            $res = $check->getUserScore($username);

                            echo "Hello, ". $_SESSION["username"]. "<br>";
                            echo "<h2>Score</h2><br>";
                            echo "<table>
                    <tr>
                        <th>Submission</th>
                        <th>score</th>
                        <th>Submit Time</th>
                    </tr>";
                            foreach($res as $item){
                                echo "<tr>";
                                echo "<td>".$item['submission']. "</td>";
                                echo "<td>".$item['score']. "</td>";
                                echo "<td>".$item['submit_time']. "</td>";
                                echo "</tr>";

                            }
                            echo "</table>";
                        }else{
                            echo  "Error!";
                        }
                    }else{
                        echo "Error";
                    }

                    ?>
                </div>

        </div>
    </body>
</html>
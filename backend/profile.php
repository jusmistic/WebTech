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
<?php
    session_start();
    include("verify.php");
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
</body>
</html>
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
    <table>
        <tr>
            <th>Rank</th>
            <th>Username</th>
            <th>Score</th>
            <th>Submission ID</th>
            <th>Submit Time</th>
        </tr>

    <?php
        include('class.exercise.php');

        $scoreboard = new Exercise();
        $res = $scoreboard->get_score();
        $index = 1;
        foreach($res as $item){
            echo "<tr>";
            echo "<td>$index</td>";
            echo "<td>".$item['username']. "</td>";
            echo "<td>".$item['score']. "</td>";
            echo "<td>".$item['submission']. "</td>";
            echo "<td>".$item['submit_time']. "</td>";
            echo "</tr>";
            $index++;
        }
    ?>
    </table>
</body>
</html>
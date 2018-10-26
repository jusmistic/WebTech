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
    include('user.php');
    $user = new User();
    session_start();
    if($user->getSession()){
        echo "You are logged in " .$user->getUsername();
    } else{
        echo "You aren't logged in";
    }
    echo "<br>";


?>
    <form method="POST">
        <lable>1</lable><br>
        <div id="point1">
            <p><input type="radio" value="A" name="point1">A: ASDSAD</p>
            <p><input type="radio" value="B" name="point1">B: BBBB</p>
            <p><input type="radio" value="C" name="point1">C: AASDSADC</p>
            <p><input type="radio" value="D" name="point1">D: ASDSAD</p>
        </div>
        <lable>2</lable><br>
        <div id="point2">
            <p><input type="radio" value="A" name="point2">A: ASDSAD</p>
            <p><input type="radio" value="B" name="point2">B: BBBB</p>
            <p><input type="radio" value="C" name="point2">C: AASDSADC</p>
            <p><input type="radio" value="D" name="point2">D: ASDSAD</p>
        </div>
        <lable>3</lable><br>
        <div id="point3">
            <p><input type="radio" value="A" name="point3">A: ASDSAD</p>
            <p><input type="radio" value="B" name="point3">B: BBBB</p>
            <p><input type="radio" value="C" name="point3">C: AASDSADC</p>
            <p><input type="radio" value="D" name="point3">D: ASDSAD</p>
        </div>
        <lable>4</lable><br>
        <div id="point4">
            <p><input type="radio" value="A" name="point4">A: ASDSAD</p>
            <p><input type="radio" value="B" name="point4">B: BBBB</p>
            <p><input type="radio" value="C" name="point4">C: AASDSADC</p>
            <p><input type="radio" value="D" name="point4">D: ASDSAD</p>
        </div>
        <lable>5</lable><br>
        <div id="point5">
            <p><input type="radio" value="A" name="point5">A: ASDSAD</p>
            <p><input type="radio" value="B" name="point5">B: BBBB</p>
            <p><input type="radio" value="C" name="point5">C: AASDSADC</p>
            <p><input type="radio" value="D" name="point5">D: ASDSAD</p>
        </div>
        <lable>6</lable><br>
        <div id="point6">
            <p><input type="radio" value="A" name="point6">A: ASDSAD</p>
            <p><input type="radio" value="B" name="point6">B: BBBB</p>
            <p><input type="radio" value="C" name="point6">C: AASDSADC</p>
            <p><input type="radio" value="D" name="point6">D: ASDSAD</p>
        </div>
        <lable>7</lable><br>
        <div id="point7">
            <p><input type="radio" value="A" name="point7">A: ASDSAD</p>
            <p><input type="radio" value="B" name="point7">B: BBBB</p>
            <p><input type="radio" value="C" name="point7">C: AASDSADC</p>
            <p><input type="radio" value="D" name="point7">D: ASDSAD</p>
        </div>
        <lable>8</lable><br>
        <div id="point8">
            <p><input type="radio" value="A" name="point8">A: ASDSAD</p>
            <p><input type="radio" value="B" name="point8">B: BBBB</p>
            <p><input type="radio" value="C" name="point8">C: AASDSADC</p>
            <p><input type="radio" value="D" name="point8">D: ASDSAD</p>
        </div>
        <lable>9</lable><br>
        <div id="point9">
            <p><input type="radio" value="A" name="point9">A: ASDSAD</p>
            <p><input type="radio" value="B" name="point9">B: BBBB</p>
            <p><input type="radio" value="C" name="point9">C: AASDSADC</p>
            <p><input type="radio" value="D" name="point9">D: ASDSAD</p>
        </div>
        <lable>10</lable><br>
        <div id="point10">
            <p><input type="radio" value="A" name="point10">A: ASDSAD</p>
            <p><input type="radio" value="B" name="point10">B: BBBB</p>
            <p><input type="radio" value="C" name="point10">C: AASDSADC</p>
            <p><input type="radio" value="D" name="point10">D: ASDSAD</p>
        </div>
        <input type="hidden" value="set1" name="exercise_set">
        <button type="submit">Send</button>

    </form>
    <?php



        include('class.exercise.php');
        $exercise = new Exercise();
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            extract($_POST);

            $ans = $point1.$point2.$point3.$point4.$point5.$point6.$point7.$point8.$point9.$point10;
            $score = $exercise->check_score($ans, $exercise_set);

            if(!$score){
                echo "You answer error , Try again!";
            } else{
                echo "Your Score :".$score . "<br>";
                $res = $exercise->submit_score($score, $_SESSION['id'], $_SESSION["username"]);
                if(!$res){
                    echo "Score submit error!, Try again later";
                } else{
                    echo "Submitted your score.";
                }
            }

        }
    ?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link rel="stylesheet" type="text/css" href="navbar.css">

    <meta charset="utf-8">
    <title></title>
</head>
    <body style="background-color: #BFBCBC">
        <?php
        include('navbar.php');
        ?>
        <div class="quiz">
                <div class="profile" >
                    <p class="quizhead">QUIZ</p>
                </div>
        <form action="" method="POST" name="quiz">
            <!-- <div> -->
                <div class="quizdiv">
                    <p class="quiztext">1.ผู้ปกครองควรเริ่มสั่งสอนบุตรของตนในวัยใด
</p><br>
                    <input type="radio" name="ex1" value="1" required>ก.เด็ก<br>
                    <input type="radio" name="ex1" value="2">ข.วันรุ่น
<br>
                    <input type="radio" name="ex1" value="3">ค.ผู้ใหญ่
<br>
                    <input type="radio" name="ex1" value="4">ง.วัยใดก็ได้
<br>
                    <br><p class="quiztext">2.ควรให้เด็กชายพัฒนาด้านใดเป็นหลัก</p><br>
                    <input type="radio" name="ex2" value="1" required>ก.พัฒนากาย
<br>
                    <input type="radio" name="ex2" value="2">ข.พัฒนาใจ
<br>
                    <input type="radio" name="ex2" value="3">ค.พัฒนาความเป็นผู้นำ
<br>
                    <br><p class="quiztext">3.สาเหตุที่ออรัลเซ็กส์ได้รับความนิยมเพราะว่า
                    </p><br>
                    <input type="radio" name="ex3" value="1" required>ก.กระตุ้นอารมณ์มากกว่าปกติ
                    <br>
                    <input type="radio" name="ex3" value="2">ข.คิดว่าไม่มีโอกาสติดโรค
                    <br>
                    <input type="radio" name="ex3" value="3">ค.จะไม่มีการตั้งครรภ์แน่นอน
                    <br>
                    <input type="radio" name="ex3" value="4">ง.ทำตามสื่อบนอินเตอร์เน็ต
                    <br>
                    <br><p class="quiztext">4.ข้อใดผิดในเรื่องการเสี่ยงเป็นโรคHIV</p><br>
                    <input type="radio" name="ex4" value="1" required>ก.เราต้องได้รับเชื้อไวรัสเอชไอวีเข้าสู่ร่างกายในปริมาณมากพอ<br>
                    <input type="radio" name="ex4" value="2">ข.ใช้ชีวิตร่วมกับคนเป็นเชื้อHIV<br>
                    <input type="radio" name="ex4" value="3">ค.เชื้อเอชไอวีที่ติดต่อได้ต้องเป็นเชื้อที่อยู่ในสภาพแวดล้อมที่เหมาะสม<br>
                    <input type="radio" name="ex4" value="4">ง.ต้องมีช่องทางส่งต่อเชื้อได้โดยตรง<br>

                    <br><p class="quiztext">5.ผู้ปกครองควรสอนลูกถึงความแตกต่างของคนเราอย่างไร</p><br>
                    <input type="radio" name="ex5" value="1" required>ก.สอนให้รังเกียจคนที่ไม่สวยไม่หล่อ
<br>
                    <input type="radio" name="ex5" value="2">ข.สอนให้รังเกียจคนที่ต้องพบหมอจิตแพทย์
<br>
                    <input type="radio" name="ex5" value="3">ค.สอนให้ยอมรับตัวตนของคนอื่น
<br>
                    <input type="radio" name="ex5" value="4">ง.สอนให้ไม่รังเกียจคนเป็นโรค
<br>                
                    <br><p class="quiztext">6.ผู้ปกครองควรกีดกันลูกในเรื่องใด</p><br>
                    <input type="radio" name="ex6" value="1" required>ก.กีดกันไม่ให้ลูกมีแฟน<br>
                    <input type="radio" name="ex6" value="2">ข.กีดกันไม่ให้ลูกดูหนังโป๊<br>
                    <input type="radio" name="ex6" value="3">ค.กีดกันไม่ให้ลูกมีแนวโน้มเป็นเพศทางเลือก<br>
                    <input type="radio" name="ex6" value="4">ง.กีดกันไม่ให้ลูกใช้สิ่งเสพติด<br>

                    <br><p class="quiztext">7.ผู้ปกครองควรสั่งสอนให้คำแนะนำลูกอย่างไร

</p><br>
                    <input type="radio" name="ex7" value="1" required>ก.พูดด้วยน้ำเสียงโดยขึ้นอยู่กับเรื่องที่พูด
<br>
                    <input type="radio" name="ex7" value="2">ข.พูดด้วยเสียงราบเรียบไม่น่าเชื่อถือ
<br>
                    <input type="radio" name="ex7" value="3">ค.ตะคอกใส่ลูก
<br>
                    <input type="radio" name="ex7" value="4">ง.พูดด้วยน้ำเสียงนุ่มนวล
<br>
                    <br><p class="quiztext">8.ลูกๆควรทำอย่างไรเมื่อมีแฟน</p><br>
                    <input type="radio" name="ex8" value="1" required>ก.อวดลงโซเชี่ยล<br>
                    <input type="radio" name="ex8" value="2">ข.บอกผู้ปกครองให้ท่านรับรู้<br>
                    <input type="radio" name="ex8" value="3">ค.ใช้จ่ายฟุ่มเฟือยให้แฟน<br>
                    <input type="radio" name="ex8" value="4">ง.มีเพศสัมพันธ์โดยไม่ป้องกัน<br>

                    <br><p class="quiztext">9.เมื่ออวัยวะเพศชายเกิดการเฉียงต้องไปหาหมอไหม
</p><br>
                    <input type="radio" name="ex9" value="1" required>ก.ต้องไปหาเพราะผิดปกติ
<br>
                    <input type="radio" name="ex9" value="2">ข.ไม่ต้องหาเพราะเป็นธรรมชาติ
<br>
                    <input type="radio" name="ex9" value="3">ค.ขึ้นอยู่กับอาการ
<br>
                    <input type="radio" name="ex9" value="4">ง.ผิดทุกข้อ
<br>
                    <br><p class="quiztext">10.ข้อใดไม่ใช่สาเหตุที่ทำให้อสุจิหลั่งน้อยคือข้อใด</p><br>
                    <input type="radio" name="ex10" value="1" required>ก.อายุมาก<br>
                    <input type="radio" name="ex10" value="2">ข.สูบบุหรี่<br>
                    <input type="radio" name="ex10" value="3">ค.ดื่มเหล้า<br>
                    <input type="radio" name="ex10" value="4">ง.พักผ่อนน้อย<br>

                    <br><p class="quiztext">11.หากหลังมีเพศสัมพันธ์พบว่าถุงยางเกิดการรั่วควรทำอย่างไร
</p><br>
                    <input type="radio" name="ex11" value="1" required>ก.เตรียมตั้งชื่อลูก
<br>
                    <input type="radio" name="ex11" value="2">ข.ให้ผู้ชายกินยาคุมฉุกเฉิน
<br>
                    <input type="radio" name="ex11" value="3">ค.มีเพศสัมพันธ์อีกรอบโดยใช้ถุงยาง
<br>
                    <input type="radio" name="ex11" value="4">ง.ให้ผู้หญิงกินยาคุมฉุกเฉิน
<br>
                    <br><p class="quiztext">12.การฉีกซองถุงยางควรใช้อะไร</p><br>
                    <input type="radio" name="ex12" value="1" required>ก.มือ<br>
                    <input type="radio" name="ex12" value="2">ข.ฟัน<br>
                    <input type="radio" name="ex12" value="3">ค.กรรไกร<br>
                    <input type="radio" name="ex12" value="4">ง.คัตเตอร์<br>

                    <br><p class="quiztext">13.ก่อนสวมถุงยางควรทำอย่างไรก่อน
</p><br>
                    <input type="radio" name="ex13" value="1" required>ก.บอกผู้หญิงให้สวมให้
<br>
                    <input type="radio" name="ex13" value="2">ข.บีบปลายกะเปาะ
<br>
                    <input type="radio" name="ex13" value="3">ค.ยืดถุงยาง
<br>
                    <input type="radio" name="ex13" value="4">ง.ทดสอบว่าถุงยางรั่วหรือไม่
<br>
                    <br><p class="quiztext">14.การฝังคุมกำเนิดสามารถคุมได้กี่ปี</p><br>
                    <input type="radio" name="ex14" value="1" required>ก.1-3ปี<br>
                    <input type="radio" name="ex14" value="2">ข.2-4ปี<br>
                    <input type="radio" name="ex14" value="3">ค.3-5ปี<br>
                    <input type="radio" name="ex14" value="4">ง.ตลอดไป<br>

                    <br><p class="quiztext">15.การกินยาคุมกำเนิดแบบมาตรฐานควรกินอย่างไร
</p><br>
                    <input type="radio" name="ex15" value="1" required>ก.กินก่อนมีเพศสัมพันธ์
<br>
                    <input type="radio" name="ex15" value="2">ข.กินหลังมีเพศสัมพันธ์
<br>
                    <input type="radio" name="ex15" value="3">ค.กินเมื่ออยากกิน
<br>
                    <input type="radio" name="ex15" value="4">ง.กินอย่างต่อเนื่องหลังจากกินวันแรก
<br>
                    <br><p class="quiztext">16.การหลั่งนอกมีอันตรายอย่างไร</p><br>
                    <input type="radio" name="ex16" value="1" required>ก.อสุจิจะเลอะที่อื่นทำให้สกปรก<br>
                    <input type="radio" name="ex16" value="2">ข.มีสิทธิทำให้ตั้งครรภ์ได้<br>
                    <input type="radio" name="ex16" value="3">ค.ผู้ชายลำบากที่ต้องหลั่งนอก<br>
                    <input type="radio" name="ex16" value="4">ง.ไม่มีอันตรายใดๆ<br>

                    <br><p class="quiztext">17.สาเหตุที่การหลั่งนอกอันตรายคือ
</p><br>
                    <input type="radio" name="ex17" value="1" required>ก.อสุจิล็อตแรกมีสมรรถนะสูงเคลื่อนตัวเร็วทำให้การหลั่งนอกเป็นเรื่องยาก
<br>
                    <input type="radio" name="ex17" value="2">ข.ขณะมีเพศสัมพันธ์น้ำหล่อลื่นฝ่ายชายมีอสุจิปะปนด้วย
<br>
                    <input type="radio" name="ex17" value="3">ค.การหลั่งอสุจิใกล้ๆช่องคลอดมีสิทธิที่อสุจิจะเคลื่อนตัวไปหารังไข่ได้
<br>
                    <input type="radio" name="ex17" value="4">ง.ถูกทุกข้อ
<br>
                    <br><p class="quiztext">18.ข้อดีของการช่วยตัวเองข้อใดผิด</p><br>
                    <input type="radio" name="ex18" value="1" required>ก.สามารถทำได้ด้วยตัวเองที่ไหนก็ได้<br>
                    <input type="radio" name="ex18" value="2">ข.ไม่เสี่ยงต่อการเกิดการตั้งครรภ์<br>
                    <input type="radio" name="ex18" value="3">ค.สามารถจัดการกับอารมณ์ทางเพศได้<br>
                    <input type="radio" name="ex18" value="4">ง.ลดความเสี่ยงต่อการติดโรคทางเพศสัมพันธ์<br>

                    <br><p class="quiztext">19.ข้อดีของการดื่มแอลกอฮอล์ข้อใดถูกต้อง

</p><br>
                    <input type="radio" name="ex19" value="1" required>ก.ทำให้ยับยั้งชั่งใจได้น้อยลง
<br>
                    <input type="radio" name="ex19" value="2">ข.ทำให้ควบการหลั่งได้ถ้าดื่มในปริมาณพอเหมาะ
<br>
                    <input type="radio" name="ex19" value="3">ค.ลดประสิทธิภาพการแข็งตัวของอวัยวะเพศชาย
<br>
                    <input type="radio" name="ex19" value="4">ง.ทำให้ถึงจุดสุดยอดช้าขึ้น
<br>
                    <br><p class="quiztext">20.ข้อใดผิดเมื่อมีเพศสัมพันธ์ขณะที่ผู้หญิงเป็นประจำเดือน</p><br>
                    <input type="radio" name="ex20" value="1" required>ก.ปัญหาสารหล่อลื่นน้อยจะไม่มี<br>
                    <input type="radio" name="ex20" value="2">ข.ผู้หญิงอาจจะไวต่อการถูกกะตุ้นมากขึ้น<br>
                    <input type="radio" name="ex20" value="3">ค.เสี่ยงต่การติดโรคมากขึ้น<br>
                    <input type="radio" name="ex20" value="4">ง.จะไม่มีโอกาสตั้งครรภ์<br>


            </div>
            <div style="text-align: center;">
            <button class="butquiz">Submit</button>
            </div>
            </form>
            <?php



            include('backend/class.exercise.php');
            $exercise = new Exercise();
            if($_SERVER['REQUEST_METHOD'] == "POST" && $_SESSION['login']){
                $ans = '';
                for($i = 1; $i<=20; $i++){
                    $ans = $ans.$_POST['ex'.$i];
                }
                $score = $exercise->check_score($ans, $exercise_set);
                if(!$score){
                    echo "ไม่สามารถติดต่อกับฐานข้อมูลได้ ลองใหม่อีกครั้ง";
                } else{
                    echo "Your Score :".$score . "<br>";
                    $res = $exercise->submit_score($score, $_SESSION['id'], $_SESSION["username"]);
                    if(!$res){
                        echo "ไม่สามารถส่งคะแนนได้";
                    } else{
                        echo "ส่งคะแนนเสร็จสิ้น";
                        header("Location: /result?score=".$score);
                    }
                }

            }
            ?>
        </div>
    </body>
</html>
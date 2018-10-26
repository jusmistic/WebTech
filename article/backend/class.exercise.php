<?php
/**
 * Created by PhpStorm.
 * User: NoobMicrosoft
 * Date: 10/20/2018
 * Time: 8:04 AM
 */

class Exercise{
    private $db;
    private $score;
    public function __construct()
    {
        include('conn.php');
        $dbc = new mysqli($db_host,$db_user,$db_pass,$db_name);
        if($dbc->connect_errno){
            echo "Could not connect to database";
            exit;
        }
        $this->db = $dbc;

    }

    public function check_score($ans, $execise_set){
        $stm = "SELECT answer FROM exercise_set WHERE exercise='$execise_set'";
        $res = $this->db->query($stm);
        $row = NULL;
        $score = 0;

        if(!$res) {
            echo $this->db->error;
            return false;
            //can't query database
        }else{
            $row = $res->fetch_assoc();
            for($i=0;$i<strlen($row['answer']);$i++){
                if($row['answer'][$i] == $ans[$i]){
                    $score += 1;
                }
            }
            return $score;
        }
    }

    public function submit_score($score, $user_id, $username){
        $stm = "INSERT INTO `scoreboard` (`submission`, `score`, `user_id`, `username`, `submit_time`) VALUES (NULL, '$score', '$user_id', '$username', CURRENT_TIMESTAMP)";
        $res = $this->db->query($stm);
        if(!$res){
            return false;
        } return true;
    }
    public function get_score(){
        $stm = "SELECT * FROM `scoreboard` ORDER BY score DESC";
        $res = $this->db->query($stm);
        if(!$res) {
            return false;
        } return $res;
    }
}

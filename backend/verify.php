<?php
    class User{
        public $db;

        public function __construct()
        {
            include_once('conn.php');
            $dbc = new mysqli($db_host,$db_user,$db_pass,$db_name);
            if($dbc->connect_errno){
                echo "Could not connect to database";
                exit;
            }
            $this->db = $dbc;
        }
        public function register($username, $password, $email){
            if(empty($username) || empty($password) || empty($email)){
                return false;
            }
            $stm = "SELECT * FROM login where username='$username' OR email='$email'";
            $exist_row = $this->db->query($stm)->num_rows;

            //Check is user existed.
            if($exist_row == 0){
                $password = password_hash($password, PASSWORD_DEFAULT);
                $stm = "INSERT INTO `login` (`id`, `username`, `password`, `email`, `role`) VALUES (NULL, '$username', '$password', '$email', '100')";
                $this->db->query($stm);

                //database connection failed.
                if($this->db->errno){
//                    echo "Register Error try again later!!";
                    return false;
                } else{
//                    echo "Register Success!!";
                    return true;
                }
            } else {
                return false;
//                echo "Your username or email are used.";
            }
        }

        public  function check_login($username, $password){

            $stm = "SELECT * FROM login where username='$username'";
            $res = $this->db->query($stm);
            //User not found
            if($res->num_rows == 0){
//                echo "Error username not found !!";
                return false;
            }else if ($res->num_rows == 1){ //user found
                $row = $res->fetch_assoc();
                //login success
                if ($username == $row['username'] && password_verify($password, $row['password'])){
//                    echo "Login Success";
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['username'] = $username;
                    $_SESSION['login'] = true;
                    return true;
                //login not success
                }else {
//                    echo "Login Failed!";
                    return false;
                }
            } else{
                return false;
            }
        }
        //is logged in ?
        public function getSession(){
            if(isset($_SESSION['login'])) {
                return $_SESSION['login'];
            } else{
                return false;
            }
        }

        public function logout(){
            $_SESSION['login'] = false;
            session_destroy();
        }

        public function getId(){
            return $_SESSION['id'];
        }
        public function getUsername(){
            return $_SESSION['username'];
        }

        function getUserScore($username){

            $stm = "SELECT `submission`, `score`, `submit_time` FROM `scoreboard` WHERE username='$username'";
            $res = $this->db->query($stm);
            if(!$res) {
                return false;
            } return $res;


        }
    }
?>
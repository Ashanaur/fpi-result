<?php
    session_start();
    include "Main.php";
    class Db_auth extends Main
    {
        public function index(){
            if($_SESSION['user']>0){
                return true;
            }else{
                return false;
            }
        }
        public function set_session($uid){
            $this->userid = $uid;
            $_SESSION['user'] = $this->userid;
        }
        public function retrive($u){
            $this->username = $u;
            $this->sql = "SELECT * FROM user WHERE username = '$this->username'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                echo 'error';
            }
        }
    }
    ?>
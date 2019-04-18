<?php
    session_start();
    class Main{
        protected $host = 'localhost';
        protected $user = 'root';
        protected $pass = '';
        protected $db = 'result';
        protected $con;
        protected $result;
        
        //database connection here..
        public function __construct(){
            if(!isset($this->con)){
                $this->con = new mysqli($this->host,$this->user,$this->pass,$this->db);
                if(!$this->con){
                    $_SESSION['error'] = "Can not Connect Database";
                }
            }
            return $this->con;
        }
        public function __destruct(){
            $this->con->close();
        }
    }
?>
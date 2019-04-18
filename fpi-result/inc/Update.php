<?php
    include "Main.php";
    class Update extends Main
    {   
        protected $session;
        protected $semester;
        protected $shift;
        protected $roll;
        protected $gpa;
        protected $id;
        protected $sql;

        public function single_data($id){
            $this->id = $id;
            $this->sql = "SELECT * FROM `result_db` WHERE id = '$this->id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                echo 'erroe';
            }
        }
        public function db_update($session,$semester,$shift,$roll,$gpa,$id){
            $this->session = $session;
            $this->semester = $semester;
            $this->shift = $shift;
            $this->roll = $roll;
            $this->gpa = $gpa;
            $this->id = $id;

            $this->sql = "UPDATE `result_db` set db_session = '$this->session', db_semester = '$this->semester', db_shift = '$this->shift', db_roll = '$this->roll', db_gpa = '$this->gpa' WHERE id='$this->id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return true;
            }else{
                return false;
            }

        }
    }
    ?>
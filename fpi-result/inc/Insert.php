<?php 
    include 'Main.php';
    class Insert extends Main
    {
        protected $session;
        protected $semester;
        protected $shift;
        protected $roll;
        protected $gpa;
        protected $sql;

        //insert query here
        public function db_insert($session,$semester,$shift,$roll,$gpa)
        {
            $this->session = $session;
            $this->semester = $semester;
            $this->shift = $shift;
            $this->roll = $roll;
            $this->gpa = $gpa;

            $this->sql = "INSERT INTO `result_db`(`db_session`, `db_semester`, `db_shift`, `db_roll`, `db_gpa`) VALUES ('$this->session','$this->semester','$this->shift','$this->roll','$this->gpa')";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return true;
            }else{
                return false;
            }
        }

    }
    
?>
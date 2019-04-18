<?php
    include "Main.php";
    class Search extends Main
    {
        protected $session;
        protected $semester;
        protected $shift;
        protected $roll;
        protected $sql;

        public function search_result($session, $semester, $shift, $roll)
        {
            $this->session = $session;
            $this->semester = $semester;
            $this->shift = $shift;
            $this->roll = $roll;
            $this->sql = "SELECT db_gpa FROM `result_db` WHERE db_session = '$this->session' AND db_semester ='$this->semester' AND db_shift = '$this->shift' AND db_roll ='$this->roll'";

            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                echo "dcs";
                //$_SESSION['error'] = "Error Found";
            }  
        }
    }
    ?>
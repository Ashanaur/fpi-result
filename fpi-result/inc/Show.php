<?php
    include "Main.php";
    class Show extends Main
    {
        public function viewdata(){
            $this->sql = "SELECT * FROM  `result_db`";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                echo 'error'; 
            }
        }
    }
    ?>
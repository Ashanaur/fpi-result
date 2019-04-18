<?php 
    include 'Main.php';
    class Delete extends Main
    {
        protected $id;
        //Delete query here
        public function db_delete($id)
        {
            $this->id = $id;
            $this->sql = "DELETE FROM `result_db` WHERE id ='$this->id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){                
                return true;
            }else{
                return false;
            }
        }

    }
    
?>
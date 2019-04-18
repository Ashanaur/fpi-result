<?php
    include "inc/Update.php";
    include 'inc/Flash_data.php';
    $process = new Update;
    if(!isset($_POST['submit'])){
        header("location: edit.php");
    }else{
        $session = $_POST['session'];
        $semester = $_POST['semester'];
        $shift = $_POST['shift'];
        $roll = $_POST['roll'];
        $gpa = $_POST['gpa'];
        $id = $_POST['id'];
        $data = $process->db_update($session,$semester,$shift,$roll,$gpa,$id);
        if($data == true){
            Flass_data::update_msg('Updated Successfully!');
            header("location: edit.php?id=".$id);
        }else if($data == false){
            Flass_data::update_msg('Updated Error!');
            header("location: dataup.php?id=".$id);
        }
       

       }

       
    


?>
<?php
    include 'inc/Delete.php';
    include 'inc/Flash_data.php';
    $process = new Delete;
    $id = $_GET['id'];
    if($process->db_delete($id)){
        Flass_data::delete_msg('Data Successfully Deleted!');
        header('location:teacher-panel.php');
    }else{
        echo 'error';
    }
?>
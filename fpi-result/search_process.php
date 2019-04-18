<?php
    include "inc/search.php";
    $process = new Search;
    if(!isset($_POST['submit'])){
        header("location: search.php");
    }else{
        $session = $_POST['session'];
        $semester = $_POST['semester'];
        $shift = $_POST['shift'];
        $roll = $_POST['roll'];
        $data = $process->search_result($session,$semester,$shift,$roll);
       

       if($data->num_rows > 0)
       {
            while($row = $data->fetch_object())
            {
                $_SESSION['gpa'] = $row->db_gpa;

                if($_SESSION['gpa'] > 0){
                    header("location: result-passed.php");
                }else{
                    header("location: result-f.php");
                }
            }
       }else{
        header("location:result-f -not.php");
        }

    }

       
    


?>
<?php
    include "inc/Show.php";
    include "inc/Flash_data.php";
    $obj = new Show;
    $data = $obj->viewdata();
    if(!$_SESSION['user'] == true){
        header('location: login.php');
    }
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Student List - Faridpur Polytechnic Institute</title>

    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body class="no-bg">
    
    <div class="teacher-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="text-center mb-5"><a class="logout-btn" href="logout1.php?logout=1">Logout</a></h5>
                    <h3 class="text-center mb-4">All Student List</h3>
                </div>
                <div class="col-md-12">
                    <?php
                        if(isset($_SESSION['msg']['del'])){
                            ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong class="text-center d-block"><?php echo Flass_data::show_error();?></strong>
                            </div>
                            <?php
                        }
                    ?>
                    <table id="result-list" class="table table-striped table-bordered text-center" style="width:100%">
                        <thead>
                            <tr>
                                <th>Session</th>
                                <th>Semester</th>
                                <th>Shift</th>
                                <th>Roll</th>
                                <th>Grade</th>
                                <th>Created</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            if($data->num_rows>0){
                                while($row = $data->fetch_object()){
                                        
                                        
                                    ?>
                            <tr>
                                <td><?php echo $row->db_session;?></td>
                                <td><?php echo $row->db_semester;?></td>
                                <td><?php echo $row->db_shift;?></td>
                                <td><?php echo $row->db_roll;?></td>
                                <td><?php echo $row->db_gpa;?></td>
                                <td><?php echo $row->created;?></td>
                                <td><a href="edit.php?id=<?php echo $row->id;?>" target="_blank">Edit</a></td>
                                <td><a onclick="javascript: return confirm('Are You Sure? You want to Delete this Data.')" class="text-button" href="delete.php?id=<?php echo $row->id;?>">Delete</a></td>
                            </tr>
                        <?php
                                }
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

<?php
    include("footer.php");
?>
    </div>


    
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script>
    <script src="js/main.js"></script>

    
    <script>
        function daTaTable() {
            $('#result-list').DataTable();
        };
        daTaTable();
    </script>
    
</body>
</html>
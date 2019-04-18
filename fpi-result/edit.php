<?php
    include 'inc/Update.php';
    include "inc/Flash_data.php";
    $obj = new Update;
    $id = $_GET['id'];
    $data = $obj->single_data($id);
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
    <title>Edit Result - Faridpur Polytechnic Institute</title>

    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>    
        <?php
            if(isset($_SESSION['msg']['up'])){
                ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong class="text-center d-block"><?php echo Flass_data::show_error();?></strong>
                </div>
                <?php
            }
        ?>    
    <div class="result-wrapper">
        <form action="update_process.php" method="post">
            <?php 
                if($data->num_rows>0){
                    while($row = $data->fetch_object()){
                ?>
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-5 form-elmnt">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <select name='session' class="custom-select d-block" id="session" required>
                                        <option selected>Select Session</option>
                                        <option value="2016-17" <?php if($row->db_session == "2016-17"){echo "selected";}?>>2016-17</option>
                                        <option value="2017-18" <?php if($row->db_session == "2017-18"){echo "selected";}?>>2017-18</option>
                                        <option value="2018-19" <?php if($row->db_session == "2018-19"){echo "selected";}?>>2018-19</option>
                                        <option value="2019-20" <?php if($row->db_session == "2019-20"){echo "selected";}?>>2019-20</option>
                                        <option value="2020-21" <?php if($row->db_session == "2020-21"){echo "selected";}?>>2020-21</option>
                                        <option value="2021-22" <?php if($row->db_session == "2021-22"){echo "selected";}?>>2021-22</option>
                                        <option value="2022-23" <?php if($row->db_session == "2022-23"){echo "selected";}?>>2022-23</option>
                                        <option value="2023-24" <?php if($row->db_session == "2023-24"){echo "selected";}?>>2023-24</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <select name="semester" class="custom-select" id="semester" required>
                                        <option selected>Select Semester</option>
                                        <option value="1" <?php if($row->db_semester == "1"){echo "selected";}?>>First</option>
                                        <option value="2" <?php if($row->db_semester == "2"){echo "selected";}?>>Second</option>
                                        <option value="3" <?php if($row->db_semester == "3"){echo "selected";}?>>Third</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <select name="shift" class="custom-select" id="shift" required>
                                        <option selected>Select Shift</option>
                                        <option value="1" <?php if($row->db_shift == "1"){echo "selected";}?>>First</option>
                                        <option value="2" <?php if($row->db_shift == "2"){echo "selected";}?>>Second</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="number" value="<?php echo $row->db_roll;?>" max="999999" min="100000" name='roll' class="form-control mb-4" placeholder="Enter Roll Number" required>
                            </div>
                            <!-- <div class="col-md-12">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="up-result-point1" name="up-result-point" class="custom-control-input" checked>
                                    <label class="custom-control-label passed text-success" for="up-result-point1">Passed</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="up-result-point2" name="up-result-point" class="custom-control-input">
                                    <label class="custom-control-label not-passed text-danger" for="up-result-point2">Not Passed</label>
                                </div>
                            </div> -->
                            <div class="col-md-12 if-passed">
                                <input type="text" value="<?php echo $row->db_gpa;?>" name="gpa" class="form-control" placeholder="Enter Grade Point" required>
                                <small class="text-info">*Please Enter Only Grade Point - <span class="text-danger">ex:3.92</span> - (NO Plain Text)</small>
                            </div>
                            <input type="hidden" name='id' value="<?php echo $row->id;?>">
                            <div class="col-md-12 mt-4">
                                <button type="submit" name="submit" class="btn w-100">Submit Result</button>
                            </div>
                        </div>
                        <?php
                                    }
                                }
                            ?>
                    </div>
                </div>
            </div>
        </form>

        <?php
            include("footer.php");
        ?>
    </div>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>
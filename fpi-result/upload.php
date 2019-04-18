<?php
    include "inc/Insert.php";
    include "inc/Flash_data.php";
    $process = new Insert;
    if(!$_SESSION['user'] == true){
        header('location: login.php');
    }
    if(!isset($_POST['submit'])){
        //header('location:upload.php');
    }else{
        $session = $_POST['session'];
        $semester = $_POST['semester'];
        $shift = $_POST['shift'];
        $roll = $_POST['roll'];
        $gpa = $_POST['gpa'];
        $data = $process->db_insert($session,$semester,$shift,$roll,$gpa);
        
        if($data == true){
            Flass_data::insert_msg('Data Insert Successfull!');
                if(isset($_SESSION['msg']['in'])){
                    ?>
                    <div class="alert alert-success">
                        <strong class="text-center d-block"><?php echo Flass_data::show_error();?></strong>
                    </div>
                    <?php
                }
            }else if($data == false){
                Flass_data::insert_msg('Already Have This Data!');
                if(isset($_SESSION['msg']['in'])){
                ?>
                    <div class="alert alert-danger">
                        <strong class="text-center d-block"><?php echo Flass_data::show_error();?></strong>
                    </div>
                <?php 
            }                             
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Result - Faridpur Polytechnic Institute</title>

    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    
    <div class="result-wrapper">
        <form action="#" method="post">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-5 form-elmnt">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <select name='session' class="custom-select" id="session" required>
                                        <option selected>Select Session</option>
                                        <option value="2016-17">2016-17</option>
                                        <option value="2017-18">2017-18</option>
                                        <option value="2018-19">2018-19</option>
                                        <option value="2019-20">2019-20</option>
                                        <option value="2020-21">2020-21</option>
                                        <option value="2021-22">2021-22</option>
                                        <option value="2022-23">2022-23</option>
                                        <option value="2023-24">2023-24</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <select name="semester" class="custom-select" id="semester" required>
                                        <option selected>Select Semester</option>
                                        <option value="1">First</option>
                                        <option value="2">Second</option>
                                        <option value="3">Third</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <select name="shift" class="custom-select" id="shift" required>
                                        <option selected>Select Shift</option>
                                        <option value="1">First</option>
                                        <option value="2">Second</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="number" max="999999" min="100000" name='roll' class="form-control mb-4" placeholder="Enter Roll Number" required>
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
                                <input type="text" name="gpa" class="form-control" placeholder="Enter Grade Point" required>
                                <small class="text-info">*Please Enter Only Grade Point - <span class="text-danger">ex:3.92</span> - (NO Plain Text)</small>
                            </div>
                            <div class="col-md-12 mt-4">
                                <button type="submit" name="submit" class="btn w-100">Submit Result</button>
                            </div>
                        </div>
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
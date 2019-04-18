<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search Your Result - Faridpur Polytechnic Institute</title>

    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    
    <div class="result-wrapper">
        <form action="search_process.php" method="post">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-5">
                        <div class="left-side">
                            <h3>Online Result<br>Faridpur Polytechnic Institute</h3>
                        </div>
                    </div>
                    <div class="col-md-5 form-elmnt">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <select name='session' class="custom-select" id="session">
                                        <option selected>Select Your Session</option>
                                        <option value="2016-17">2016-17</option>
                                        <option value="2017-18">2017-18</option>
                                        <option value="2018-19">2018-19</option>
                                        <option value="2019-20">2019-20</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <select name="semester" class="custom-select" id="semester">
                                        <option selected>Select Your Semester</option>
                                        <option value="1">First</option>
                                        <option value="2">Second</option>
                                        <option value="3">Third</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <select name='shift' class="custom-select" id="shift">
                                        <option selected>Select Your Shift</option>
                                        <option value="1">First</option>
                                        <option value="2">Second</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control mb-4" name="roll" placeholder="Enter Your Roll Number">
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn w-100" name="submit">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    
</body>
</html>
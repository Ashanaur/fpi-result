<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Panel - Faridpur Polytechnic Institute</title>

    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    
    <div class="result-wrapper">
        <form action="auth.php" method="post">
        <?php
            if(isset($_GET['pass'])){
                $del = $_GET['pass'];
                if($del == 2){
                    ?>
                    <div class="alert alert-danger">
                        <strong class="text-center d-block text-danger">Your username and password is not correct!</strong>
                    </div> 
                <?php
                }
            }
        ?>
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-4 form-elmnt">
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" name="user" class="form-control mb-4" placeholder="User Name">
                            </div>
                            <div class="col-md-12">
                                <input type="password" name="pass" class="form-control mb-4" placeholder="Password">
                            </div>
                            <div class="col-md-12">
                                <button name="submit" type="submit" class="btn w-100">Login</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/main.js"></script> 
</body>
</html>
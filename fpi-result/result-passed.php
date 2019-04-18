<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>You Passed Your Exam - Faridpur Polytechnic Institute</title>

    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body class="no-bg">
    
    <div class="result-wrapper">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-6">
                    <div class="result-status-wrap passed-wrap">
                        <h2>Congratulations</h2>
                        <p>You Passed Your Exam</p>
                        <h4>Your Grade</h4>
                        <h2 class="mt-3"> <?php echo $_SESSION['gpa'] ?> </h2>

                        <a class="btn" href="search.php">Search Another Result</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</body>
</html>
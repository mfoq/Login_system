<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login System in PHP</title>
</head>
<body style="background-color:#ccc;">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark ">
        <div class="container">
            <a href="../index.php" class="navbar-brand"><h3>Login System</h3></a>
            
            <div class="collapse navbar-collapse ">
                <ul class="nav navbar ms-auto">

                <?php

                if(isset($_SESSION['U_D'])){
                    
                    echo ' <form action="logout.php" method="POST">
                              <li class="nav-item"><button type="submit" name="logout" class="btn btn-outline-light">Logout</button></li>
                           </form>';
                }else{
                    echo ' <li class="nav-item"><a href="logdesign.php" class="btn btn-outline-light">Login</a></li>
                           <li class="nav-item"><a href="signdesign.php" class="btn btn-outline-light ms-3">Sign up</a></li>' ;
                }
                
                ?>

                </ul>
            </div>
            
        </div>
    </nav>
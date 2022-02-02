<?php

    $con = mysqli_connect('localhost','root','','usersystem');
    
    if(!$con){
        die('connection Error'.mysqli_error());
    }
    
?>
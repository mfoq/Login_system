<?php

    session_start();

    require_once('connection.php');

    $User = $_POST['UserName'];
    $Pass = $_POST['password'];

    if(isset($_POST['login'])){

        if(empty($User) || empty($Pass)){
            header('location:../logdesign.php?Empty');
            exit();

        }else {
            $UserName = mysqli_real_escape_string($con,$_POST['UserName']);
            $Password = mysqli_real_escape_string($con,$_POST['password']);

            $query = "select * from userlogin where UserName='".$UserName."' or Email='".$UserName."'";
            $result = mysqli_query($con,$query);

            if($row=mysqli_fetch_assoc($result)){

                $HashPass = password_verify($Password,$row['Password']);
                
                if($HashPass == false){
                    header('location:../logdesign.php?P_Invalid');
                    exit();

                }elseif($HashPass == true){
                    $_SESSION['U_D']=$row['ID'];
                    $_SESSION['UName']=$row['FName'];
                    $_SESSION['LName']=$row['LName'];
                    $_SESSION['Email']=$row['Email'];
                    $_SESSION['UserName']=$row['UserName'];
                    $_SESSION['Password']=$row['Password'];
                    
                    header('location:account.php?Welcome');
                    exit();
                }

            } else {
                header('location:../logdesign.php?U_Invalid');
                exit();
            }
        }

    } else {
        header('location:../logdesign.php');
        exit();
    }

?>
<?php

    require_once('connection.php');

    if(isset($_POST['signup'])){
        
        if(empty($_POST['FName']) || empty($_POST['LName']) || empty($_POST['Email']) ||
            empty($_POST['UserName']) || empty($_POST['password'])){

                header('location:../signdesign.php?empty');

            } else {
             /*طبعا هون عملت حركت السكيب سترنج عشان احول كل اشي لسترنج واذا اليوزر دخل اي رموز غريبه ما يخربلي الداتا بيز
              لأنه ممكن بسبب هاي المشكله تسببلي حذف للداتا بيز كامله*/
                $FName = mysqli_real_escape_string($con,$_POST['FName']);
                $LName = mysqli_real_escape_string($con,$_POST['LName']);
                $Email = mysqli_real_escape_string($con,$_POST['Email']);
                $UserName = mysqli_real_escape_string($con,$_POST['UserName']);
                $Password = mysqli_real_escape_string($con,$_POST['password']);

                if(!preg_match("/^[a-zA-Z]*$/",$FName) || !preg_match("/^[a-zA-Z]*$/",$LName)){
                    header('location: ../signdesign.php?invalid');
                    exit();

                }else {
                        if(!filter_var($Email,FILTER_VALIDATE_EMAIL)){
                            header('location: ../signdesign.php?VEmail');
                            exit();
                        }else {
                            $query = "select * from userlogin where UserName='".$UserName."'";
                            $result = mysqli_query($con,$query);

                            if(mysqli_fetch_assoc($result)){
                                header('location: ../signdesign.php?User');
                                exit();

                            } else {
                                $query = "select * from userlogin weher Email='".$Email."'";
                                $result = mysqli_query($con,$query);

                                if(mysqli_fetch_assoc($result)){
                                    header('location: ../signdesign.php?Email');
                                    exit();

                                } else {
                                    $Hash = password_hash($Password,PASSWORD_DEFAULT);
                                    $query = "insert into userlogin (FName,LName,Email,UserName,Password) values ('$FName','$LName','$Email','$UserName','$Hash')";
                                    $result = mysqli_query($con,$query);
                                    header('location: ../signdesign.php?success');
                                    exit();     
                                    
                                   
                                    }
                            }
                        }
                }
            }

    } else {
        header('location:../index.php');
        exit();
    }

?>
<?php require_once('header.php'); ?>

<div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card bg-light mt-5">
                    
                    <div class="card-titel bg-primary text-white">
                        <h3 class="text-center py-4">SignUp Form</h3>
                    </div>
                    <!--Display Error if Fields is empty -->
                    <?php 
                       
                        if(isset($_GET['empty'])){
                            $Msg=$_GET['empty'];
                            $Msg="Please Fill in The Blanks";
                        
                    ?>

                    <div class="alert alert-danger mt-2 text-center"><?php echo $Msg; ?></div>

                    <?php

                        }
                    ?>

                    <!--Display Error if Fields have invalid Characters -->
                    <?php 
                       
                       if(isset($_GET['invalid'])){
                           $Msg=$_GET['invalid'];
                           $Msg="illegal characters";
                       
                   ?>

                   <div class="alert alert-danger mt-2 text-center"><?php echo $Msg; ?></div>

                   <?php

                       }
                   ?>

                   <!--Display Error if Email  is incorrect  -->
                   <?php 
                       
                       if(isset($_GET['VEmail'])){
                           $Msg=$_GET['VEmail'];
                           $Msg="Invalid Email";
                       
                   ?>

                   <div class="alert alert-danger mt-2 text-center"><?php echo $Msg; ?></div>

                   <?php

                       }
                   ?>


                <!--Display Error if username  is exist  -->
                <?php 
                       
                       if(isset($_GET['User'])){
                           $Msg=$_GET['User'];
                           $Msg="User name is Aleady Taken";
                       
                ?>

                   <div class="alert alert-danger mt-2 text-center"><?php echo $Msg; ?></div>

                <?php

                       }
                ?>
                <!--Display Error if username  is exist  -->
                <?php 
                       
                       if(isset($_GET['Email'])){
                           $Msg=$_GET['Email'];
                           $Msg="Email name is Already Taken";
                       
                ?>

                   <div class="alert alert-danger mt-2 text-center"><?php echo $Msg; ?></div>

                <?php

                       }
                ?>

                <!--Display Success message if registration is done -->
                <?php 
                       
                       if(isset($_GET['success'])){
                           $Msg=$_GET['success'];
                           $Msg="You have Successfully registerd";
                ?>

                   <div class="alert alert-success mt-2 text-center"><?php echo $Msg; ?></div>

                <?php

                       }
                ?>

                    <div class="card-body">
                        <form action="includes/signup.php" method="POST">
                        <input type="text" name="FName" placeholder="First Name" class="form-control my-2">
                        <input type="text" name="LName" placeholder="Last Name" class="form-control my-2">
                        <input type="text" name="Email" placeholder="Email" class="form-control my-2">
                        <input type="text" name="UserName" placeholder="User Name" class="form-control my-2">
                        <input type="password" name="password" placeholder="Enter password" class="form-control my-2">
                            <button class="btn btn-success" name="signup">Sign up</button>
                        </form>
                    </div>
                </div>
            </div>
       </div>
</div>

<?php require_once('footer.php'); ?>


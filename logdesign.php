<?php require_once('header.php'); ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card bg-light mt-5">

                    <div class="card-titel bg-primary text-white">
                        <h3 class="text-center py-4">Login Form</h3>
                    </div>

                    <!--If the input field is empty at least one-->
                    <?php 

                        if(isset($_GET['Empty'])){
                            $Msg=$_GET['Empty'];
                            $Msg = "Please Fill in the blanks";
                            

                    ?>
                
                    <div class="alert alert-danger text-center"><?php echo $Msg;?></div>
                    
                    <?php
                        }
                    ?>

                    <!-- IF User Name is Invalid -->
                    <?php 

                    if(isset($_GET['U_Invalid'])){
                        $Msg=$_GET['U_Invalid'];
                        $Msg = "Invalid User";
                    ?>

                    <div class="alert alert-danger text-center"><?php echo $Msg;?></div>

                    <?php
                    }
                    ?>

                    <!-- if Password doesn't match -->
                    <?php 

                    if(isset($_GET['P_Invalid'])){
                        $Msg=$_GET['P_Invalid'];
                        $Msg = "Invalid Password";
                    ?>

                    <div class="alert alert-danger text-center"><?php echo $Msg;?></div>

                    <?php
                    }
                    ?>

                    <div class="card-body">
                        <form action="includes/login.php" method="POST">
                        <input type="text" name="UserName" placeholder="Enter User Name or Email" class="form-control my-2">
                        <input type="password" name="password" placeholder="Enter password" class="form-control my-2">
                        <button class="btn btn-success" name="login">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require_once('footer.php'); ?>


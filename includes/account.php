<?php 

session_start();

require_once('../header.php');
    
if(isset($_SESSION['U_D'])){

    echo '<div class="display-4 text-center mt-5"> You Have successfully loged in </div>';

}else {
        header('location: ../logdesign.php');
}

require_once('../footer.php');
?>
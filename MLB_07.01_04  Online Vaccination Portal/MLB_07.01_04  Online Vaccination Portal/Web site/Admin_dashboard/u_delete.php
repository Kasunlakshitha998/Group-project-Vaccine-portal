<?php   require '..\config.php';  ?>

<!--cheack admin already login the system-->
<?php 
    session_start();
    if($_SESSION['login'] != true ){
        header("location: ..\login.php");
    }
    else{
        //echo "welcome" . $_SESSION['setusername'];
    }
?>

<!--Delete account-->
<?php

    if(isset($_GET['user_id'])){

        $user_id = $_GET['user_id'];
        $query = "DELETE FROM vaccine_user WHERE user_id = $user_id LIMIT 1";

        $deleted = mysqli_query($conn, $query);

        if($deleted){
            //redirect to the UMS page
            header('location:UMS.php');    
        }
        else{
            //not deleted
        }
    }
    else{        
    }

    mysqli_close($conn);

?>

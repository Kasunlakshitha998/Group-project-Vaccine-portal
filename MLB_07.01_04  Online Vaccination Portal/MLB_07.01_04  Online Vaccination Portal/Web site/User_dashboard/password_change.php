<?php 
    session_start();

    require '..\config.php';

    if($_SESSION['login'] != true ){
        header("location: ..\login.php");
    }
    else{
        //echo "welcome" . $_SESSION['setusername'];
    }
?>

<?php

require '..\config.php';

if(isset($_POST['submit'])){

    $pass = $_POST['pass'];
    $npass = $_POST['npass'];
    $cpass = $_POST['cpass'];
    $user_id = $_SESSION['userid'];

    $sql = "UPDATE vaccine_user SET pass = '$npass', cpass = '$cpass' WHERE user_id = '$user_id' ";

    if(mysqli_query($conn, $sql)){
        header('location:profile.php');
    }
    else{

    }

} 

?>
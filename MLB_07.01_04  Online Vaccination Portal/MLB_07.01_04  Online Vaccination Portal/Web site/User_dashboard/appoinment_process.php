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

    $userid = $_SESSION['userid'];
    $name = $_POST['name'];
    $number = $_POST['number'];
    $v_name = $_POST['vaccine_name'];
    $age = $_POST['age'];
    $u_address = $_POST['user_address'];
    $s_date = $_POST['s_date'];
    $center = $_POST['center'];
    $physician = $_POST['physician'];
    
      
    $sql1 = "INSERT INTO appoinments(user_id, patient_name, phone_number, vaccine_type,  age, user_address, order_date, vaccine_center, physician) VALUES('$userid', '$name', '$number', '$v_name', '$age', '$u_address', '$s_date', '$center', '$physician')";
    if(mysqli_query($conn,$sql1)){

        header('location:appointment.php');
        echo "<script>alert('Appoinment successfully Submited')</script>";
    }
    else{

        echo"<script>alert('error in insertion')</script>";
    }
        
}
else{
    
}

?>
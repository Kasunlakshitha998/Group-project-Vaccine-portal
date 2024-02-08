<?php
require("..\config.php");

if(isset($_POST['submit'])){
    $change = $_POST['status'];
    $v_id = $_POST['id'];

    $sql = "UPDATE appoinments SET status = '$change' WHERE vaccine_ref = $v_id ";
    $resualt = mysqli_query($conn, $sql);

    if($resualt){
        //echo"<script>alert('Successfully Updated')</script>";
        header('location:h_provider.php');
    }
    else{
        echo"<script>alert('error')</script>";
    }


}else{

    echo "hoohohoho";
}


?>
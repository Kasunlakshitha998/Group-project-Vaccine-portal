<?php   require '..\config.php';  ?>

<!--cheack admin already login the system-->
<?php 
    session_start();
    if( $_SESSION['login'] != true ){
        header("location: ..\login.php");
    }
    else{
        //echo "welcome" . $_SESSION['setusername'];
    }
?>

<!--admin logout set-->
<?php
    if(isset($_POST['logout'])){
        session_unset();
        session_destroy();
        header("location:..\login.php");
        exit;
    }
?>

<!--Add new account-->
<?php
    $error ="";

    if(isset($_POST['submit'])){

        $name = $_POST['fName'];
        $number = $_POST['Number'];
        $email = $_POST['Email'];
        $userName = $_POST['Username'];
        $pass = $_POST['Password'];
        $type = $_POST['u_type'];

       //cheak email is already exit
        $query= mysqli_query($conn,"SELECT * FROM vaccine_user WHERE email = '$email'");
        $query1= mysqli_query($conn,"SELECT * FROM vaccine_user WHERE user_name = '$userName'");

        if(mysqli_num_rows($query) > 0){
            $error = "Email is already exists!";
        }
        else if(mysqli_num_rows($query1) > 0){
            $error = "Username is already exists!";

        }
        else{
            
            $sql1 = "INSERT INTO vaccine_user(fName, pNumber, email, user_name,  pass, user_type) VALUES('$name', '$number', '$email', '$userName', '$pass', '$type')";

            if(mysqli_query($conn,$sql1)){

                echo "<script>alert('record inserted successfully')</script>";
                
            }
            else{
                echo"<script>alert('error in insertion')</script>";
            }
        }    
    }
    else{       
    }

?>

<!--count-->
<?php

    $result = mysqli_query($conn, "SELECT * FROM vaccine_user WHERE user_type='user' ");
    $total_useres = mysqli_num_rows($result);

    $result1 = mysqli_query($conn, "SELECT * FROM vaccine_user WHERE user_type='HPadmin' ");
    $total_providers = mysqli_num_rows($result1);   
    
    $result3 = mysqli_query($conn, "SELECT * FROM appoinments WHERE status = 'pending' OR status ='complete'");
    $total_appoint = mysqli_num_rows($result3); 

    mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/cb0dbb7928.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Styles/styles.css">
    <title>ADMIN</title>
</head>
<body>
<div class="nav">
    <header>
        <ul>
            <img class="nav_logo" src="Image/L0G0.svg" alt="profile_photo">
            
            <!--admin name display-->
            <!--<p class="welcome_msg" > <?php //echo "" . $_SESSION['setusername'] ?></p>-->
            <li><a class="active" href="admin.php">Dashboard</a></li>
            <li><a href="UMS.php">Customer</a></li>
            <li><a href="HPMS.php">Staff</a></li>              
        </ul>
    </header>
</div>
<div class="content" >
        <div class="main_head">
            <h2>Admin Dashboard</h2>
            <form action="#" method="POST">
                <input class="logout" type="submit" name="logout" value="Log out"  >
            </form>
        </div>
    <div class="field">    
        <div class="field1">
            <h2>Add New Member</h2>
            <form action="admin.php" method="POST">
                <input type="text" name="fName" placeholder="Name" required> 
                <input type="text" name="Number" placeholder="Phone Number" maxlength="10" required><br><br>
                <input type="email" name="Email" placeholder="Email" required>
                <input type="text" name="Username" placeholder="Username" required ><br><br>
                <input type="password" name="Password" class="pass" placeholder="Password" maxlength="15" required> <br> <br>
                <p>User type 
                    <select name="u_type" id="">
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                        <option value="HPadmin">Doctor</option>
                    </select>
                </p> <br>
                <!--dispaly in errors-->
                <?php if($error){
                    echo "<div class='error'> <p>{$error} </p></div>" ; 
                } ?>
                <input class="add"  name="submit" type="submit" value="Add New Member">
            </form>
        </div>
        <div class="field2">
            <h2>Total Customer</h2>
            <p> <i class="fa-solid fa-users"></i> <span> <?php echo $total_useres ?></span></p>
        </div>

        <div class="field3">
            <h2>Total Staff</h2>
            <p><i class="fa-sharp fa-solid fa-users"></i> <span> <?php echo $total_providers ?></span></p>
        </div>

        <div class="field4">
            <h2>Total Appointment</h2>
            <p><i class="fa-solid fa-calendar-check"></i> <span> <?php echo $total_appoint ?></span></p>
        </div>
    </div>    
</div>   
</body>
</html>
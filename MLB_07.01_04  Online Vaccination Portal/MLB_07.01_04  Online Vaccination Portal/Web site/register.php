<?php require ('config.php'); ?>

<?php

    $error ="";
    $name = '';
    $number = '';
    $email = '';
    $userName ='';

    if(isset($_POST['Submit'])){

        $name = $_POST['fName'];
        $number = $_POST['Number'];
        $email = $_POST['Email'];
        $userName = $_POST['Username'];
        $pass = $_POST['Password'];
        $cpass = $_POST['cPassword'];

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
            
            $sql1 = "INSERT INTO vaccine_user(fName, pNumber, email, user_name,  pass, cpass) VALUES('$name', '$number', '$email', '$userName', '$pass', '$cpass')";

            if(mysqli_query($conn,$sql1)){

                //echo "<script>alert('record inserted successfully')</script>";
                header("Location: login.php");
            }
            else{
                echo"<script>alert('error in insertion')</script>";
            }
        }    

    }
    else{
        
    }
    
    mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <script src="https://kit.fontawesome.com/cb0dbb7928.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Styles/register_style.css">
</head>
<body>   
<div class="conteiner">
    <div class="image_group">
        <img src="Image/s.jpg" alt="img">
    </div>

    <div class="form_boxr">
        <h1>Register Now</h1>
        
        <?php if($error){
            echo "<div class='error'> <p>{$error} </p></div>" ; 
        } ?>
        
        <form action="#" method="POST">
            <div class="input_group">
                <div class="input_field">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="fName" placeholder="Name" required autofocus value = <?php echo $name ?>>
                </div>

                <div class="input_field">
                    <i class="fa-solid fa-phone"></i>
                    <input type="text" name="Number" placeholder="Phone Number" required maxlength="10" value = <?php echo $number ?> >
                </div>

                <div class="input_field">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" name="Email" placeholder="Email" required value = <?php echo $email ?>>
                </div>

                <div class="input_field">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="Username" placeholder="Username" required value = <?php echo $userName ?>>
                </div>

                <div class="input_field">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" id="pass" name="Password" placeholder="Password" required maxlength="10">
                    <i onclick="show()" id="eye" class="fa-solid fa-eye"></i>
                </div>

                <div class="input_field">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" id="cpass" name="cPassword" placeholder="Confirm Password" required maxlength="10" >
                    <i onclick="cshow()" id="eye" class="fa-solid fa-eye"></i>
                </div>

                <div class="check_box">
                    <p><input type="checkbox" class="chekbox" onclick="enableButton()" id="checkbox" > I accept all <a href="">terms & conditions</a></p>
                </div>

                <div class="inpiut_field">
                    <input onclick="checkpassword()" name="Submit" id="submit" class="btn_register" type="submit" value="Register" disabled>
                </div>
            </div>
        </form>

        <div class="login_form">
            <p>Already have an account?<a href="login.php"> Login now </a></p>
        </div>
    </div>
</div>
<script src="JS/javascript.js"></script>
</html>
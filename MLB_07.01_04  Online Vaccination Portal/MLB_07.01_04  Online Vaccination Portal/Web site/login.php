<?php require('config.php'); ?>

<?php

    $errors = '';
    if(isset($_POST['submit'])){

        $username = $_POST['Username'];
        $pass = $_POST['Password'];


        $query = "SELECT * FROM vaccine_user WHERE user_name = '{$username}' AND pass = '{$pass}' LIMIT 1";

        $result_set = mysqli_query($conn, $query);
        //get user other valuse
        $row = mysqli_fetch_array($result_set);

        if($result_set){

            //quary successfull
             

            if(mysqli_num_rows($result_set) == 1 ){

                $userid = $row['user_id'];
                $email = $row['email'];

                session_start();
                $_SESSION['login'] = true;
                $_SESSION['setusername'] = $username;
                $_SESSION['userid'] = $userid;
                $_SESSION['email'] = $email;
                //valid user found
                //check user or admin

                if($row['user_type'] == "user"){

                    
                    header("location: User_dashboard/appointment.php");

                }
                elseif( $row['user_type'] == "admin" ) {

                    header("location: Admin_dashboard/admin.php");

                }
                elseif( $row['user_type'] == "HPadmin" ) {

                    header("location: Healthcare_dashboard/h_provider.php");

                }
            }
            else{
                $errors = "Invalid Username or Password!";
   
            }
        }
        else{
            $errors = "Invalid Username or Password!";

        }
    }else{
        //echo "sumit button not press";
    }
    
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <script src="https://kit.fontawesome.com/cb0dbb7928.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Styles/Login_Styles.css">
</head>
<body>
<div class="conteiner">
    <!--<div class="image_group">
        <img src="Image\diagnose-doctor-medicine-health-wellness-concept.jpg" alt="img">
    </div>-->

    <div class="form_box">
        <h1>Login</h1>
        <h4>Login with your Username and Password</h4>
        <?php if($errors){
            echo "<div class='error'> <p>{$errors} </p></div>" ; 
        } ?>

        <form action="#" method="POST">
            <div class="input_group">

                <div class="input_field">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="Username" placeholder="Username" required autofocus>
                </div>

                <div class="input_field">
                    <i class="fa-solid fa-lock"></i>
                    <input id="pass" type="password" name="Password" placeholder="Password" required >
                    <i onclick="show()" id="eye" class="fa-solid fa-eye"></i>
                </div>

                <div class="inpiut_field">
                    <input class="btn_login" type="submit" name="submit"  value="LOGIN">
                </div>

            </div>
            <p>Don't have an account?<a href="register.php">Register</a></p>
        </form>
    </div>
</div>

<script src="JS/javascript.js"></script>
</body>
</html>
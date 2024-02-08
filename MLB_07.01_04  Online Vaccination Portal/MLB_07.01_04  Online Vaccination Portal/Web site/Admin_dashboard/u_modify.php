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

<!--Add new account-->
<?php

    $error ="";

    $user_id="";
    $fName="";
    $Number= '';
    $Email= '';
    $userName= '';
    $Password='';

    //store the user data

    if(isset($_GET['user_id'])){

        $user_id = $_GET['user_id'];
        $query = "SELECT * FROM vaccine_user WHERE user_id = {$user_id} LIMIT 1";

        $result = mysqli_query($conn, $query);

        if($result){
            if(mysqli_num_rows($result) == 1){

                //user found
                $result_found = mysqli_fetch_assoc($result);

                $fName = $result_found['fName'];
                $Number = $result_found['pNumber'];
                $Email = $result_found['email'];
                $userName =$result_found['user_name'];
                $Password = $result_found['pass'];
            }
            else{
                //not found result
            }    
        }
        else{
            //query failed
        }
    }

    if(isset($_POST['submit'])){

        $user_id = $_POST['user_id'];
        $name = $_POST['fName'];
        $number = $_POST['Number'];
        $email = $_POST['Email'];
        $userName = $_POST['Username'];
        $pass = $_POST['Password'];

       //cheak email is already exit
        $query1= mysqli_query($conn,"SELECT * FROM vaccine_user WHERE email = '$email' AND user_id != $user_id");
        $query2= mysqli_query($conn,"SELECT * FROM vaccine_user WHERE user_name = '$userName' AND user_id != $user_id");

        $result_set1 = mysqli_num_rows($query1);
        $result_set2 = mysqli_num_rows($query2);

        if($result_set1){
            $error = "Email is already exists!";
        }
        else if($result_set2){
            $error = "Username is already exists!";

        }
        else{
            
            $sql= "UPDATE vaccine_user SET fName = '$name', pNumber = '$number', email = '$email', user_name = '$userName', pass = '$pass' WHERE user_id = $user_id "; 

            if(mysqli_query($conn,$sql)){
                
                header("location:UMS.php");
                exit;
            }
            else{
                echo"<script>alert('error')</script>";
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
    <link rel="stylesheet" href="Styles/Styles.css">
    <title>ADMIN</title>
</head>
<body>

<div class="nav">
    <header>
        <ul>
            <img class="nav_logo" src="Image\L0G0.svg" alt="profile_photo">


            <li><a href="admin.php">Dashboard</a></li>
            <li><a href="UMS.php" class="active" >Customer</a></li>
            <li><a href="HPMS.php">Staff</a></li>  
        </ul>
    </header>
</div>
<div class="content" >
    <div class="newuser">
        <h2>Edit User Details <a href="UMS.php"> Back to user list</a> </h2>
    </div>
    <div class="form_box">
        <form action="u_modify.php" method="POST">
            <input type="hidden" name="user_id" placeholder="Name" required atuofocus value = <?php echo  $user_id ?> > <br><br>
            <P>Full Name</P>
            <input type="text" name="fName" placeholder="Name" required value = <?php echo $fName ?> > <br><br>
            <P>Number</P>
            <input type="text" name="Number" placeholder="Phone Number" maxlength="10" required value = <?php echo $Number ?> > <br><br>
            <P>Email</P>
            <input type="email" name="Email" placeholder="Email" required  value =  <?php echo $Email ?> > <br><br>
            <P>Username</P>
            <input type="text" name="Username" placeholder="Username" required value = <?php echo  $userName ?> > <br><br>
            <P>Password</P>
            <input type="text" name="Password" placeholder="Password" minlength="8" maxlength="15" required value = <?php echo  $Password ?> > <br><br>
            
            <!--dispaly in errors-->
            <div class="error_list">
            <?php if($error){
                echo "<div class='error'> <p>{$error} </p></div>" ; 
            } ?>
            </div>

            <input class="save"  name="submit" type="submit" value="Save Changes">    
        </form>
    </div>
</div>   
</body>
</html>
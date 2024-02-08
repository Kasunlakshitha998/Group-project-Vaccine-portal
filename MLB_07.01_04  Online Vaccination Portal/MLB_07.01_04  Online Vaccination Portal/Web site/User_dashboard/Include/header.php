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
    if(isset($_POST['logout'])){
        session_unset();
        session_destroy();
        header("location:..\login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="JS/appointment.js"></script>
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
  <link rel="stylesheet" href="Styles/header_style.css">
  <link rel="stylesheet" href="Styles/feedStyle.css">
  <link rel="stylesheet" href="Styles/profile_styles.css">
  <link rel="stylesheet" href="Styles/contact.css">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <title></title>
</head>
<body>
  <div class="layout-container">
    <header>
      <img src="Image/L0G0.svg" alt="logo">
      <div class="profile">
        <img class="profile-picture" src="Image/Profile.jpeg" alt=" profile">
        <div>
          <p class="profile-name" > <?php echo $_SESSION['setusername']; ?></p>
          <p class="mail-id"><?php echo  $_SESSION['email']; ?></p>
       <br> </div>
       <br> <div class="logoute">
                <form action="#" method="POST">
                    <!--<input class="logout" type="submit" name="logout" value="Log out"  >-->
                  <button type="submit" name="logout" ><i class="fi fi-rr-exit"></i></button>
                </form>
                    <!---<i class="fi fi-rr-exit"></i>--->
            </div>
      </div>
    </header>
    
    <div  class="wrapper">
      <div class="side-bar">

        <ul id=>
          <!--<li><i class="fi fi-rr-apps"></i> <a href="user.php?user_id={$_SESSION['userid']}"> Dashboard </a></li>-->
          <li><i class="fi fi-rr-calendar-check"></i> <a href="appointment.php?user_id={$_SESSION['userid']}"> Appointment </a></li>
          <li><i class="fi fi-rr-user"></i> <a href="profile.php?user_id={$_SESSION['userid']}"> Profie </a></li>
          <li><i class="fi fi-rr-envelope"></i> <a href="contact.php?user_id={$_SESSION['userid']}"> Contact us </a></li>
          <li><i class="fi fi-rr-credit-card"></i> <a href="Payment.php?user_id={$_SESSION['userid']}"> Payments </a></li>
          <li><i class="fi fi-rr-document"></i> <a href="my_feed.php?user_id={$_SESSION['userid']}"> Reports </a></li>
        </ul>
      </div>
    </div>
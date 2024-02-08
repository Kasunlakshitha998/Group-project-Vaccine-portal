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

<!--admin logout set-->
<?php
    if(isset($_POST['logout'])){
        session_unset();
        session_destroy();
        header("location:..\login.php");
        exit;
    }
?>

<!--user datails display in table--> 
<?php

    $result_list ="";
    $search ="";

    //search users function
    if(isset($_GET['submit'])){

        $search = $_GET['search'];
        $query = "SELECT * FROM vaccine_user WHERE user_id LIKe '%{$search}%' OR fName LIKE '%{$search}%' OR user_name LIKE '%{$search}%' ";

        $result = mysqli_query($conn, $query);
        
        if($result){
            while($results = mysqli_fetch_assoc($result)){

                if($results['user_type'] == 'user'){

                    $result_list .= "<tr>";
                    $result_list .= "<td>{$results['user_id']}</td>";
                    $result_list .= "<td>{$results['fName']}</td>";
                    $result_list .= "<td>{$results['email']}</td>";
                    $result_list .= "<td>{$results['user_name']}</td>";
                    $result_list .= "<td>{$results['pass']}</td>";
                    $result_list .= "<td> <a class=\"edit_btn\" href='u_modify.php?user_id={$results['user_id']}'>Edit</a></td>";
                    $result_list .= "<td> <a class=\"delete_btn\" href='u_delete.php?user_id={$results['user_id']}' onclick=\" return confirm('Are your Sure?')\">Delete</a></td>";
                    $result_list .= "</tr>";
                }
                else{
                    echo "<script> alert('Not found!') </script>";
                }
            }
        }

    }else{

        $query = "SELECT * FROM vaccine_user";
        $result = mysqli_query($conn, $query);
        
        if($result){
            //store the details associative array
            while($results = mysqli_fetch_assoc($result)){

                //cheack user type
                if($results['user_type'] == 'user'){

                    $result_list .= "<tr>";
                    $result_list .= "<td>{$results['user_id']}</td>";
                    $result_list .= "<td>{$results['fName']}</td>";
                    $result_list .= "<td>{$results['email']}</td>";
                    $result_list .= "<td>{$results['user_name']}</td>";
                    $result_list .= "<td>{$results['pass']}</td>";
                    $result_list .= "<td> <a class=\"edit_btn\" href='u_modify.php?user_id={$results['user_id']}'>Edit</a></td>";
                    $result_list .= "<td> <a class=\"delete_btn\" href='u_delete.php?user_id={$results['user_id']}' onclick=\" return confirm('Are your Sure?')\">Delete</a></td>";
                    $result_list .= "</tr>";
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/cb0dbb7928.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Styles/Styles.css">
    <title>ADMIN</title>
</head>
<body>
<div class="nav">
    <header>
        <ul>
            <img class="nav_logo" src="Image\L0G0.svg" alt="profile_photo">
            <li><a href="admin.php">Dashboard</a></li>
            <li><a class="active" href="UMS.php">Customer</a></li>
            <li><a href="HPMS.php">Staff</a></li>  
        </ul>
    </header>
</div>
<div class="content" >
    <div class="main_head">
        <h2>User Management System</h2>
        <form action="#" method="POST">
            <input class="logout" type="submit" name="logout" value="Log out"  >
        </form>
    </div>
    <main>
        <div class="search">
            <form action="UMS.php" method="GET">
                <input type="text" name="search" autofocus placeholder="Search" value =<?php echo $search ?> >
                <input type="submit" name="submit" value="Search">
                <a href="UMS.php"><button><i class="fa-sharp fa-solid fa-arrows-rotate"></i></button></a>
            </form>
        </div>
        <table>
            <tr>
                <th>User ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Username</th>
                <th>Password</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php echo $result_list; ?>

        </table>
    </main>
</div>  
</body>
</html>
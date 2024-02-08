<?php 
    session_start();
    if(!isset($_SESSION['login'] ) || $_SESSION['login'] != true ){
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/Styles.css">
    <title>Healthcare Provider</title>
</head>
<body>

<ul>
    <img class="nav_logo" src="Image/L0G0.svg" alt="profile_photo">

    <li><a class="active" href="user.php">Dashboard</a></li>    

    <form action="#" method="POST">
    <input class="logout" type="submit" name="logout" value="Log out" >
    </form>   
</ul>

<div class="content" >
<?php
    require("..\config.php");
    $sql1 = "select count(user_id) as total_appointments from appoinments;";
    $sql2 = "SELECT COUNT(*) AS total_patients FROM (SELECT patient_name FROM appoinments GROUP BY patient_name) AS appointments_table";
    $sql3 = "select count(user_id) as pendings from appoinments where status='pending'";

    $result1 = mysqli_query($conn,$sql1);
    if(mysqli_num_rows($result1) > 0){
        $row1 = mysqli_fetch_assoc($result1);
        $total_appointments = $row1["total_appointments"];
    }

    $result2 = mysqli_query($conn,$sql2);
    if(mysqli_num_rows($result2) > 0){
        $row2 = mysqli_fetch_assoc($result2);
        $total_patients = $row2["total_patients"];
    }

    $result3 = mysqli_query($conn,$sql3);
    if(mysqli_num_rows($result3) > 0){
        $row3 = mysqli_fetch_assoc($result3);
        $total_pendings = $row3["pendings"];
    }

    ?>
    <div class="container">
        <div class="main-content">
            <div class="top-bar" style="padding:12px">
                <h2>Dashboard</h2>
                <div>
                    <img src="Image/notifications_none.png" height="25px" width="25px">
                    <img src="Image/account_circle.png" height="25px" width="25px">
                </div>
            </div>
            <hr/>
            <div class="topp">
                <div class="content-box" style="background-color: #00c68a;">
                    <p style="font-weight:bold">Total Patients</p>
                    <p><?php echo $total_patients; ?></p>
                </div>
                <div class="content-box" style="background-color: #f0fffa;display: flex;align-items: center;justify-content: space-between;">
                    <div>
                        <p style="font-weight:bold">Total Appointments</p>
                        <p><?php echo $total_appointments;  ?></p>
                    </div>
                    <div>
                        <img src="Image/supervisor_account.png" height="20px" width="20px">
                    </div>                    
                </div>
                <div class="content-box" style="background-color: #f0fffa;display: flex;align-items: center;justify-content: space-between;">
                    <div>
                        <p style="font-weight:bold">Pending Appointments</p>
                        <p><?php echo $total_pendings; ?></p>
                    </div>
                    <div>
                        <img src="Image/pending_actions.png" height="20px" width="20px">
                    </div>
                </div>
            </div>
            <div class="sub-container">
                <div class="top-bar">
                    <h3>Appointment List</h3>
                    <img src="Image/settings.png" height="25px" width="25px">
                </div>
                <table>
                    <tr>
                        <th>Patient Name</th>
                        <th>Order Date</th>
                        <th>Phone Number</th>
                        <th>Vaccine Center</th>
                        <th>Vaccine Type</th>
                        <th>Vaccine Ref.</th>
                        <th>Physician</th>
                        <th>Status</th>
                        <th>Change</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php
                        $sqlq = "select * from appoinments";
                        $result = mysqli_query($conn,$sqlq);
                        if(mysqli_num_rows($result)> 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo '<tr>
                                <td>'.$row['patient_name'].'</td>
                                <td>'.$row['order_date'].'</td>
                                <td>'.$row['phone_number'].'</td>
                                <td>'.$row['vaccine_center'].'</td>
                                <td>'.$row['vaccine_type'].'</td>
                                <td>'.$row['vaccine_ref'].'</td>
                                <td>'.$row['physician'].'</td>
                                <td>'.$row['status'].'</td>
                            <form action="change.php" method="Post" >    
                                <td >
                                    <input type="hidden" name="id" value=" '.$row['vaccine_ref'].'">
                                    <select  name="status" style="padding:2px;margin:4px;border:1px solid #555555">
                                        <option  style="color:red;" value="pending" >Pending</option>
                                        <option  style="color:green" value="complete" >Complete</option>
                                    </select>
                                </td>
                                <td>
                                    <input id="save" name="submit" type="submit" value="save" style="border: none; background-color: #2ffb1c; color: #ffffff; cursor: pointer; border-radius: 5px; padding: 5px 10px; ">
                                </td>
                            </form>   
                            </tr>';
                            }
                        }                        
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>
    
</body>
</html>


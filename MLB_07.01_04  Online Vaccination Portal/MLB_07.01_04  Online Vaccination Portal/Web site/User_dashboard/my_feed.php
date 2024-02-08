<?php include 'Include/header.php' ?>

<div class="content" >
<div class="main-content">
            <div class="top-bar" style="padding:12px">
                <h2>MY Feed</h2>
                <div>
                    <img src="Image/notifications_none.png" height="25px" width="25px"/>
                    <img src="Image/account_circle.png" height="25px" width="25px"/>
                </div>
            </div>
            <hr/>
            <div class="sub-container">
                <div class="top-bar">
                    <h3>My Appointment List</h3>
                    <img src="Image/settings.png" height="25px" width="25px">
                </div>
                <table>
                    <tr>
                        <th>Order Date</th>
                        <th>Vaccine Center</th>
                        <th>Vaccine Type</th>
                        <th>Vaccine REF</th>
                        <th>Physician</th>
                        <th>Status</th>
                        <th>E-certificate</th>
                    </tr>
                    <?php
                    //echo $_SESSION['userid'];
                    $sqlq = "select * from appoinments where user_id = {$_SESSION['userid']}";
                    $result = mysqli_query($conn,$sqlq);
                    if(mysqli_num_rows($result)> 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<tr>";
                            echo "<td>".$row['order_date']."</td>";
                            echo "<td>" .$row['vaccine_center']. "</td>";
                            echo "<td>" .$row['vaccine_type']. "</td>";
                            echo "<td>" .$row['vaccine_ref']. "</td>";
                            echo "<td>" .$row['physician']. "</td>";
                            echo "<td>" . $row['status']. "</td>";
                            echo "<td> <a class=\"download\" href='#.php?user_id={$row['user_id']}'>Download</a></td>";
                            
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
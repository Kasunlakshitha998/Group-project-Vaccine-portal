<?php include 'Include/header.php' ?>

<div class="content" >
<?php

	$error ="";
	$msg="";

    $user_id="";
    $fName="";
    $Number= "";
    $Email= "";
    $userName= "";
    $Password="";

        $user_id = $_SESSION['userid'];
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

	if(isset($_POST['submit'])){

        $user_id = $_SESSION['userid'];
        $name = $_POST['fname'];
        $number = $_POST['telephone'];
        $email = $_POST['email'];
        $userName = $_POST['username'];
 
    	$sql= "UPDATE vaccine_user SET fName = '$name', pNumber = '$number', email = '$email', user_name = '$userName' WHERE user_id = $user_id "; 

            if(mysqli_query($conn,$sql)){
                
                $msg = "Updated Success!";
            }
            else{
                $msg = "Something went wrong!";
            }
        }    
    else{       
    }
?>
		<div class="main-content">
			<div class="header-cont">
				<h1>Profile</h1>
				<div>
                    <img src="Image/notifications_none.png" height="25px" width="25px"/>
                    <img src="Image/account_circle.png" height="25px" width="25px"/>
                </div>
			</div>
			<hr/>
			<div class="secondary-cont">
				<div class="second-x">
					<h3><?php echo  $fName ?></h3><br/>
					<hr/>
					<img src="Image/hello.jpg" height="200px" width="200px" style="border-radius:100px;padding-top: 5px;" /><br/><br/>
					<button class="btn-style">Upload</button><br/><br/>
					<form method="POST" action="profile.php">
					<div class="form-item">
						<?php 
						if($msg == "Updated Success!"){
							echo '<p style="padding: 8px;
							margin: 8px;
							border:1px solid #00ff00;
							background-color:rgba(0,255,0,0.2);
							width: 400px;">'.$msg.'</p>';
						}
						if($msg == "Something went wrong!"){
							echo '<p style="padding: 8px;
							margin: 8px;
							border:1px solid #ff0000;
							background-color:rgba(255,0,0,0.2);
							width: 400px;">'.$msg.'</p>';
						}
						?>
					</div>
					<div class="form-item">
						<label>User Name</label>
						<input name="username"  type="text" value = <?php echo  $userName ?> >
					</div>
					<div class="form-item">
						<label>Full Name</label>
						<input name="fname" type="text" value="<?php echo $fName; ?>" >
					</div>
					<div class="form-item">
						<label>E-mail</label>
						<input name="email" type="email" value="<?php echo $Email; ?>" >
					</div>
					<div class="form-item">
						<label>Contact Number</label>
						<input name="telephone" type="tel" value="<?php echo $Number; ?>" >
					</div>
					<div style="text-align:center ;">
						<button class="btn-style" name="submit" type="submit">Submit All</button>
					</div>
					</form>
				</div>
				<form action="password_change.php" method="POST">
				<div class="change-pw-cont">
					<div class="form-item">
						<label>Current Password</label>
						<input name="pass" name="" type="password" >
					</div>
					<div class="form-item">
						<label>New Password</label>
						<input name="npass" type="password" >
					</div>
					<div class="form-item">
						<label>Confirm Password</label>
						<input name="cpass" type="password" >
					</div>
					<div style="text-align:center ;">
						<button type="submit" name="submit" class="btn-style" id="changeBtn">Change</button>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
	<!---
	<h1>#PROFILE</h1>
	<hr>
	
	<h2>Account Information's</h2>
	
--->
		<script>
			var button = document.getElementById("changeBtn")

			button.addEventListener("click",function(e){
				alert("Password Changed Success!")
			},false)
			var button2 = document.getElementById("submitBtn")

			button2.addEventListener("click",function(e){
				alert("All are submitted!")
			},false)
		</script>
	</body>
</html>
</div>
    
</body>
</html>
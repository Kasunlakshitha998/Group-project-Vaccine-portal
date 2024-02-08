<?php include 'Include/header.php' ?>
<div class="container">
		
        <div class="main-content">
            <div class="top-bar" style="padding:12px">
                <h2>Contact Us</h2>
                <div>
                    <img src="Image/notifications_none.png" height="25px" width="25px"/>
                    <img src="Image/account_circle.png" height="25px" width="25px"/>
                </div>
            </div>
            <hr/>
            <div class="details">
                <div class="sub-details">
                    <div class="details2">
                        <img src="Image/location_on.png" height="30px" width="30px"/>
                        <h3>Location</h3>
                    </div>
                    
                    <p>233/1</p>
                    <p>Fast Low Lane</p>
                    <p>Kegalle</p>
                    <p>Sri Lanka</p>
                </div>
                <div class="sub-details">
                    <div class="details2">
                        <img src="Image/phone.png" height="30px" width="30px"/>
                        <h3>Telephone</h3>
                    </div>
                    <p>+9476-8587847</p>
                    <p>+9411-8339849</p>
                    <p>+9423-8398244</p>
                </div>
                <div class="sub-details">
                    <div class="details2">
                        <img src="Image/attach_email.png" height="30px" width="30px"/>
                        <h3>Email</h3>
                    </div>
                    <p>someone@gmail.com</p>
                    <div>
                        <img src="Image/insta.jfif" height="50px" width="50px"/>
                        <img src="Image/facebook.png" height="50px" width="50px"/>
                        <img src="Image/twitter.png" height="50px" width="50px"/>
                        <img src="Image/linkedin.png" height="50px" width="50px"/>
                    </div>
                </div>
            </div>
            <div style="display: flex;" >
                <form method="post" action="contact_process.php" class="main-form">
                    <div>
                        <?php
                            /*$stat = $_GET['status'];
                            if($stat == "success"){
                                echo '<p style="padding: 10px;
                                margin:10px;
                                width:100%;
                                background-color: rgba(0,255,0,0.2);
                                border: 2px solid green;">Successfully Added!</p>';
                            }else{
                                echo '<p style="padding: 10px;
                                margin:10px;
                                width:100%;
                                background-color: rgba(255,0,0,0.2);
                                border: 2px solid red;">Something Went Wrong!</p>';
                            }*/
                        ?>
                    </div>
                    <div class="form-field-cont">
                        <input type="text" id="fullname" name="fullname" class="form-field" placeholder="Full Name"/>
                    </div>
                    <div class="form-field-cont">
                        <input type="email" id="email" name="email" class="form-field" placeholder="Mail Address"/>
                    </div>
                    <div class="form-field-cont">
                        <input type="tel" id="contact" name="contact" class="form-field" placeholder="Contact Number"/>
                    </div>
                    <div class="form-field-cont">
                        <textarea class="form-field" id="content" name="content" placeholder="Type what you want...." rows="5"></textarea>
                    </div>
                    <div style="display: flex;justify-content: center;align-items: center;">
                        <button id="send_re" type="submit" class="form-btn">Submit</button>
                    </div>
                </form>
                <img src="Image/bg.png" height="500px" width="500px"/>
            </div>
        </div>
    </div>
</body>
</html>
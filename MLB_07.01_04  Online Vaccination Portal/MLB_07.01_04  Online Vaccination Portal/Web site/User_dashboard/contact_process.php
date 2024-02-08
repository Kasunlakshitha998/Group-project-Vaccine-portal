<?php
require '..\config.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $content = $_POST["content"];
    $sql = "insert into contactus(fullname,mail,contact,content)values('".$fullname."','".$email."','".$contact."','".$content."')";
    $sql_q = mysqli_query($conn,$sql);
    if($sql_q){
        header("location:contact.php?status=success");
    }else{
        header("location:contact.php?status=failed");
    }
}else{
    echo "METHOD Wrong";
}

?>
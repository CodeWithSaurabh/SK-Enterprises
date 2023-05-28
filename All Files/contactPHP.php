<?php
    $State = $_POST['State'];
    $fullname = $_POST['name'];
    $Email = $_POST['email'];
    $Phone_no = $_POST['phone'];
    $Message = $_POST['message'];

    $conn = new mysqli('localhost','root','','myownproject');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into contact(State,name,email,phone,message) values(?,?,?,?,?)");
        $stmt->bind_param("sssis",$State,$fullname,$Email,$Phone_no,$Message);
        echo '<script>alert("We will help in 24 hours")</script>';
        $stmt->execute();
        $stmt->close();
    }
?>
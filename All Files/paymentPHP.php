<?php
    $fullname = $_POST['Full-name'];
    $Email = $_POST['email'];
    $Phone_no = $_POST['phone'];
    $address = $_POST['address'];

    $conn = new mysqli('localhost','root','','myownproject');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into Order_detail(fullname,Email,Phone_no,address) values(?,?,?,?)");
        $stmt->bind_param("ssis",$fullname,$Email,$Phone_no,$address);
        header('location:https://www.sandbox.paypal.com/webapps/hermes?token=5GP91765W8766845E&useraction=commit&mfid=1619456593256_375119ac57dcb');
        $stmt->execute();
        $stmt->close();
    }
?>
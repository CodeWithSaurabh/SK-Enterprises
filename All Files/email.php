<?php
session_start();

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'myownproject') or die('plz check db');

$Email=$_POST['email1'];

$s = "select * from emails where Email ='$Email'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if($num == 1){
    echo '<script>alert("You are already Subscibe our company...")</script>'; 
}
else{
    $stmt = $con->prepare("insert into emails(Email) values(?)");
    $stmt->bind_param("s",$Email);
    header("location: ./");
    $stmt->execute();
    $stmt->close();
}
?>
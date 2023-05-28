<?php 
session_start();

session_destroy();

header('location:../Account.php');
echo'<script type="text/javascript" >alert("log out")</script>';

?> 
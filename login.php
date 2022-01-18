<?php

session_start();

$con = mysqli_connect('localhost','root','123456');

mysqli_select_db($con, 'food project');

$name = $_POST['name'];
$pass = $_POST['password'];

$s = " select * from register where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username'] = $name;
    header('location:index1.html');
}else{
    header('location:login.php');
} 

?>

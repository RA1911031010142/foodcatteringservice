<?php

session_start();
header ('location:index.html');


$con = mysqli_connect('localhost','root','123456');

mysqli_select_db($con, 'foodproject');

$name = $_POST['name'];
$pass = $_POST['password'];

$s = " select * from register where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo"Username Already Taken";
}else{
    $reg= " insert into register(name ,password) values ('$name' , '$pass')";
    mysqli_query($con, $reg);
    echo"Your Registration Successful";
} 

?>

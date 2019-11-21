<?php
$con = mysqli_connect('localhost','josue','josue','blog');
session_start();
/*if (!$_session['user']) {
	header("location:../login.php");
}*/
$_SESSION['user']=1;
$id_loginuser = $_SESSION['user'];
$sql = "SELECT * from user where id='$id_loginuser'";
$result = mysqli_query($con,$sql); 
while($row = mysqli_fetch_assoc($result))
{
$id_login = $row['id']; 
$name = $row['name'];
$email = $row['email'];
$password = $row['password'];
$address = $row['address'];
$language = $row['language'];
$avatar = $row['avatar'];
$priv = $row['privilege'];
}
                
?>

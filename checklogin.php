<?php

$host="localhost";
$username="user";
$password="1234";
$db_name="loginform";
$tbl_name="logininfo";
$link = mysqli_connect("127.0.0.1", "user", "1234", "loginform");

mysqli_connect("$host", "$username", "$password")or die("cannot connect");
mysqli_select_db($link,"$db_name")or die("cannot select DB");

$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

$sql="SELECT * FROM logininfo WHERE user='$myusername' and pass='$mypassword'";
$result=mysqli_query($link,$sql);
$count=mysqli_num_rows($result);


if($count==1){
$_SESSION['myusername']= $myusername;
$_SESSION['mypassword']= $mypassword;
header("location:login_success.php");
}
else {
echo "Wrong Username or Password";
}
?>

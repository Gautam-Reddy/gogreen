<?php

$con=mysqli_connect('localhost','root');

if($con){
	echo "Connection Succesful";
}
else{
	echo "NO Connection";
}

mysqli_select_db($con,'website');

$user=$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comment=$_POST['comment'];

$query="insert into userdata(user,email,mobile,comment)
values('$user','$email','$mobile','$comment')";

echo "$query";

mysqli_query($con,$query);

header('location:index.php');
?>
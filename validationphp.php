<?php
include 'conn.php';
$name=$_POST['name'];
$password=$_POST['password'];


	$query=" SELECT * FROM userlogin where name = '".$name."' && password = '".$password."'";
	$res=mysqli_query($conn,$query);
	$num=mysqli_num_rows($res);
	if($num==1)
	{
		echo "welcom ".$name."!";
	}
	else
	{
			echo "error";
	}


?>
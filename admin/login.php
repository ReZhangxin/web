<?php
	session_start();
	$user = $_POST['user'];
	$password = $_POST['password'];

	if($user !== 'zhangxin')
	{
		echo '1';
	}
	else if($password !== 'zhangss')
	{
		echo '2';
	}
	else
	{
		$_SESSION['user']=$user;
		echo '3';
	}


?>
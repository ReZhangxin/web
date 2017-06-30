<?php
	error_reporting(E_ALL^E_NOTICE);
	require_once('api.php');
	header("Access-Control-Allow-Origin: *");
	$key=$_POST['song'];
	$limit=$_POST['limit'];
	$api = new XiamiMusicAPI();
	$result=$api->search($key,$limit);
	$data=json_decode($result);
	header('Content-type: application/json; charset=UTF-8');
	echo json_encode($data,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES);
?>
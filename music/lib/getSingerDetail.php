<?php
	require_once('api.php');
	header("Access-Control-Allow-Origin: *");
	$artist_id=$_POST['id'];
	$api = new XiamiMusicAPI();
	$result=$api->artist($artist_id);
	$data=json_decode($result);
	header('Content-type: application/json; charset=UTF-8');
	echo json_encode($data,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES);
?>
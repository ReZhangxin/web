<?php
	require_once('api.php');
	header("Access-Control-Allow-Origin: *");
	$id=$_POST['id'];
	$api = new XiamiMusicAPI();
	$result=$api->url($id);
	$data=json_decode($result);
	$lyric=$data->data->trackList[0]->lyric;
	// $lyricUrl=$data->data->trackList[0]->lyric_url;
	header('Content-type: application/json; charset=UTF-8');
	
	$lyric_text=file_get_contents($lyric);
	echo json_encode($lyric_text,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES);
?>
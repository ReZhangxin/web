<?php
	header("Access-Control-Allow-Origin: *");
	error_reporting(E_ALL^E_NOTICE);
	require_once('localConfig.php');
	$arr=[];
	foreach ($localList as $key => $value) {
		$url  = $api.$value;
		$html = file_get_contents($url);
		$data = json_decode($html)->data->song;
		array_push($arr,['song_id'=>$data->song_id,'song_name'=>$data->song_name,'album_id'=>$data->album_id,'album_name'=>$data->album->name,'artist_id'=>$data->artist_id,'artist_name'=>$data->artist_name,'url'=>$url]);
	}
	echo json_encode($arr);
?>
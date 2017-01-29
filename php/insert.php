<?php
	$data = json_decode(file_get_contents("php://input"));

	include('connect.php');

	$db = new DB();
	
	$sql = "INSERT INTO `tbl_todo`(`todo`,`timestamp`)VALUES('$data->todo','$data->timestamp')";

	$data = $db->pop($sql);

	echo json_encode($data);

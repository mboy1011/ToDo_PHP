<?php

	$data = json_decode(file_get_contents("php://input"));
	
	include('config.php');

	$db = new DB();

	$sql = "DELETE FROM tbl_todo WHERE 'id' = $data->id";

	$data = $db->pop($sql);

	echo json_encode($data);

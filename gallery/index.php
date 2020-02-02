<?php 
require_once '../api/api.php';
header("Content-type: application/json; charset=utf-8");
$nhtai = new nhtaiAPI();
$id = intval($_GET['id']);
if ($id != null && is_integer($id)) {
	$details = $nhtai->bookDetails($id);
	echo file_get_contents($details);
}else{
	$err = array("err_msg" => "id must be a number");
	echo json_encode($err);
}


 ?>
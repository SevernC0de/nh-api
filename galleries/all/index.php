<?php 
require_once '../../api/api.php';
header("Content-type: application/json; charset=utf-8");
$nhtai = new nhtaiAPI();
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
if ($page >= 1 && is_integer($page)) {
	$g = $nhtai->home($page);
	$y = file_get_contents($g);
	echo $y;
}else {
	$err = array('err_msg' => 'page must be a greater than or equal to 1');
	echo json_encode($err);
}


 ?>
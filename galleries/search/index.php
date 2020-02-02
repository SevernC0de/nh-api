<?php 
require_once '../../api/api.php';
header("Content-type: application/json; charset=utf-8");
$nhtai = new nhtaiAPI();
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
if ($_GET['query'] != null && is_string($_GET['query']) ) {
	if ($page >= 1 && is_integer($page)) {
		$str = urlencode($_GET['query']);
		$query = $nhtai->search($str, $page);
		$search =  $nhtai->parseSearch($query);
		echo json_encode($search->results());	
	}else {
		$err = array("err_msg" => "page must be a greater than or equal to 1");
		echo json_encode($err);
	}
}
 ?>
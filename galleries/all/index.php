<?php
require_once '../../api/api.php';
// require_once '../../api/dom.php';
header("Content-type: application/json");
$nhtai = new nhtaiAPI();
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
if ($page >= 1 && is_integer($page)) {
	$g = $nhtai->home($page);
	$p = file_get_contents($g);
	echo $p;
} else {
	$err = array('err_msg' => 'page must be a greater than or equal to 1');
	echo json_encode($err);
}

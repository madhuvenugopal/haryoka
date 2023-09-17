<?php
define('BASE_URL', 'http://localhost/haryoka');
define('BASE_PAGE', '/index.php');
define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', 'p455w0rd');
define('DATABASE', 'haryoka1');

if(defined('E_DEPRECATED')) {
	error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE & ~E_DEPRECATED);
}
function preventScriptStyleCache() { 
	echo '?v=' . uniqid() . date('YmdHis'); 
}
?>
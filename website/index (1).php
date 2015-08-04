<?php 

require_once '__DIR__/../autoload.php';
require_once '__DIR__/../src/Parse/ParseClient.php';
 
$action = trim($_GET['action']);

if(is_file('controlers/'.$action.'.php') && !empty($action))
{
	require_once('controlers/'.$action.'.php');
}

else{
	require_once('controlers/login.php');
}

?>
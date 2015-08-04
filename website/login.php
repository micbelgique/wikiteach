<?php 

session_start();

use Parse\ParseClient;
use Parse\ParseQuery;
use Parse\ParseObject;
use Parse\ParseCloud;
 
ParseClient::initialize('ZvThoS0u6Zlc2nc1wM46mKOgLZPs64qSmnWHubXb', 'KcSMhSwKKlgczVS9G8OTruucCgAl9AXpFOK4vS21', 'ZDHDMMxkyfEvMLzSCsRmhGQroZF8wo6JuBJmUlOG');

define('PAGE','login.php');

$datas = [
	'username' => trim($_POST['username']),
	'pass' => $_POST['password'],
];

require_once('__DIR__/../models/hydratation.php');
require_once('__DIR__/../models/'.PAGE);

$login = new Login;
$login->hydrate($datas);

if($_SESSION['id']){
	$login->redirect('home');
}

if(!empty($_POST['submit_login']))
{
	if(!empty($login->getUsername()) && !empty($login->getPass()))
	{
		$connectUser = new ParseQuery("_User");
		$connectUser->equalTo('username', $login->getUsername());
		$connectUser->equalTo('pass', $login->getPass());
		$findUser = $connectUser->find();

		if($findUser)
		{
			for($i=0;$i<count($findUser);$i++)
			{
				$objectUser = $findUser[$i];
  				$_SESSION['id'] = $objectUser->getObjectId();
  				if($_SESSION['id'])
  				{
  					$login->redirect('home');
  					setcookie('auth', $_SESSION['id'], time()+365*24*60);
  				}
			}
		}
		else{
			$login->errorLog = true;
		}
	}
	else{
		$login->errorLog = true;
	}
}

require_once('__DIR__/../views/'.PAGE);

?>
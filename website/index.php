<?php 

use Parse\ParseClient;
use Parse\ParseQuery;
use Parse\ParseObject;
 
ParseClient::initialize('ZvThoS0u6Zlc2nc1wM46mKOgLZPs64qSmnWHubXb', 'KcSMhSwKKlgczVS9G8OTruucCgAl9AXpFOK4vS21', 'ZDHDMMxkyfEvMLzSCsRmhGQroZF8wo6JuBJmUlOG');

define('PAGE', 'index.php');


require_once('__DIR__/../models/hydratation.php');
require_once('__DIR__/../models/'.PAGE);

//$index = new Index;
//$index->hydrate($datas);

require_once('__DIR__/../views/'.PAGE);

?>
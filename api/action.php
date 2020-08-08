<?php
//dependency import
require 'properties.php';
require 'lib/Slim/Slim.php';
require 'security/Security.php';

//init Slim Framework
\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();
$app->add(new \Security($app));
require 'security/Login.php';
require 'security/ManageUser.php';

//resources
	//db mapworkrs_db
		require('./resource/mapworkrs_db/custom/UserCustom.php');
		require('./resource/mapworkrs_db/User.php');
		require('./resource/mapworkrs_db/custom/map_detailCustom.php');
		require('./resource/mapworkrs_db/map_detail.php');
		require('./resource/mapworkrs_db/custom/map_infoCustom.php');
		require('./resource/mapworkrs_db/map_info.php');
	

$app->run();


?>

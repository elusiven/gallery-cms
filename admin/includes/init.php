<?php

/*
 __  .__   __.  __  .___________. __       ___       __       __   ________   _______ 
|  | |  \ |  | |  | |           ||  |     /   \     |  |     |  | |       /  |   ____|
|  | |   \|  | |  | `---|  |----`|  |    /  ^  \    |  |     |  | `---/  /   |  |__   
|  | |  . `  | |  |     |  |     |  |   /  /_\  \   |  |     |  |    /  /    |   __|  
|  | |  |\   | |  |     |  |     |  |  /  _____  \  |  `----.|  |   /  /----.|  |____ 
|__| |__| \__| |__|     |__|     |__| /__/     \__\ |_______||__|  /________||_______|

*/

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
defined('SITE_ROOT') ? null : define('SITE_ROOT', 'C:/' . DS . 'xampp/htdocs/projects/gallery-cms');
defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', SITE_ROOT.DS.'admin'.DS.'includes');


require_once("functions.php");
require_once("new_config.php");
require_once("database.php");
require_once("user.php");
require_once("photo.php");
require_once("session.php");
require_once("db_object.php");

?>
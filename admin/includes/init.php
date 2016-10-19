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
define('SITE_ROOT', 'C:' . DS . 'xampp' . DS . 'htdocs' . DS . 'projects' . DS . 'gallery-cms' );
defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', SITE_ROOT.DS.'admin'.DS.'includes');
defined('IMAGES_PATH') ? null : define('IMAGES_PATH', SITE_ROOT.DS.'admin'.DS.'images');


require_once(INCLUDES_PATH.DS."functions.php");
require_once(INCLUDES_PATH.DS."new_config.php");
require_once(INCLUDES_PATH.DS."database.php");
require_once(INCLUDES_PATH.DS."user.php");
require_once(INCLUDES_PATH.DS."photo.php");
require_once(INCLUDES_PATH.DS."session.php");
require_once(INCLUDES_PATH.DS."db_object.php");
require_once(INCLUDES_PATH.DS."paginate.php");

?>
<?php
return (isset($_SERVER['APP_MODE']) && $_SERVER['APP_MODE']=='admin') ? array(
	'_root_'  => 'welcome/index',  // The default route

) : array(
	'_root_'  => 'welcome/index',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route
	
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
);

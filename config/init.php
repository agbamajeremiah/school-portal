

<?php 
	include_once 'config/config.php';
	// Include Helpers
	require_once 'helpers/helper_functions.php';

	session_start();
	//class Loader
	function classLoader($class_name)
	{
		require_once 'collection/'.$class_name.'.php';
	}
	//register class loader
	spl_autoload_register('classLoader');
?>
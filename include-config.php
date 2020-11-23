<?php

# Check which page you're currently
switch ($_SERVER['SCRIPT_NAME']) {

	# Index
	case "/index.php":
		$menu_option = "Home";
		$page_title = "Daniel Valenca";
		$page_description = "Web Developer based in Toronto, Canada";
		$facebook_img = '#';
		$facebook_url = '#';
		break;

	# Default
	default:
		$menu_option = "Default";
		$page_title = "Daniel Valenca";
		$page_description = "Web Developer based in Toronto, Canada";
		$facebook_img = '#';
		$facebook_url = '#';

}

?>
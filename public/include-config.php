<?php

# Check which page you're currently
switch ($_SERVER['SCRIPT_NAME']) {

    # Index
    case "/index.php":
        $menu_option = "Home";
        $page_title = "Daniel Valenca";
        $page_description = "xperienced Web Developer skilled in building and optimizing web solutions";
        $page_image = "https://danielvalenca.com/img/default-meta.jpg";
        $page_keywords = "Web Developer, Progressive Web Apps (PWAs), JavaScript, Node.js (Express), Python (Django, Flask), PHP (Laravel), MySQL, HTML, CSS, AJAX, jQuery";
        $page_url = "https://danielvalenca.com/";
        break;

    # Default
    default:
        $menu_option = "Default";
        $page_title = "Daniel Valenca";
        $page_description = "xperienced Web Developer skilled in building and optimizing web solutions";
        $page_image = "https://danielvalenca.com/img/default-meta.jpg";
        $page_keywords = "Web Developer, Progressive Web Apps (PWAs), JavaScript, Node.js (Express), Python (Django, Flask), PHP (Laravel), MySQL, HTML, CSS, AJAX, jQuery";
        $page_url = "https://danielvalenca.com/";

}

?>
<?php

require_once __DIR__ . '/../../../config/database.php';
require_once __DIR__ . '/functions.php';

// Define meta tags
switch (true) {

    case current_page('index'):
        $page_title = 'Daniel Valenca';
        break;

    case current_page(['lead', 'leads']):
        $page_title = 'Leads | Daniel Valenca';
        break;

    case current_page('users'):
        $page_title = 'Users | Daniel Valenca';
        break;

    default:
        $page_title = 'Daniel Valenca';

}

?>
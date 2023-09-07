<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'login-register-php-oop');

define('SITE_URL', 'http://login-register-php-oop/');

include_once('DatabaseConnection.php');
$db = new DatabaseConnection;

function base_url($slug)
{
    echo SITE_URL . $slug;
}

function validateInput($dbcon,$input)
{
    return mysqli_real_escape_string($dbcon,$input);
}

?>
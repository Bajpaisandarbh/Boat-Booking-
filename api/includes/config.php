<?php
// Time zone
date_default_timezone_set('Asia/Kolkata');

// Database connection
$db_host = getenv('DB_HOST') ?: 'localhost';
$db_user = getenv('DB_USER') ?: 'root';
$db_pass = getenv('DB_PASS') ?: '';
$db_name = getenv('DB_NAME') ?: 'bbsdb';

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_errno()) {
    echo "Connection Failed: " . mysqli_connect_error();
}
?>

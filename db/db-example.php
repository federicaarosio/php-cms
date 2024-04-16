<!-- Collegamento al db -->

<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'your_username');
define('DB_PASS', 'your_password');
define('DB_NAME', 'your_db_name');
define('DB_PORT', 'your_port');

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);

// if ($connection) {
//     echo 'we're connected';
// }

?>
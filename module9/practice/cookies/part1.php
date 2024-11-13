<?php

// Set cookies
setcookie('name', 'Sagor Ahmed', time() + 3600, '/');
setcookie('email', 'babbaba@gmail.com', time() + 3600, '/');

// Redirect to the same pages to access the cookies
if (!isset($_COOKIE['name'])) {
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}


?>

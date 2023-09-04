

<form action="" method="get">
    <input type="text" name="user">
    <input type="submit" value="Submit">
</form>

<?php
//Null coalescing operator
$user = $_GET['user'] ?? 'nobody';

echo $user;
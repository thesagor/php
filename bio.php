<?php
if(isset($_POST['btn']));
$name= $_POST['name'];
$user= $_POST['user'];
$email= $_POST['email'];
$pass= $_POST['pass'];
$number= $_POST['number'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIO info</title>
</head>
<body>
    <div class="formdetails">
        <h4>Full name: <?php echo "$name" ?> </h4>
        <h4>user name: <?php echo "$user" ?> </h4>
        <h4>email: <?php echo "$email" ?> </h4>
        <h4>password: <?php echo "$pass" ?> </h4>
        <h4>number: <?php echo "$number" ?> </h4>
    </div>
</body>
</html>
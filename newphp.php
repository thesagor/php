<?php


    if(isset($_POST['buttons']));
    $user= $_POST['user'];
    $pass= $_POST['pass'];
    $mail= $_POST['mail'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    form.formvai input {
        padding: 5px 20px;
        font-size: 18px;
        margin: 2px 0px;
        border-radius: 6px;
    }</style>
</head>
<body>
    <div class="formdetails">
        <h3>Form details</h3>
        <h4>Username</h4>        
        <?php print_r($user) ?>
        <h4>Password</h4>
        <?php print_r($pass) ?>
        <h4>email</h4>
        <?php print_r($mail) ?>

    </div>



    <h1>Title</h1>
    <form action="" method="POST" class="formvai">

        <label for="">Username</label><br>
        <input type="text" name="user" placeholder="Username"><br>
        <input type="password" name="pass" placeholder="Password"><br>
        <input type="email" name="mail" placeholder="email"><br>
        <input type="submit" name="buttons" value="Submit">   


    </form>
</body>
</html>


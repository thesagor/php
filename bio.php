<?php
    
    if(isset($_POST['btn']));
    $name=$_POST['name'];
    $user=$_POST['user'];
    $mail=$_POST['mail'];
    $pass=$_POST['pass'];
    $number=$_POST['number'];
    $car=$_POST['car'];

    ?>

    <h1>Form details</h1> <hr>
    <ul class="details">
        <h4>Name: <?php echo "$name\n"; ?> </h4>
        <h4>Name: <?php echo "$user\n"; ?> </h4>
        <h4>Name: <?php echo "$mail\n"; ?> </h4>
        <h4>Name: <?php echo "$pass\n"; ?> </h4>
        <h4>Name: <?php echo "$number\n"; ?> </h4>
        <h4>Name: <?php echo "$car"; ?> </h4>
    </ul>
    



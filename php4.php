<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

    <title>Document</title>
    <style>
        body{
            margin-top:30px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h3>Our first form</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate dignissimos dolore ea eaque eligendi iste neque quibusdam quisquam tempora voluptas?</p>
                <?php
                    $name= '';
                    $mail= '';

                ?>


                <h3>Name is : <?php if ( !empty($_REQUEST['name'])){ echo $name= $_REQUEST['name'];}  ?></h3>
                <h3>Mail is : <?php if ( !empty($_REQUEST['mail'])){ echo $mail=$_REQUEST['mail'];}  ?></h3>


                <form action="" method="POST">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" value="<?php echo $name;?>">

                    <label for="email">Email:</label>
                    <input type="email" name="mail" value="<?php echo $mail;?>">

                    <button type="submit" name="submit" id="submit">submit</button>
                </form>
            </div>
        </div>
    </div>


</body>
</html>
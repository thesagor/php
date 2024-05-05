<!doctype html>
<html lang="en">
<?php include_once "func.php"; ?>
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
                    $check= '';

                    if ( !empty($_REQUEST['name'])){
                        $name= htmlspecialchars($_REQUEST['name']);}

                    if ( !empty($_REQUEST['mail'])){
                    $mail=htmlspecialchars($_REQUEST['mail']);}

                    if ( !empty($_REQUEST['check'])==1){
                    $check="checked";}
                ?>


                <h3>Name is : <?php echo $name;  ?></h3>

                <h3>Mail is : <?php  echo $mail;   ?></h3>



                <form action="" method="POST">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" value="<?php echo $name;?>">

                    <label for="email">Email:</label>
                    <input type="email" name="mail" value="<?php echo $mail;?>">


                    <label for="fruits">Select some fruits</label>
                    <input type="checkbox" name="fruits[]" value="mango" <?php  fruitsChecked( 'mango')?>>
                    <label for="mango" class="label-inline">mango</label>
                    <input type="checkbox" name="fruits[]" value="graps" <?php  fruitsChecked('graps')?>>
                    <label for="graps" class="label-inline">graps</label>
                    <input type="checkbox" name="fruits[]" value="pineapple" <?php  fruitsChecked('pineapple') ?>>
                    <label for="pineapple" class="label-inline">pineapple</label>
                    <input type="checkbox" name="fruits[]" value="banana" <?php  fruitsChecked('banana') ?>>
                    <label for="banana" class="label-inline">Banana</label>


                    <button type="submit" name="submit" id="submit">submit</button>
                </form>
            </div>
        </div>
    </div>


</body>
</html>
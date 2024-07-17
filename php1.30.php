<?php

echo "Hello World!";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1 {
            color: blue;
        }

        /*    make it more style */
        form {
            margin-top: 20px;
        }

    </style>

</head>
<body>
<h1>Temperature Converter</h1>
<form action="php1.30.php" method="post">
    <label for="fahrenheit">Enter Fahrenheit in:</label>
    <input type="text" name="fahrenheit" id="fahrenheit">
    <input type="submit" value="Convert">
</form>
<?php
if (isset($_POST['fahrenheit'])) {
    $fahrenheit = $_POST['fahrenheit'];
    $celsius = ($fahrenheit - 32) * 5 / 9;
    printf("%.2fF is %.2fC", $fahrenheit, $celsius);
}
?>

</body>
</html>

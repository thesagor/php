<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ASCII</title>
</head>
<body>

    <!-- create a two column table -->
    <table border="1">
        <tr>
            <td>ASCII</td>
            <td>Character</td>
        </tr>
        <?php
            for ($i=0; $i<128;$i++){
                printf("<tr><td>%s</td><td>%s</td></tr>",$i,chr($i));
            }

        ?>

    </table>

</body>
</html>
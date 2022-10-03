<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title ?></title>
    </head>
    <body>
        <ul>
        <?php
            foreach($pizzas as $pizza){
                echo '
                    <li>'.$pizza["name"].'</li>
                ';
            }
        ?>
        </ul>
    </body>
</html>
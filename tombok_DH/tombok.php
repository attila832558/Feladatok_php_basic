<?php
    include("index.php");
    include("atomb.php");
    include("style.css")
    ?>
    <!DOCTYPE html>
    <html lang="hu">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta 
        <title>Document</title>
    </head>
    <body>
        <?php
            Test();
            ATomb();
            Nested1();
            Nested2();
            
        ?>
        <table>
            <?php echo Nested3(); ?>
</table>
    </body>
    </html>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        function Test()
        {
        $tomb= array();

            for($i=0; $i<10; $i++)
                $tomb[$i]= $i*2;
            

            $tomb2= array("Béla","Misi","Icuka");
            echo"<ul>";
            for($i=0; $i< sizeof($tomb2); $i++)
                echo"<li>". $tomb2[$i]. "</li>";
                echo"</ul>";
                echo "<br/>";

                print_r($tomb);


            }
                ?>
    
</body>
</html>
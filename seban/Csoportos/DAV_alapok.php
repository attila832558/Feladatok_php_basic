<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAV_alapok</title>
    
</head>
<body>
        <h1>1.Csoport</h1>
        <?php
            $a="2";
            $b="6";
            $ft="200";
            $áfa="15";
            $ft="200";
            
           
            echo "A kocka felszíne:".$b*($a*$a)."m<sup>2</sup>"."<br/>";
            echo "A gömb térfogata:".(((4*($a*$a*$a))*pi())/3)."m<sup>3</sup>"."<br/>";
            echo "Az átfogó hossza:".sqrt(($a*$a)+(5*5))."m"."<br/>";
            echo "A 200Ft-os áru áfa tartalma:" . $ft/100*$áfa . "Ft"."<br/>"; 
        ?>
        <h1>2.csoport</h1>
       
        <?php
         $szoveg= "HTML";
            echo "<span style='color: red; font-size: 7px; font-family: Arial;'>".$szoveg."</span><br/>";
            echo "<a href='www.google.com' target= blank>"."google"."<br/>"
            
        ?>
</body>
</html>
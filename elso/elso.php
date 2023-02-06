<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            width: 25px;
            height:25px;
            text-align: center;
            /*background-color: rgb(200, 250, 250);*/
        }
        #egyikszín{
            background-color:
        }
        #masikszín{
            background-color:rgb(255,255,255);
        }
        </style>
</head>
<body>
    <h1>Első lap</h1>
    <?php
        echo "hahó";
        echo "<h2>Alcím</h2>";
        echo "<h2>". 3+2 . "</h2>";
        $szam= 2;
        echo $szam;
        echo "</br>";
        echo var_dump($szam);
        echo "<hr/>";
        $a="3";
        $b="5";
        echo $a+$b. " ";
        echo $a.$b. "<br/>";
        $a=5;
        $b=5;
        echo $a==$b; //értékvizsgálat(megeggyezik e?)
        echo "<br/>";
        echo $a===$b;
        echo "<br/>";
        var_dump($a===$b);
        echo "<hr/>";
        $szam="12";
        $szam= $szam*1;
        var_dump($szam);
        echo "<br/>";
        $szam=9;
        $szam.="";
        var_dump($szam);
        echo "<hr/>";

        for($i=1; $i<=6; $i++)
            echo "<h".$i.">".$i.".rendű címsor"."</h".$i.">";
    ?>
    <h2>Szorzótábla</h2>
    <table>
        <?php
            for($i=1;$i<=10;$i++){
                
                for($j=1;$j<=10;$j++){
                    if($egyikszín)
                echo"<tr class='egyikszín'>" ;
                    echo "<td 'egyikszín'>";
                        echo $i*$j;
                    echo "</td>";    
                }
                echo"</tr>";
            }
        ?>
</table>
</body>
</html>
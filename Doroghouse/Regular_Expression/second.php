<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SZIT</title>
</head>
<body>
    <a href="https://szit.hu/doku.php?id=oktatas:programozas:php:php_regex"target=blank>forrás<br/></a>
<?php
  echo"A minta szöveg:<br/><br/>'Jóska iszik a kulacsból<br/>
  Iszik Jóska a kulacsból<br/>
  Iszik a kulacsból Jóska'<br/><br/>";
 $str = <<< EOS
  

 
 EOS;
    echo"Sor elején van benne a 'Jóska' szó:";
     print preg_match("/^Jóska/", $str);
     echo"<br/>";
     echo"Sorban van benne a 'Jóska' szó:";
     print preg_match("/Jóska/", $str);
     echo"<br/>";
     echo"Sorban van benne a 'Jóska' szó kis vagy nagy betűvel:";
     print preg_match("/jóska/i", $str);
     echo"<br/>";
 ?>
</body>
</html>
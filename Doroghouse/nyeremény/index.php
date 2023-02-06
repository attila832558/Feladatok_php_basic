<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adatok küldése fájlok közöt</title>
    <style>
        table, tr, td {
            border: 4px dotted black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Nyereményjáték</h1>

    <h2><a href="nyeremeny.php?kedvezmeny=10">10% kedvezmény</a></h2>
    
    <h2><a href="nyeremeny.php?ajandek=pendrive">Ajándék pendrive</a></h2>

    <h2><a href="nyeremeny.php?ingyenes=letvanytervezes">Ingyenes látványtervezés!</a></h2>

    <h2>Iratkozz fel a további nyereményeinkért!</h2>

    <form action="nyeremeny.php" method="GET">
        Név:<input type="text" name="nev"/> <br/><br/>
        E-mail cím: <input type="text" name="email"/><br/><br/>
        <input type="submit" value="Feliratkozás"><br/><br/> </form>

        <form action="nyeremeny.php" method="POST">
        Név:<input type="text" name="nev"/> <br/><br/>
        E-mail cím: <input type="text" name="email"/><br/><br/>
        <input type="submit" value="Feliratkozás"><br/><br/> </form>


       

    <?php
    
    ?>
    <table  
><?php
$k = 0;
for ($i = 1; $i<11; $i++)
{
  echo "<tr>";
  for($j=0; $j<=5; $j++)
  {
    echo "<td>";
    echo $k;
    $k++;
    echo "</td>";
  }
  echo "</tr>";
}
?></table>
</body>
</html>
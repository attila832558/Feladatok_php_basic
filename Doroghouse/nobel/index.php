<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Nobel</title>
</head>
<body>
<?php
$file_to_read = fopen("nobel.csv", "r");
if ($file_to_read!== FALSE) 
{
     
    echo "<table>\n";
    while(($data = fgetcsv($file_to_read, 1000, ';')) !== FALSE){
        echo "<tr>";
        for($i = 3; $i < count($data); $i++) {
           echo "<td>".$data[0]."</td>";
           echo "<td>".$data[1]."</td>";
            echo "<td>".$data[2]." ".$data[3]."</td>";
            
        }
        echo "</tr>\n";
    }
    echo "</table>\n";
 
    fclose($file_to_read);
}
    ?>
   
</body>
</html> 




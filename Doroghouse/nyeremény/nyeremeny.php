<?php
print_r($_REQUEST);
$nyeremeny="semmi";
if(isset($GET['kedvezmény']))
{
$nyeremeny= $_GET['kedvezmeny'];
$nyeremeny.="% kedvezmény";
}
if(isset($_GET['ajándék']))
{
    $nyeremeny= $_GET['ajándék'];
}

$nev;
$email;
if(isset($_GET['nev']))
$nev=$_GET['nev'];
if(isset($_GET['email']))
$email= $_GET['email'];

if(isset($_POST['nev']))
    $nev= $_POST['nev'];
if(isset($_POST['email']))
$email=$_POST['email'];
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>A te nyereményed: <?php echo $nyeremeny;?> </h1>
    <h2 style="color: red">    
    <?php
        if(isset($email)&& strlen($email)!=0 )
            echo"Köszönjük, hogy feliratkozott"." " .$nev."!";
    ?>
</body>
</html>
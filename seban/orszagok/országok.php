<?php
$db="foldrajz";
$host="localhost";
$port="5432";
$user="root";
$password="";
$connection_string = "host=$host port=$port dbname=$db user=$user password=$password";
$dbconn = pg_connect($connection_string);
if (!$dbconn) {
    echo "Hiba a kapcsolat létrehozásakor.\n";
    exit;
}

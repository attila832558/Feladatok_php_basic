<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script rel="script.js"></script>
    <title>Nyelviskola</title>
</head>
<body>
    <?php
    $host  = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "GFG";

    // Create database connection
    mysqli_connect($host, $dbuser, $dbpass, $dbname);

    // Check connection
    if(mysqli_connect_error())
    {
        echo "Connection establishing failed!";
    }
    else
    {
        echo "Connection established successfully.";
    }
    $servername = "localhost";
    $username = "root";
    $port= "3306";
    $password = "";

    $conn = new mysqli($servername, $username, $port, $password);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "CREATE DATABASE nyelviskola DEFAULT CHARACTER set utf8 COLLATE utf8_hungarian_ci";
    if ($conn->query($sql) === TRUE) {
        echo "Database has been created successfully";
    } else {
        echo "Error creating database: " . $conn->error;
    }
    $conn->close();

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gfgDB";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "CREATE TABLE nyelvek (
        id INT(6) AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Table has been created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }

    $conn->close();


    ?>
</body>
</html>
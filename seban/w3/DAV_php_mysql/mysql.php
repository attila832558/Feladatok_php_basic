<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2.feladat</title>
</head>
<body>
    <?php
// Create database

$servername = "localhost";
$username = "my_user";
$password = "my_password";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE my_db";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
?>


<?php
$mysqli = new mysqli("localhost","my_user","my_password","my_db");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// Perform queries and print out affected rows
$mysqli -> query("SELECT * FROM Persons");
echo "Affected rows: " . $mysqli -> affected_rows;

$mysqli -> query("DELETE FROM Persons WHERE Age>32");
echo "Affected rows: " . $mysqli -> affected_rows;

$mysqli -> close();
?>
<?php
$mysqli = new mysqli("localhost","my_user","my_password");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// Perform queries and print out affected rows
$mysqli -> query("SELECT * FROM Persons");
echo "Affected rows: " . $mysqli -> affected_rows;

$mysqli -> query("DELETE FROM Persons WHERE Age>32");
echo "Affected rows: " . $mysqli -> affected_rows;

$mysqli -> close();
?>
<?php
$con = mysqli_connect("localhost","my_user","my_password","my_db");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

// Perform queries and print out affected rows
mysqli_query($con, "SELECT * FROM Persons");
echo "Affected rows: " . mysqli_affected_rows($con);

mysqli_query($con, "DELETE FROM Persons WHERE Age>32");
echo "Affected rows: " . mysqli_affected_rows($con);

mysqli_close($con);
?>
<?php
$mysqli = new mysqli("localhost","my_user","my_password","my_db");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// Turn autocommit off
$mysqli -> autocommit(FALSE);

// Insert some values
$mysqli -> query("INSERT INTO Persons (FirstName,LastName,Age)
VALUES ('Peter','Griffin',35)");
$mysqli -> query("INSERT INTO Persons (FirstName,LastName,Age)
VALUES ('Glenn','Quagmire',33)");

// Commit transaction
if (!$mysqli -> commit()) {
  echo "Commit transaction failed";
  exit();
}

$mysqli -> close();
?>
<?php
$con=mysqli_connect("localhost","my_user","my_password","my_db");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit;
}

// Turn autocommit off
mysqli_autocommit($con,FALSE);

// Insert some values
mysqli_query($con,"INSERT INTO Persons (FirstName,LastName,Age)
VALUES ('Peter','Griffin',35)");
mysqli_query($con,"INSERT INTO Persons (FirstName,LastName,Age)
VALUES ('Glenn','Quagmire',33)");

// Commit transaction
if (!$mysqli_commit($con)) {
  echo "Commit transaction failed";
  exit();
}

// Close connection
mysqli_close($con);
?>
<?php
$mysqli = new mysqli("localhost","my_user","my_password","my_db");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// Reset all and select a new database
$mysqli -> change_user("my_user", "my_password", "test");

$mysqli -> close();
?>
<?php
$con=mysqli_connect("localhost","my_user","my_password","my_db");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

// Reset all and select a new database
mysqli_change_user($con, "my_user", "my_password", "test");

mysqli_close($con);
?>
<?php
$mysqli = new mysqli("localhost","my_user","my_password","my_db");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$charset = $mysqli -> character_set_name();
echo "Default character set is: " . $charset;

$mysqli -> close();
?>
<?php
$con=mysqli_connect("localhost","my_user","my_password","my_db");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$charset=mysqli_character_set_name($con);
echo "Default character set is: " . $charset;

mysqli_close($con);
?>
<?php
$mysqli = new mysqli("localhost","my_user","my_password","my_db");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// ....some PHP code...

$mysqli -> close();
?>
<?php
$con=mysqli_connect("localhost","my_user","my_password","my_db");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit;
}

// ....some PHP code...

mysqli_close($con);
?>
<?php
$mysqli = new mysqli("localhost","my_user","my_password","my_db");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// Turn autocommit off
$mysqli -> autocommit(FALSE);

// Insert some values
$mysqli -> query("INSERT INTO Persons (FirstName,LastName,Age)
VALUES ('Peter','Griffin',35)");
$mysqli -> query("INSERT INTO Persons (FirstName,LastName,Age)
VALUES ('Glenn','Quagmire',33)");

// Commit transaction
if (!$mysqli -> commit()) {
  echo "Commit transaction failed";
  exit();
}

$mysqli -> close();
?>
<?php
$con=mysqli_connect("localhost","my_user","my_password","my_db");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit;
}

// Turn autocommit off
mysqli_autocommit($con,FALSE);

// Insert some values
mysqli_query($con,"INSERT INTO Persons (FirstName,LastName,Age)
VALUES ('Peter','Griffin',35)");
mysqli_query($con,"INSERT INTO Persons (FirstName,LastName,Age)
VALUES ('Glenn','Quagmire',33)");

// Commit transaction
if (!mysqli_commit($con)) {
  echo "Commit transaction failed";
  exit();
}

// Close connection
mysqli_close($con);
?>
<?php
$mysqli = new mysqli("localhost","my_user","my_password","my_db");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>
<?php
$con = mysqli_connect("localhost","my_user","my_password","my_db");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?>
<?php
$mysqli = new mysqli("localhost","my_user","my_password","my_db");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>
<?php
$con = mysqli_connect("localhost","my_user","my_password","my_db");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?>
<?php
$con=mysqli_connect("localhost","my_user","my_password","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT Lastname,Age FROM Persons ORDER BY Lastname";

if ($result=mysqli_query($con,$sql))
  {
  // Seek to row number 15
  mysqli_data_seek($result,14);

  // Fetch row
  $row=mysqli_fetch_row($result);

  printf ("Lastname: %s Age: %s\n", $row[0], $row[1]);

  // Free result set
  mysqli_free_result($result);
}

mysqli_close($con);
?>
<?php
mysqli_debug("d:t:o,/temp/client.trace");
?>
<?php
$mysqli = new mysqli("localhost","my_user","my_password","my_db");

$mysqli -> dump_debug_info();
?>
<?php
$con = mysqli_connect("localhost","my_user","my_password","my_db");

mysqli_dump_debug_info($con);
?>
<?php
$mysqli = new mysqli("localhost","my_user","my_password","my_db");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// Perform a query, check for error
if (!$mysqli -> query("INSERT INTO Persons (FirstName) VALUES ('Glenn')")) {
  print_r($mysqli -> error_list);
}

$mysqli -> close();
?>
<?php
$con=mysqli_connect("localhost","my_user","my_password","my_db");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

// Perform a query, check for error
if (!mysqli_query($con,"INSERT INTO Persons (FirstName) VALUES ('Glenn')")) {
  print_r(mysqli_error_list($con));
}

mysqli_close($con);
?>
<?php
$mysqli = new mysqli("localhost","my_user","my_password","my_db");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$sql = "SELECT Lastname, Age FROM Persons ORDER BY Lastname";
$result = $mysqli -> query($sql);

// Fetch all
$result -> fetch_all(MYSQLI_ASSOC);

// Free result set
$result -> free_result();

$mysqli -> close();
?>
<?php
$con = mysqli_connect("localhost","my_user","my_password","my_db");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
} 

$sql = "SELECT Lastname, Age FROM Persons ORDER BY Lastname";
$result = mysqli_query($con, $sql);

// Fetch all
mysqli_fetch_all($result, MYSQLI_ASSOC);

// Free result set
mysqli_free_result($result);

mysqli_close($con);
?>
<?php
$mysqli = new mysqli("localhost","my_user","my_password","my_db");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$mysqli -> query("SELECT * FROM Friends");
// Get number of columns - will return 3
$mysqli -> field_count();

$mysqli -> close();
?>
<?php
$mysqli = new mysqli("localhost","my_user","my_password","my_db");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$sql = "SELECT Lastname, Age FROM Persons ORDER BY Lastname";

if ($result = $mysqli -> query($sql)) {

  // Get field information for second column
  $result = field_seek(1);
  $fieldinfo = $result -> fetch_field();

  printf("Name: %s\n", $fieldinfo -> name);
  printf("Table: %s\n", $fieldinfo -> table);
  printf("Max. Len: %d\n", $fieldinfo -> max_length);
  $result -> free_result();
}

$mysqli -> close();
?>
<?php
$mysqli = new mysqli("localhost","my_user","my_password","my_db");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

var_dump($mysqli -> get_charset());

$mysqli -> close();
?>
<?php
$con = mysqli_connect("localhost","my_user","my_password","my_db");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

var_dump(mysqli_get_charset($con));

mysqli_close($con);
?>
<?php
echo mysqli_get_client_info();
?>
<?php
$con = mysqli_connect("localhost","my_user","my_password","my_db");
print_r(mysqli_get_client_stats());
?>
<?php
$mysqli = new mysqli("localhost","my_user","my_password","my_db");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// Get thread id
$t_id = $mysqli -> thread_id;

// Kill connection
$mysqli -> kill($t_id);

$mysqli -> close();
?>
<?php
$con = mysqli_init();
if (!$con) {
  die("mysqli_init failed");
}

if (!mysqli_real_connect($con,"localhost","my_user","my_password","my_db")) {
  die("Connect Error: " . mysqli_connect_error());
}

mysqli_close($con);
?> 
<?php
$mysqli = new mysqli("localhost","my_user","my_password","my_db");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// Check if server is alive
if ($mysqli -> ping()) {
  echo "Connection is ok!";
} else {
  echo "Error: ". $mysqli -> error;
}

$mysqli -> close();
?>
<?php
$mysqli = mysqli_init();
if (!$mysqli) {
  die("mysqli_init failed");
}

// Specify connection timeout
$con -> options(MYSQLI_OPT_CONNECT_TIMEOUT, 10);

// Specify read options from named file instead of my.cnf
$con -> options(MYSQLI_READ_DEFAULT_FILE, "myfile.cnf");

$con -> real_connect("localhost","my_user","my_password","my_db");
?> 
<?php
$mysqli = new mysqli("localhost","my_user","my_password","my_db");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// prepare and bind
$stmt = $mysqli -> prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt -> bind_param("sss", $firstname, $lastname, $email);

// set parameters and execute
$firstname = "John";
$lastname = "Doe";
$email = "john@example.com";
$stmt -> execute();

$firstname = "Mary";
$lastname = "Moe";
$email = "mary@example.com";
$stmt -> execute();

echo "New records created successfully";

$stmt -> close();
$mysqli -> close();
?>
<?php
$mysqli = new mysqli("localhost","my_user","my_password","my_db");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// Perform query
if ($result = $mysqli -> query("SELECT * FROM Persons")) {
  echo "Returned rows are: " . $result -> num_rows;
  // Free result set
  $result -> free_result();
}

$mysqli -> close();
?>
<?php
$mysqli = mysqli_init();
if (!$mysqli) {
  die("mysqli_init failed");
}

// Specify connection timeout
$con -> options(MYSQLI_OPT_CONNECT_TIMEOUT, 10);

// Specify read options from named file instead of my.cnf
$con -> options(MYSQLI_READ_DEFAULT_FILE, "myfile.cnf");

$con -> real_connect("localhost","my_user","my_password","my_db");
?> 
</body>
</html>
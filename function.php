<?php


function connectDb() {

echo 'connect<br>';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bieren";

try {
  $conn = new PDO("mysql:host=$servername;dbname= $dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

return $conn;

}



function OvzBieren(){

    echo "overzicht <br>";
}

?>
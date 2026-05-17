<?php
$servername = "podatkovna-baza";
$username = "root";
$password = "superVarnoGeslo";
$dbname = "Ramsak";  // malo r !

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Povezava na bazo uspešna";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
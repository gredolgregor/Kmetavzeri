<?php
$servername = "podatkovna-baza";
$username = "root";
$password = "superVarnoGeslo";
$dbname = "Ramsak";
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Povezava na bazo uspešna";  ← IZBRIŠI TO VRSTICO
} catch(PDOException $e) {
  die("Napaka: " . $e->getMessage());
}
?>
<?php
$servername = "localhost";
$dbname = "tp1";
$dbuser = "cha";
$dbpassword = "1234";

try {
  $bddConnect = new PDO("mysql:host=".$servername.";dbname=".$dbname, $dbuser, $dbpassword);
  $bddConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully &#128515;";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
 ?>

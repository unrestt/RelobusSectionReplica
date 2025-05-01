<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'relobus_database';

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Błąd połączenia: " . $conn->connect_error);
}
?>

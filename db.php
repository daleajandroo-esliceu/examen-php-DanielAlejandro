<?php
$mysqli = new mysqli("db_examen_daniel", "examen", "examen123", "examen_php");

if ($mysqli->connect_error) {
    die("Error de connexió: " . $mysqli->connect_error);
}
?>

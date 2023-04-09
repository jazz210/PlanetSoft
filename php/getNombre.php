<?php

require 'database.php';

$con = new Database();
$pdo = $con->conectar();

$ci = $_POST["ci"];

$sql = "SELECT nombreCompleto FROM usuario WHERE nombreCompleto LIKE ? ORDER BY nombreCompleto  ASC";
$query = $pdo->prepare($sql);
$query->execute([$ci . '%']);

$html = "";

while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
	$html .= "<li>" . $row["nombreCompleto"]. "</li>";
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);
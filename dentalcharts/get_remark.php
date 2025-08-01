<?php
$tooth = $_GET['tooth'];
$clientId = (int) $_GET['clientid'];

// $conn = new mysqli("localhost", "root", "", "qualitreat_db");
$conn = new mysqli("216.218.206.42", "qualitre_admin", "wD?j{)4yY+UML&b#", "qualitre_sysdb");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT remarks FROM toothremarks WHERE tooth = ? AND clientid = ?";
$stmt = $conn->prepare($query);

if (!$stmt) {
    // Show detailed SQL error
    die("Prepare failed: " . $conn->error);
}

$stmt->bind_param("si", $tooth, $clientId);
$stmt->execute();

$result = $stmt->get_result();
$row = $result->fetch_assoc();

echo json_encode(['remark' => $row['remarks'] ?? '']);

$stmt->close();
$conn->close();
?>
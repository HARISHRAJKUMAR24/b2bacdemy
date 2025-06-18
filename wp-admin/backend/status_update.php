<?php
header('Content-Type: application/json');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('../resource/conn.php');

$database = new Database();
$conn = $database->getConnection();

function respond($data, $code = 200)
{
    http_response_code($code);
    echo json_encode($data);
    exit;
}

try {
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        respond(["status" => "error", "message" => "Invalid request method."], 405);
    }

    if (!isset($_POST['rollno']) || empty($_POST['rollno'])) {
        respond(["status" => "error", "message" => "Missing roll number."], 400);
    }

    $sql = "UPDATE students SET 
        status = :status

        WHERE rollNo = :rollno";

    $stmt = $conn->prepare($sql);

    $params = [
        ':status' => $_POST['status'] ?? '',
        ':rollno' => $_POST['rollno'] ?? '',
    ];

    $stmt->execute($params);

    respond(["status" => "success", "message" => "Student status updated successfully."]);
} catch (PDOException $e) {
    respond(["status" => "error", "message" => "Database error: " . $e->getMessage()], 500);
} catch (Exception $e) {
    respond(["status" => "error", "message" => "Unexpected error: " . $e->getMessage()], 500);
}

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

    
    if (!isset($_POST['rollno']) || empty($_POST['rollno']) || !isset($_POST['status']) || !isset($_POST['course'])) {
        respond(["status" => "error", "message" => "Missing required parameters."], 400);
    }

    $rollno = $_POST['rollno'];
    $newStatus = (int) $_POST['status'];
    $courseId = (int) $_POST['course'];

    //Fetch previous student status
    $fetchStmt = $conn->prepare("SELECT status FROM students WHERE rollNo = :rollno");
    $fetchStmt->bindParam(':rollno', $rollno);
    $fetchStmt->execute();
    $existing = $fetchStmt->fetch(PDO::FETCH_ASSOC);

    if (!$existing) {
        respond(["status" => "error", "message" => "Student not found."], 404);
    }

    $oldStatus = (int) $existing['status'];

    //Update student status
    $updateStmt = $conn->prepare("UPDATE students SET status = :status WHERE rollNo = :rollno");
    $updateStmt->bindParam(':status', $newStatus, PDO::PARAM_INT);
    $updateStmt->bindParam(':rollno', $rollno);
    $updateStmt->execute();

    
    error_log("RollNo: $rollno | Old Status: $oldStatus | New Status: $newStatus | Update Count: " . $updateStmt->rowCount());

    //adjust course count
    if ($oldStatus !== $newStatus) {
        if ($oldStatus == 1 && $newStatus == 0) {
            //  reduce active count
            $updateEnroll = $conn->prepare("UPDATE course SET active = CASE WHEN active > 0 THEN active - 1 ELSE 0 END WHERE id = :courseId");
        } elseif ($oldStatus == 0 && $newStatus == 1) {
            // increase active count
            $updateEnroll = $conn->prepare("UPDATE course SET active = active + 1 WHERE id = :courseId");
        }

        if (isset($updateEnroll)) {
            $updateEnroll->bindParam(':courseId', $courseId, PDO::PARAM_INT);
            $updateEnroll->execute();
        }

        respond([
            "status" => "success",
            "message" => "Student status updated and course count adjusted.",
            "rollNo" => $rollno
        ]);
    } else {
        respond(["status" => "info", "message" => "No status change. No update made."], 200);
    }
} catch (PDOException $e) {
    respond(["status" => "error", "message" => "Database error: " . $e->getMessage()], 500);
} catch (Exception $e) {
    respond(["status" => "error", "message" => "Unexpected error: " . $e->getMessage()], 500);
}

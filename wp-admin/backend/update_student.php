<?php
header('Content-Type: application/json');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('../resource/conn.php');

$database = new Database();
$conn = $database->getConnection();

function respond($data, $code = 200) {
    http_response_code($code);
    echo json_encode($data);
    exit;
}

try {
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        respond(["status" => "error", "message" => "Invalid request method."], 405);
    }

    if (!isset($_GET['rollno']) || empty($_GET['rollno'])) {
        respond(["status" => "error", "message" => "Missing roll number."], 400);
    }

    $rollno = $_GET['rollno'];

    $sql = "UPDATE students SET 
        studentName = :studentName,
        dob = :dob,
        bloodGroup = :bloodGroup,
        age = :age,
        course = :course,
        fatherName = :fatherName,
        motherName = :motherName,
        fatherOccupation = :fatherOccupation,
        motherOccupation = :motherOccupation,
        contactNumber = :contactNumber,
        alternateContact = :alternateContact,
        stdStudying = :stdStudying,
        boardStudy = :boardStudy,
        camp = :camp,
        joiningDate = :joiningDate,
        referrer = :referrer,
        residentialAddress = :residentialAddress,
        created_at = :created_at
        WHERE rollNo = :rollno";

    $stmt = $conn->prepare($sql);

    $params = [
        ':studentName' => $_POST['studentName'] ?? '',
        ':dob' => $_POST['dob'] ?? '',
        ':bloodGroup' => $_POST['bloodGroup'] ?? '',
        ':age' => $_POST['age'] ?? '',
        ':course' => $_POST['course'] ?? '',
        ':fatherName' => $_POST['fatherName'] ?? '',
        ':motherName' => $_POST['motherName'] ?? '',
        ':fatherOccupation' => $_POST['fatherOccupation'] ?? '',
        ':motherOccupation' => $_POST['motherOccupation'] ?? '',
        ':contactNumber' => $_POST['contactNumber'] ?? '',
        ':alternateContact' => $_POST['alternateContact'] ?? '',
        ':stdStudying' => $_POST['stdStudying'] ?? '',
        ':boardStudy' => $_POST['boardStudy'] ?? '',
        ':camp' => $_POST['camp'] ?? '',
        ':joiningDate' => $_POST['joiningDate'] ?? '',
        ':referrer' => $_POST['referrer'] ?? '',
        ':residentialAddress' => $_POST['residentialAddress'] ?? '',
        ':created_at' => $_POST['created_at'] ?? date('Y-m-d H:i:s'),
        ':rollno' => $rollno
    ];

    $stmt->execute($params);

    respond(["status" => "success", "message" => "Student record updated successfully."]);

} catch (PDOException $e) {
    respond(["status" => "error", "message" => "Database error: " . $e->getMessage()], 500);
} catch (Exception $e) {
    respond(["status" => "error", "message" => "Unexpected error: " . $e->getMessage()], 500);
}

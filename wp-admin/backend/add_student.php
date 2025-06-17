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

    $required_fields = ['studentName', 'stdStudying', 'course', 'contactNumber'];
    foreach ($required_fields as $field) {
        if (empty($_POST[$field])) {
            respond(["status" => "error", "message" => "Missing required field: $field"], 422);
        }
    }

    // Handle student photo upload
    $photoPath = null;
    if (isset($_FILES['studentPhoto']) && $_FILES['studentPhoto']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = '../assets/img/students/';
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $fileTmp = $_FILES['studentPhoto']['tmp_name'];
        $fileName = basename($_FILES['studentPhoto']['name']);
        $fileExt = pathinfo($fileName, PATHINFO_EXTENSION);
        $newFileName = uniqid('student_') . '.' . $fileExt;
        $targetFilePath = $uploadDir . $newFileName;

        if (!move_uploaded_file($fileTmp, $targetFilePath)) {
            respond(["status" => "error", "message" => "Failed to upload student photo."], 500);
        }

        $photoPath = $newFileName;
    }

   
    $yearSuffix = date('y'); 
    $prefix = "B2B{$yearSuffix}SID";

    
    $query = "SELECT rollNo FROM students WHERE rollNo LIKE :prefix ORDER BY rollNo DESC LIMIT 1";
    $stmt = $conn->prepare($query);
    $likePrefix = $prefix . "%";
    $stmt->bindParam(':prefix', $likePrefix, PDO::PARAM_STR);
    $stmt->execute();
    $lastRoll = $stmt->fetchColumn();

    $nextNumber = 1;
    if ($lastRoll) {
        $lastNumber = (int)substr($lastRoll, -2);
        $nextNumber = $lastNumber + 1;
    }

    $rollNo = $prefix . str_pad($nextNumber, 2, '0', STR_PAD_LEFT);

    // Insert student data with roll number
    $sql = "INSERT INTO students (studentName, stdStudying, course, contactNumber, studentPhoto, rollNo)
            VALUES (:studentName, :stdStudying, :course, :contactNumber, :studentPhoto, :rollNo)";
    $stmt = $conn->prepare($sql);

    $success = $stmt->execute([
        ':studentName'    => $_POST['studentName'],
        ':stdStudying'    => $_POST['stdStudying'],
        ':course'         => $_POST['course'],
        ':contactNumber'  => $_POST['contactNumber'],
        ':studentPhoto'   => $photoPath,
        ':rollNo'         => $rollNo
    ]);

    if ($success) {
        respond(["status" => "success", "message" => "Admission Form Submitted Successfully!", "rollNo" => $rollNo], 201);
    } else {
        respond(["status" => "error", "message" => "Failed to insert into database."], 500);
    }

} catch (PDOException $e) {
    respond(["status" => "error", "message" => "Database error: " . $e->getMessage()], 500);
} catch (Exception $e) {
    respond(["status" => "error", "message" => "Unexpected error: " . $e->getMessage()], 500);
}

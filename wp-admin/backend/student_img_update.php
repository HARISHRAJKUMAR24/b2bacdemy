<?php
header('Content-Type: application/json');
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

    if (empty($_POST['rollno'])) {
        respond(["status" => "error", "message" => "Missing roll number."], 422);
    }

    $rollno = $_POST['rollno'];

    // Fetch existing photo
    $stmt = $conn->prepare("SELECT studentPhoto FROM students WHERE rollNo = :rollno");
    $stmt->execute([':rollno' => $rollno]);
    $student = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$student) {
        respond(["status" => "error", "message" => "Student not found."], 404);
    }

    $uploadDir = '../assets/img/students/';
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    if (isset($_FILES['studentPhoto']) && $_FILES['studentPhoto']['error'] === UPLOAD_ERR_OK) {
        $tmpName = $_FILES['studentPhoto']['tmp_name'];
        $fileName = basename($_FILES['studentPhoto']['name']);
        $ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $allowed = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

        if (!in_array($ext, $allowed)) {
            respond(["status" => "error", "message" => "Invalid file type."], 400);
        }

        $newName = uniqid('student_') . '.' . $ext;
        $targetPath = $uploadDir . $newName;

        if (!move_uploaded_file($tmpName, $targetPath)) {
            respond(["status" => "error", "message" => "Failed to upload image."], 500);
        }

        // Remove old photo
        if (!empty($student['studentPhoto']) && file_exists($uploadDir . $student['studentPhoto'])) {
            unlink($uploadDir . $student['studentPhoto']);
        }

        // Update DB
        $update = $conn->prepare("UPDATE students SET studentPhoto = :photo WHERE rollNo = :rollno");
        $update->execute([
            ':photo' => $newName,
            ':rollno' => $rollno
        ]);

        respond(["status" => "success", "message" => "Student photo updated successfully."]);
    } else {
        respond(["status" => "error", "message" => "No photo uploaded."], 400);
    }

} catch (Exception $e) {
    respond(["status" => "error", "message" => $e->getMessage()], 500);
}

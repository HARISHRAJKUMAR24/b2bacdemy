<?php



try {
  

    $student_query = "SELECT studentName, studentPhoto, stdStudying, course, contactNumber,rollNo FROM students ORDER BY id DESC " ;
    $stmt = $conn->prepare($student_query);
    $stmt->execute();

    $students = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $students = [];
    error_log("Database error: " . $e->getMessage());
}

?>
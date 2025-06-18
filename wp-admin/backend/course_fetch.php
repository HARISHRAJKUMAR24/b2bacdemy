<?php


try { 
    $course_name = "SELECT id, courseName FROM courses";
    $course_stmt = $conn->prepare($course_name);
    $course_stmt->execute();

    $courses = $course_stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $courses = [];
    error_log("Database error: " . $e->getMessage());
}
?>
<?php
require_once './database/dbconnect.php';

// Create database connection
$database = new Database();
$conn = $database->getConnection();

// Fetch total student count
$countQuery = "SELECT COUNT(*) AS total_students FROM students";
$stmt = $conn->prepare($countQuery);
$stmt->execute();
$totalStudents = $stmt->fetch(PDO::FETCH_ASSOC)['total_students'];

// Fetch student details (only required fields)
$studentsQuery = "SELECT student_name, standard_studying, blood_group, course_details FROM students ORDER BY id DESC";
$stmt = $conn->prepare($studentsQuery);
$stmt->execute();
$students = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Dashboard Template · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="./css/dashboard.css" rel="stylesheet">
</head>

<body>
    <?php include('./lib/themebtn.php') ?>
    <?php include('./lib/svg.php') ?>

    <header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="#">B2B Academy</a>
    </header>

    <div class="container-fluid">
        <div class="row">
            <?php include('./lib/navbar.php') ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Attendance</h1>
                </div>

                <!-- Student Count -->
                <div class="alert alert-info">
                    <strong>Total Students: <?= $totalStudents ?></strong>
                </div>

                <!-- Minimal Student Table -->
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Standard</th>
                                <th>Blood Group</th>
                                <th>Course</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($students as $index => $student): ?>
                                <tr>
                                    <td><?= $index + 1 ?></td>
                                    <td><?= htmlspecialchars($student['student_name']) ?></td>
                                    <td><?= htmlspecialchars($student['standard_studying']) ?></td>
                                    <td><?= htmlspecialchars($student['blood_group']) ?></td>
                                    <td><?= htmlspecialchars($student['course_details']) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

            </main>
        </div>
    </div>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php

include('./resource/conn.php');
$database = new Database();
$conn = $database->getConnection();
include("./backend/student_list.php");

include("./backend/course_fetch.php");


?>


<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Students | B2BAcademy</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="./css/dashboard.css" rel="stylesheet">
    <!-- add student -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const form = document.getElementById("admissionForm");
            const submitButton = form.querySelector("button[type='submit']");

            form.addEventListener('submit', function(event) {
                event.preventDefault();

                const formData = new FormData(form);

                submitButton.disabled = true;
                const originalText = submitButton.textContent;
                submitButton.textContent = "Submitting...";

                fetch("./backend/add_student.php", {
                        method: "POST",
                        body: formData
                    })
                    .then(response => {
                        if (!response.ok) throw new Error("Server responded with an error.");
                        return response.json();
                    })
                    .then(data => {
                        alert(data.message || "Form submitted successfully.");
                        if (data.message && data.message.includes("Successfully")) {
                            form.reset();
                            window.location.reload();
                        }
                    })
                    .catch(error => {
                        console.error("Error:", error);
                        alert("Submission failed. Please try again.");
                    })
                    .finally(() => {
                        submitButton.disabled = false;
                        submitButton.textContent = originalText;
                    });
            });
        });
    </script>
</head>

<body>
    <?php include('./lib/themebtn.php') ?>


    <?php include('./lib/svg.php') ?>

    <header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="#">B2B Academy</a>

        <ul class="navbar-nav flex-row d-md-none">
            <li class="nav-item text-nowrap">
                <button class="nav-link px-3 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle search">
                    <svg class="bi">
                        <use xlink:href="#search" />
                    </svg>
                </button>
            </li>
            <li class="nav-item text-nowrap">
                <button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <svg class="bi">
                        <use xlink:href="#list" />
                    </svg>
                </button>
            </li>
        </ul>

        <div id="navbarSearch" class="navbar-search w-100 collapse">
            <input class="form-control w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <?php include('./lib/navbar.php') ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Students Details</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#addstudent">Add Student</button>
                        </div>
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                        </div>
                    </div>
                </div>


                <div class="modal fade" id="addstudent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="admissionForm" enctype="multipart/form-data" method="POST">
                                    <!-- Row 1 -->
                                    <div class="row g-4">
                                        <div class="col-md-6">
                                            <label for="studentName" class="form-label">Student's Name</label>
                                            <input type="text" class="form-control" id="studentName" name="studentName" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="stdStudying" class="form-label">Standard</label>
                                            <input type="text" class="form-control" id="stdStudying" name="stdStudying" required>
                                        </div>


                                    </div>
                                    <!--Row 2  -->
                                    <div class="row g-4 mt-1">

                                        <div class="col-md-6">
                                            <label for="course" class="form-label">Course</label>
                                            <select class="form-select" id="course" name="course" required>
                                                <option disabled selected>Select...</option>
                                                <?php foreach ($courses as $course): ?>
                                                    <option value="<?= $course['id']     ?>"><?= safe_htmlspecialchars($course['courseName']) ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="contactNumber" class="form-label">Contact Number</label>
                                            <input type="number" class="form-control" id="contactNumber" name="contactNumber" required
                                                autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="row-g-4 mt-4">
                                        <div class="col-md-12">
                                            <label for="studentPhoto" class="form-label">Student Photo</label>
                                            <input type="file" class="form-control" id="studentPhoto" name="studentPhoto" required
                                                accept="image/*">
                                        </div>
                                    </div>


                                    <!-- Submit Button -->
                                    <div class="text-center mt-4" id="ad_btn">
                                        <button type="submit" class="btn btn-primary px-5">Submit</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Student Count -->
                <div class="alert alert-info">
                    <strong>Total Students: <?= count($students) ?> </strong>
                </div>

                <!-- Minimal Student Table -->
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>RollNo</th>
                                <th>Photo</th>
                                <th>Standard</th>
                                <th>Course</th>
                                <th>Contact</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($students as $index => $student): ?>
                                <tr>
                                    <td><?= $index + 1 ?></td>
                                    <td><?= safe_htmlspecialchars($student['studentName']) ?></td>
                                    <td><?= safe_htmlspecialchars($student['rollNo']) ?></td>
                                    <td><img src="./assets/img/students/<?= safe_htmlspecialchars($student['studentPhoto']) ?>" class="student_Photo" style="width: 65px;height:75px;overflow:hidden;object-fit:cover;" alt=""></td>
                                    <td><?= safe_htmlspecialchars($student['stdStudying']) ?></td>
                                    <td>
                                        <?php
                                        $course_name_smt = $conn->prepare("SELECT courseName FROM courses WHERE id = :id");
                                        $course_name_smt->bindParam(':id', $student['course'], PDO::PARAM_INT);
                                        $course_name_smt->execute();

                                        $course_name = $course_name_smt->fetch(PDO::FETCH_ASSOC);

                                        if ($course_name !== false) {
                                            echo safe_htmlspecialchars($course_name['courseName']);
                                        } else {
                                            echo 'Course not found';
                                        }
                                        ?>
                                    </td>

                                    <td><?= safe_htmlspecialchars($student['contactNumber']) ?></td>
                                    <td>
                                        <a href="./student.php?rollno=<?= safe_htmlspecialchars($student['rollNo']) ?>" target="_blank" class="me-4"><i class="bi bi-eye-fill"></i></a>
                                        <a href="./update_student.php?rollno=<?= safe_htmlspecialchars($student['rollNo']) ?>" arget="_blank"><i class="bi bi-pencil-square"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

            </main>
        </div>
    </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"></script>
    <script src="./js/dashboard.js"></script>
</body>

</html>
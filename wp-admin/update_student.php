<?php

require_once("./resource/conn.php");

$database = new Database();
$conn = $database->getConnection();

if (isset($_GET['rollno'])) {

    $rollno = $_GET['rollno'];

    $student_query = "SELECT id, studentPhoto, rollNo, studentName, dob, bloodGroup, age, course,status, fatherName, motherName, fatherOccupation, motherOccupation, contactNumber, alternateContact, stdStudying, boardStudy, camp, joiningDate, referrer, residentialAddress FROM students WHERE rollNo = :rollno";

    $stmt = $conn->prepare($student_query);
    $stmt->bindParam(':rollno', $rollno, PDO::PARAM_STR);
    $stmt->execute();

    $student_info = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($student_info) {
        $student = $student_info;
    } else {
        echo "<script>alert('Student not found'); window.location.href='./';</script>";
    }
} else {
    echo "<script>alert('No roll number provided'); window.location.href='./';</script>";
}

include("./backend/course_fetch.php");

?>



<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.122.0">
    <title><?= safe_htmlspecialchars($student['studentName']) ?> Edit | B2BAcademy</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">



    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">

    <link href="./css/dashboard.css" rel="stylesheet">

<!-- for the data update -->
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

                fetch("./backend/update_student.php?rollno=<?= safe_htmlspecialchars($student['rollNo']) ?> ", {
                        method: "POST",
                        body: formData
                    })
                    .then(response => {
                        if (!response.ok) throw new Error("Server responded with an error.");
                        return response.json();
                    })
                    .then(data => {
                        alert(data.message || "form updated successfully.");
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
<!-- for image update -->
      <script>
        document.addEventListener('DOMContentLoaded', () => {
            const form = document.getElementById("admissionForm_img");
            const submitButton = form.querySelector("button[type='submit']");

            form.addEventListener('submit', function(event) {
                event.preventDefault();

                const formData = new FormData(form);

                submitButton.disabled = true;
                const originalText = submitButton.textContent;
                submitButton.textContent = "Submitting...";

                fetch("./backend/student_img_update.php ", {
                        method: "POST",
                        body: formData
                    })
                    .then(response => {
                        if (!response.ok) throw new Error("Server responded with an error.");
                        return response.json();
                    })
                    .then(data => {
                        alert(data.message || "Image updated successfully.");
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
    <!-- status update -->
      <script>
        document.addEventListener('DOMContentLoaded', () => {
            const form = document.getElementById("student_status");
            const submitButton = form.querySelector("button[type='submit']");

            form.addEventListener('submit', function(event) {
                event.preventDefault();

                const formData = new FormData(form);

                submitButton.disabled = true;
                const originalText = submitButton.textContent;
                submitButton.textContent = "Submitting...";

                fetch("./backend/status_update.php", {
                        method: "POST",
                        body: formData
                    })
                    .then(response => {
                        if (!response.ok) throw new Error("Server responded with an error.");
                        return response.json();
                    })
                    .then(data => {
                        alert(data.message || "status updated successfully.");
                         window.location.reload();
                        if (data.message && data.message.includes("Successfully")) {
                            form.reset();
                           
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
    <style>
        #ad_btn {
            margin-bottom: 50px !important;
        }
    </style>
</head>

<body>
    <?php include('./lib/themebtn.php') ?>


    <?php include('./lib/svg.php') ?>

    <header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="#">B2B Academy</a>

        <ul class="navbar-nav flex-row d-md-none">
            <li class="nav-item text-nowrap">
                <button class="nav-link px-3 text-white" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="false"
                    aria-label="Toggle search">
                    <svg class="bi">
                        <use xlink:href="#search" />
                    </svg>
                </button>
            </li>
            <li class="nav-item text-nowrap">
                <button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                    aria-label="Toggle navigation">
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
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Admission Form</h1>
                   <div class="d-flex gap-4">
                    <button class="btn btn-outline-info"><?= safe_htmlspecialchars($student['rollNo']) ?></button>

            <form id="student_status" onsubmit="submitForm(event)" >
                 <input type="hidden" name="rollno" value="<?= $student['rollNo'] ?>">
                 <input type="hidden" name="status" id="studentstatus" value="<?= 
                     
                      (safe_htmlspecialchars($student['status'])==0)?'1':'0'
                     
                     ?>">
                     <button class="btn btn-outline-info" type="submit"><?= 
                     
                      (safe_htmlspecialchars($student['status'])==0)?'activate':'deactive'
                     
                     ?></button> 
                     </form> 
                   </div>
                </div>

                <div class="container mt-5">
                    <!-- Row 1 -->
                    <div class="row g-4 mb-4">
                        <div class="col-md-12 text-center ">
                            <div>
                                <form id="admissionForm_img" onsubmit="submitForm(event)" enctype="multipart/form-data">

                                    <img src="./assets/img/students/<?= safe_htmlspecialchars($student['studentPhoto']) ?>" alt="" style="width:250px;height:250px;" class="mb-2 rounded">
                                    <input type="file" class="form-control" id="studentPhoto" name="studentPhoto" required accept="image/*">
  <input type="hidden" name="rollno" value="<?= $student['rollNo'] ?>">
                                    <div class="text-center mt-4" id="ad_btn">
                                        <button type="submit" class="btn btn-primary px-5">Submit</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>


                    <form id="admissionForm" onsubmit="submitForm(event)" enctype="multipart/form-data">

                        <div class="row g-4">
                            <div class="col-md-6">
                                <label for="studentName" class="form-label">Student's Name</label>
                                <input type="text" class="form-control" id="studentName" name="studentName" value="<?= safe_htmlspecialchars($student['studentName']) ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label for="dob" class="form-label">Date of Birth</label>
                                <input type="date"
                                    class="form-control"
                                    id="dob"
                                    name="dob"
                                    value="<?= isset($student['dob']) ? date('Y-m-d', strtotime($student['dob'])) : '' ?>"
                                    required>
                            </div>
                        </div>

                        <!-- Row 2 -->
                        <div class="row g-4 mt-1">
                            <div class="col-md-6">
                                <label for="bloodGroup" class="form-label">Blood Group</label>
                                <select class="form-select" id="bloodGroup" name="bloodGroup" required>
                                    <option disabled <?= empty($student['bloodGroup']) ? 'selected' : '' ?>>Select...</option>
                                    <option value="A+" <?= ($student['bloodGroup'] === 'A+') ? 'selected' : '' ?>>A+</option>
                                    <option value="A-" <?= ($student['bloodGroup'] === 'A-') ? 'selected' : '' ?>>A-</option>
                                    <option value="B+" <?= ($student['bloodGroup'] === 'B+') ? 'selected' : '' ?>>B+</option>
                                    <option value="B-" <?= ($student['bloodGroup'] === 'B-') ? 'selected' : '' ?>>B-</option>
                                    <option value="O+" <?= ($student['bloodGroup'] === 'O+') ? 'selected' : '' ?>>O+</option>
                                    <option value="O-" <?= ($student['bloodGroup'] === 'O-') ? 'selected' : '' ?>>O-</option>
                                    <option value="AB+" <?= ($student['bloodGroup'] === 'AB+') ? 'selected' : '' ?>>AB+</option>
                                    <option value="AB-" <?= ($student['bloodGroup'] === 'AB-') ? 'selected' : '' ?>>AB-</option>
                                </select>


                            </div>
                            <div class="col-md-6">
                                <label for="age" class="form-label">Age</label>
                                <input type="number" class="form-control" id="age" name="age" required value="<?= safe_htmlspecialchars($student['age']) ?>">
                            </div>

                        </div>

                        <!-- Row 3 -->
                        <div class="row g-4 mt-1">
                            <div class="col-md-6">
                                <label for="fatherName" class="form-label">Father's Name</label>
                                <input type="text" class="form-control" id="fatherName" name="fatherName" required value="<?= safe_htmlspecialchars($student['fatherName']) ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="motherName" class="form-label">Mother's Name</label>
                                <input type="text" class="form-control" id="motherName" name="motherName" required value="<?= safe_htmlspecialchars($student['motherName']) ?>">
                            </div>
                        </div>

                        <!-- Row 4 -->
                        <div class="row g-4 mt-1">
                            <div class="col-md-6">
                                <label for="fatherOccupation" class="form-label">Father's Occupation</label>
                                <input type="text" class="form-control" id="fatherOccupation" name="fatherOccupation"
                                    required value="<?= safe_htmlspecialchars($student['fatherOccupation']) ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="motherOccupation" class="form-label">Mother's Occupation</label>
                                <input type="text" class="form-control" id="motherOccupation" name="motherOccupation" value="<?= safe_htmlspecialchars($student['motherOccupation']) ?>"
                                    required>
                            </div>
                        </div>

                        <!-- Row 5 -->
                        <div class="row g-4 mt-1">
                            <div class="col-md-6">
                                <label for="contactNumber" class="form-label">Contact Number</label>
                                <input type="tel" class="form-control" id="contactNumber" name="contactNumber" required
                                    autocomplete="off" value="<?= safe_htmlspecialchars($student['contactNumber']) ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="alternateContact" class="form-label">Alternate Contact Number
                                    (Optional)</label>
                                <input type="tel" class="form-control" id="alternateContact" name="alternateContact"
                                    autocomplete="off" value="<?= safe_htmlspecialchars($student['alternateContact']) ?>">
                            </div>
                        </div>

                        <div class="row g-4 mt-1">
                            <div class="col-md-6">
                                <label for="stdStudying" class="form-label">Standard Studying</label>
                                <input type="text" class="form-control" id="stdStudying" name="stdStudying" required value="<?= safe_htmlspecialchars($student['stdStudying']) ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="boardStudy" class="form-label">Board of Study</label>
                                <input class="form-control" id="boardStudy" name="boardStudy" required value="<?= safe_htmlspecialchars($student['boardStudy']) ?>" type="text">

                            </div>
                        </div>
                        <!-- Row 6 -->
                        <div class="row g-4 mt-1">

                            <div class="col-md-6">
                                <?php
                                $course_name_smt = $conn->prepare("SELECT courseName FROM courses WHERE id = :id");
                                $course_name_smt->bindParam(':id', $student['course'], PDO::PARAM_INT);
                                $course_name_smt->execute();

                                $course_name = $course_name_smt->fetch(PDO::FETCH_ASSOC);

                                if ($course_name !== false) {
                                    $coursename = safe_htmlspecialchars($course_name['courseName']);
                                } else {
                                    echo 'Course not found';
                                }
                                ?>
                                <label for="courseDetails" class="form-label">Selected Course</label>
                                <select class="form-select mb-4" id="course" name="course" required>
                                    <option value="" disabled <?= empty($student['course']) ? 'selected' : '' ?>>Select...</option>
                                    <?php foreach ($courses as $course): ?>
                                        <option value="<?= $course['id'] ?>" <?= ($student['course'] == $course['id']) ? 'selected' : '' ?>>
                                            <?= safe_htmlspecialchars($course['courseName']) ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>


                            </div>
                            <div class="col-md-6">
                                <label for="camp" class="form-label">Camp</label>
                                <select class="form-select mb-4" id="camp" name="camp" required>
                                    <option disabled <?= empty($student['camp']) ? 'selected' : '' ?>>Select...</option>
                                    <option value="summer" <?= ($student['camp'] === 'summer') ? 'selected' : '' ?>>Summer</option>
                                    <option value="winter" <?= ($student['camp'] === 'winter') ? 'selected' : '' ?>>Winter</option>
                                    <option value="reqular" <?= ($student['camp'] === 'reqular') ? 'selected' : '' ?>>Reqular</option>
                                </select>

                            </div>
                        </div>

                        <!-- Row 7 -->
                        <div class="row g-4 mt-1">
                            <div class="col-md-6">
                                <label for="joiningDate" class="form-label">Date of Joining</label>
                                <input type="date"
                                    class="form-control"
                                    id="joiningDate"
                                    name="joiningDate"
                                    value="<?= isset($student['joiningDate']) ? date('Y-m-d', strtotime($student['joiningDate'])) : '' ?>"
                                    required>
                            </div>

                            <div class="col-md-6">
                                <label for="referrer" class="form-label">Who Referred This Academy?</label>
                                <input type="text" class="form-control" id="referrer" name="referrer" value="<?= safe_htmlspecialchars($student['referrer']) ?>" required>
                            </div>
                        </div>

                        <!-- Row 8 -->
                        <div class="row g-4 mt-1">
                            <div class="col-md-12">
                                <label for="residentialAddress" class="form-label">Residential Address</label>
                                <textarea class="form-control" id="residentialAddress" name="residentialAddress"
                                    rows="3" required><?= safe_htmlspecialchars($student['residentialAddress']) ?></textarea>
                            </div>
                        </div>
                        <!-- Submit Button -->
                        <div class="text-center mt-4" id="ad_btn">
                            <button type="submit" class="btn btn-primary px-5">Submit</button>
                        </div>

                    </form>
                </div>



            </main>
        </div>
    </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js"
        integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous">
    </script>
    <script src="./js/dashboard.js"></script>
</body>

</html>
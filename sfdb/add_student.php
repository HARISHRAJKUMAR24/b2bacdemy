<?php
require_once './database/dbconnect.php';

// Enable error reporting for debugging (Remove in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Create database connection
$database = new Database();
$conn = $database->getConnection();

$successMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  try {
    // Collect form data
    $studentName = $_POST['studentName'] ?? '';
    $dob = $_POST['dob'] ?? '';
    $bloodGroup = $_POST['bloodGroup'] ?? '';
    $stdStudying = $_POST['stdStudying'] ?? '';
    $fatherName = $_POST['fatherName'] ?? '';
    $motherName = $_POST['motherName'] ?? '';
    $boardStudy = $_POST['boardStudy'] ?? '';
    $residentialAddress = $_POST['residentialAddress'] ?? '';
    $courseDetails = $_POST['courseDetails'] ?? '';

    // Prepare SQL query
    $sql = "INSERT INTO students (student_name, dob, blood_group, standard_studying, father_name, mother_name, board_study, residential_address, course_details)
                VALUES (:studentName, :dob, :bloodGroup, :stdStudying, :fatherName, :motherName, :boardStudy, :residentialAddress, :courseDetails)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':studentName', $studentName);
    $stmt->bindParam(':dob', $dob);
    $stmt->bindParam(':bloodGroup', $bloodGroup);
    $stmt->bindParam(':stdStudying', $stdStudying);
    $stmt->bindParam(':fatherName', $fatherName);
    $stmt->bindParam(':motherName', $motherName);
    $stmt->bindParam(':boardStudy', $boardStudy);
    $stmt->bindParam(':residentialAddress', $residentialAddress);
    $stmt->bindParam(':courseDetails', $courseDetails);

    // Execute the query
    if ($stmt->execute()) {
      $successMessage = "Admission Form Submitted Successfully!";
    } else {
      $successMessage = "Error: Unable to submit the form.";
    }

    // Send JSON response for AJAX
    echo json_encode(["message" => $successMessage]);
    exit;
  } catch (Exception $e) {
    echo json_encode(["message" => "Error: " . $e->getMessage()]);
    exit;
  }
}
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
  <title>Dashboard Template · Bootstrap v5.3</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">


  <!-- Custom styles for this template -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="./css/dashboard.css" rel="stylesheet">
  <script>
    function submitForm(event) {
      event.preventDefault(); // Prevent page reload

      var formData = new FormData(document.getElementById("admissionForm"));

      fetch("", {
          method: "POST",
          body: formData
        })
        .then(response => response.json())
        .then(data => {
          alert(data.message); // Show success/error message in popup
          document.getElementById("admissionForm").reset(); // Reset form after submission
        })
        .catch(error => console.error("Error:", error));
    }
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
          <h1 class="h2">Admission Form</h1>
        </div>

        <div class="container mt-5">
          <form id="admissionForm" onsubmit="submitForm(event)">
            <div class="row g-3">
              <div class="col-md-6">
                <label for="studentName" class="form-label">Student's Name</label>
                <input type="text" class="form-control" id="studentName" name="studentName" required>
              </div>
              <div class="col-md-6">
                <label for="dob" class="form-label">Date of Birth</label>
                <input type="date" class="form-control" id="dob" name="dob" required>
              </div>
            </div>

            <div class="row g-3 mt-1">
              <div class="col-md-6">
                <label for="bloodGroup" class="form-label">Blood Group</label>
                <select class="form-select" id="bloodGroup" name="bloodGroup" required>
                  <option disabled selected>Select...</option>
                  <option>A+</option>
                  <option>A-</option>
                  <option>B+</option>
                  <option>B-</option>
                  <option>O+</option>
                  <option>O-</option>
                  <option>AB+</option>
                  <option>AB-</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="stdStudying" class="form-label">Standard Studying</label>
                <input type="text" class="form-control" id="stdStudying" name="stdStudying" required>
              </div>
            </div>

            <div class="row g-3 mt-3">
              <div class="col-md-6">
                <label for="fatherName" class="form-label">Father's Name</label>
                <input type="text" class="form-control" id="fatherName" name="fatherName" required>
              </div>
              <div class="col-md-6">
                <label for="motherName" class="form-label">Mother's Name</label>
                <input type="text" class="form-control" id="motherName" name="motherName" required>
              </div>
            </div>

            <div class="row g-3 mt-3">
              <div class="col-md-6">
                <label for="boardStudy" class="form-label">Board of Study</label>
                <select class="form-select" id="boardStudy" name="boardStudy" required>
                  <option disabled selected>Select...</option>
                  <option>CBSE</option>
                  <option>ICSE</option>
                  <option>State Board</option>
                  <option>Other</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="residentialAddress" class="form-label">Residential Address</label>
                <textarea class="form-control" id="residentialAddress" name="residentialAddress" rows="3" required></textarea>
              </div>
            </div>

            <div class="row g-3 mt-3">
              <div class="col-md-6">
                <label for="courseDetails" class="form-label">Select Course</label>
                <select class="form-select" id="courseDetails" name="courseDetails" required>
                  <option disabled selected>Select...</option>
                  <option>Course 1</option>
                  <option>Course 2</option>
                  <option>Course 3</option>
                  <option>Other</option>
                </select>
              </div>
            </div>

            <div class="text-center mt-4">
              <button type="submit" class="btn btn-primary px-5">Submit</button>
            </div>
          </form>
        </div>

      </main>
    </div>
  </div>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"></script>
  <script src="./js/dashboard.js"></script>
</body>

</html>
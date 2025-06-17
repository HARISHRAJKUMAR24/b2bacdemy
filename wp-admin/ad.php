
<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Add Students | B2BAcademy</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">



    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">

    <link href="./css/dashboard.css" rel="stylesheet">

    <script>
  document.addEventListener('DOMContentLoaded',()=>{
     function submitForm(event) {
    event.preventDefault();

    const form = document.getElementById("admissionForm");
    const formData = new FormData(form);
    const submitButton = form.querySelector("button[type='submit']");

    submitButton.disabled = true;
    const originalText = submitButton.textContent;
    submitButton.textContent = "Submitting...";

    fetch("./api/add_student.php", {
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
}
  })

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
                </div>

                <div class="container mt-5">
                    <form id="admissionForm" onsubmit="submitForm(event)" enctype="multipart/form-data">
                        <!-- Row 1 -->
                        <div class="row g-4 mb-5">
                            <div class="col-md-12">
                                <label for="studentPhoto" class="form-label">Student Photo</label>
                                <input type="file" class="form-control" id="studentPhoto" name="studentPhoto" required
                                    accept="image/*">
                            </div>
                        </div>

                        <div class="row g-4">
                            <div class="col-md-6">
                                <label for="studentName" class="form-label">Student's Name</label>
                                <input type="text" class="form-control" id="studentName" name="studentName" required>
                            </div>
                            <div class="col-md-6">
                                <label for="dob" class="form-label">Date of Birth</label>
                                <input type="date" class="form-control" id="dob" name="dob" required>
                            </div>
                        </div>

                        <!-- Row 2 -->
                        <div class="row g-4 mt-1">
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
                                <label for="age" class="form-label">Age</label>
                                <input type="number" class="form-control" id="age" name="age" required>
                            </div>

                        </div>

                        <!-- Row 3 -->
                        <div class="row g-4 mt-1">
                            <div class="col-md-6">
                                <label for="fatherName" class="form-label">Father's Name</label>
                                <input type="text" class="form-control" id="fatherName" name="fatherName" required>
                            </div>
                            <div class="col-md-6">
                                <label for="motherName" class="form-label">Mother's Name</label>
                                <input type="text" class="form-control" id="motherName" name="motherName" required>
                            </div>
                        </div>

                        <!-- Row 4 -->
                        <div class="row g-4 mt-1">
                            <div class="col-md-6">
                                <label for="fatherOccupation" class="form-label">Father's Occupation</label>
                                <input type="text" class="form-control" id="fatherOccupation" name="fatherOccupation"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <label for="motherOccupation" class="form-label">Mother's Occupation</label>
                                <input type="text" class="form-control" id="motherOccupation" name="motherOccupation"
                                    required>
                            </div>
                        </div>

                        <!-- Row 5 -->
                        <div class="row g-4 mt-1">
                            <div class="col-md-6">
                                <label for="contactNumber" class="form-label">Contact Number</label>
                                <input type="tel" class="form-control" id="contactNumber" name="contactNumber" required
                                    autocomplete="off">
                            </div>
                            <div class="col-md-6">
                                <label for="alternateContact" class="form-label">Alternate Contact Number
                                    (Optional)</label>
                                <input type="tel" class="form-control" id="alternateContact" name="alternateContact"
                                    autocomplete="off">
                            </div>
                        </div>

                        <div class="row g-4 mt-1">
                            <div class="col-md-6">
                                <label for="stdStudying" class="form-label">Standard Studying</label>
                                <input type="text" class="form-control" id="stdStudying" name="stdStudying" required>
                            </div>
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
                        </div>
                        <!-- Row 6 -->
                        <div class="row g-4 mt-1">

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
                            <div class="col-md-6">
                                <label for="camp" class="form-label">Camp</label>
                                <select class="form-select" id="camp" name="camp" required>
                                    <option disabled selected>Select...</option>
                                    <option>Summer</option>
                                    <option>Winter</option>
                                    <option>Reqular</option>
                                </select>
                            </div>
                        </div>

                        <!-- Row 7 -->
                        <div class="row g-4 mt-1">
                            <div class="col-md-6">
                                <label for="joiningDate" class="form-label">Date of Joining</label>
                                <input type="date" class="form-control" id="joiningDate" name="joiningDate" required>
                            </div>

                            <div class="col-md-6">
                                <label for="referrer" class="form-label">Who Referred This Academy?</label>
                                <input type="text" class="form-control" id="referrer" name="referrer" required>
                            </div>
                        </div>

                        <!-- Row 8 -->
                        <div class="row g-4 mt-1">
                            <div class="col-md-12">
                                <label for="residentialAddress" class="form-label">Residential Address</label>
                                <textarea class="form-control" id="residentialAddress" name="residentialAddress"
                                    rows="3" required></textarea>
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
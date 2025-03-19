<?php
    $current_page = basename($_SERVER['PHP_SELF']);
?>

<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 <?= $current_page == 'index.php' ? 'active' : '' ?>" href="index.php">
                        <svg class="bi"><use xlink:href="#house-fill" /></svg>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 <?= $current_page == 'attendance.php' ? 'active' : '' ?>" href="./attendance.php">
                        <i class="bi bi-check-square"></i>
                        Attendance
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 <?= $current_page == 'pay_fees.php' ? 'active' : '' ?>" href="./pay_fees.php">
                        <i class="bi bi-cash-coin"></i>
                        Pay Fees
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 <?= $current_page == 'balance_fees.php' ? 'active' : '' ?>" href="balance_fees.php">
                        <i class="bi bi-wallet2"></i>
                        Balance Fees
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 <?= $current_page == 'student_details.php' ? 'active' : '' ?>" href="student_details.php">
                        <i class="bi bi-people"></i>
                        Student Details
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 <?= $current_page == 'add_student.php' ? 'active' : '' ?>" href="add_student.php">
                        <i class="bi bi-person-plus"></i>
                        Add Student
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 <?= $current_page == 'remove_student.php' ? 'active' : '' ?>" href="remove_student.php">
                        <i class="bi bi-person-dash"></i>
                        Remove Student
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 <?= $current_page == 'updates.php' ? 'active' : '' ?>" href="updates.php">
                        <i class="bi bi-arrow-repeat"></i>
                        Updates
                    </a>
                </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
                <span>Saved reports</span>
            </h6>
            <ul class="nav flex-column mb-auto">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 <?= $current_page == 'attendance_report.php' ? 'active' : '' ?>" href="attendance_report.php">
                        <svg class="bi"><use xlink:href="#file-earmark-text" /></svg>
                        Attendance Report
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 <?= $current_page == 'fees_report.php' ? 'active' : '' ?>" href="fees_report.php">
                        <svg class="bi"><use xlink:href="#file-earmark-text" /></svg>
                        Fees Report
                    </a>
                </li>
            </ul>

            <hr class="my-3">

            <ul class="nav flex-column mb-auto">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 <?= $current_page == 'settings.php' ? 'active' : '' ?>" href="settings.php">
                        <svg class="bi"><use xlink:href="#gear-wide-connected" /></svg>
                        Settings
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 <?= $current_page == 'signout.php' ? 'active' : '' ?>" href="signout.php">
                        <svg class="bi"><use xlink:href="#door-closed" /></svg>
                        Sign out
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

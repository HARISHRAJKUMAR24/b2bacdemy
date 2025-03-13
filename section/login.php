<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-3">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login Page</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="d-flex justify-content-center gap-3 mb-4">
                    <button class="btn btn-primary" id="btn-student-login">
                        <i class="fas fa-user-graduate me-2"></i> Student Login
                    </button>
                    <button class="btn btn-secondary" id="btn-staff-login">
                        <i class="fas fa-user-tie me-2"></i> Staff Login
                    </button>
                </div>

                <!-- Student Login Form -->
                <div id="student-login" class="d-block">
                    <form class="w-75 mx-auto">
                        <div class="mb-3">
                            <input type="text" class="form-control p-3" placeholder="Student ID" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control p-3" placeholder="Password" required>
                        </div>
                        <button class="btn btn-primary w-100">Login</button>
                    </form>
                </div>

                <!-- Staff Login Form -->
                <div id="staff-login" class="d-none">
                    <form class="w-75 mx-auto">
                        <div class="mb-3">
                            <input type="text" class="form-control p-3" placeholder="Username" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control p-3" placeholder="Password" required>
                        </div>
                        <button class="btn btn-secondary w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

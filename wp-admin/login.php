<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | B2BACADEMY</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a5b7f2852f.js" crossorigin="anonymous"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0fdf4',
                            100: '#dcfce7',
                            200: '#bbf7d0',
                            300: '#86efac',
                            400: '#4ade80',
                            500: '#22c55e',
                            600: '#16a34a',
                            700: '#15803d',
                            800: '#166534',
                            900: '#14532d',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .toggle-checkbox:checked {
            right: 0;
            border-color: #4ade80;
        }
        .toggle-checkbox:checked + .toggle-label {
            background-color: #4ade80;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
        }
    </style>
</head>
<body class="gradient-bg min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <div class="flex justify-end mb-6">
           
            <label for="toggle" class="text-gray-300">
                <i class="far fa-moon"></i>
            </label>
        </div>
        <div class="bg-gray-800 rounded-lg shadow-xl overflow-hidden">
            <div class="p-8">
                <div class="flex justify-center mb-8">
                    <i class="fas fa-user-circle text-5xl text-primary-500"></i>
                </div>
                <h1 class="text-2xl font-bold text-center text-white mb-8">Welcome Back!</h1>
                <form id="loginForm">
                    <div class="mb-4">
                        <label for="email" class="block text-gray-300 text-sm font-medium mb-2">Email or Username</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-user text-gray-400"></i>
                            </div>
                            <input type="text" id="email" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 placeholder-gray-400" placeholder="name@example.com" required>
                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block text-gray-300 text-sm font-medium mb-2">Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-gray-400"></i>
                            </div>
                            <input type="password" id="password" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 placeholder-gray-400" placeholder="••••••••" required>
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer" id="togglePassword">
                                <i class="fas fa-eye-slash text-gray-400" id="passwordIcon"></i>
                            </div>
                        </div>
                    </div>
                  
                    <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center transition duration-200">
                        Sign In
                    </button>
                 
                </form>
            </div>
            <div class="bg-gray-900 px-8 py-4">
                <div class="flex justify-center space-x-4">
                    <button class="p-2 rounded-full bg-gray-700 hover:bg-gray-600 text-gray-300 hover:text-white transition duration-200">
                        <i class="fab fa-google"></i>
                    </button>
                    <button class="p-2 rounded-full bg-gray-700 hover:bg-gray-600 text-gray-300 hover:text-white transition duration-200">
                        <i class="fab fa-facebook-f"></i>
                    </button>
                    <button class="p-2 rounded-full bg-gray-700 hover:bg-gray-600 text-gray-300 hover:text-white transition duration-200">
                        <i class="fab fa-twitter"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script>
        const toggle = document.getElementById('toggle');
        const html = document.documentElement;
        const themeIcon = document.querySelector('label[for="toggle"] i');
        if (localStorage.getItem('theme') === 'light' || (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: light)').matches)) {
            html.classList.remove('dark');
            toggle.checked = true;
            themeIcon.classList.replace('fa-moon', 'fa-sun');
        }
      
        const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('password');
        const passwordIcon = document.getElementById('passwordIcon');
        togglePassword.addEventListener('click', function() {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            passwordIcon.classList.toggle('fa-eye');
            passwordIcon.classList.toggle('fa-eye-slash');
        });
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            if (!email || !password) {
                alert('Please fill in all fields');
                return;
            }
            console.log('Login attempt:', { email, password });
            alert('Login successful!');
        });
    </script>
</body>
</html>
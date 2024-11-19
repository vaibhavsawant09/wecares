<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="shortcut icon" type="image/x-icon" href="../icon.jpg">
    <link rel="stylesheet" href="./ins_style.css">

    <!-- Add Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Add Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="bg-custom-dark text-gray-100">
    <!-- Header -->
    <header class="fixed w-full bg-custom-darker shadow-lg z-50">
        <div class="flex items-center justify-between px-6 py-4">
            <div class="flex items-center">
                <button id="menu-toggle" class="lg:hidden mr-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
                <a href="./index.php">
                    <h1 class="text-2xl font-bold text-accent">We Cares</h1>
                </a>
            </div>
            <div class="flex items-center space-x-4">
                <a href="./notifications.php">
                    <button class="p-2 rounded-full hover:bg-gray-700">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                        </svg>
                    </button>
                </a>
                <div class="w-8 h-8 rounded-full bg-accent overflow-hidden">
                    <a href="./profile.php"><img src="466132576_1700000777457980_7640509984743529447_n.jpg" alt="Profile Image" class="w-auto h-full object-cover"></a>
                </div>

            </div>
        </div>
    </header>

    <!-- Sidebar -->
    <?php include "sider.php"; ?>

    <!-- Main Content -->
    <main class="lg:ml-64 pt-20 p-6">
        <div class="flex justify-between mb-6">
            <a href="./add_staff.php">
                <button class="bg-accent text-custom-dark px-4 py-1 rounded font-semibold text-sm hover:bg-hover-accent transition">
                    Add
                </button>
            </a>
            <button id="export-btn" class="bg-accent text-custom-dark px-4 py-1 rounded font-semibold text-sm hover:bg-hover-accent transition">
                Export Data
            </button>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Staff Member 1 -->
            <div class="relative bg-gradient-to-r from-[#D8E28C] to-[#114A43] p-8 rounded-xl shadow-lg transform transition-transform hover:scale-105 hover:shadow-2xl">
                <div class="flex items-center mb-6">
                    <!-- Profile Picture -->
                    <div class="w-12 h-12 bg-[#114A43] text-white rounded-full flex items-center justify-center mr-6">
                        <img class="w-full h-full object-cover rounded-full" src="https://via.placeholder.com/150" alt="Profile Picture">
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-white">John Doe</h2>
                        <p class="text-gray-100">Position: Manager</p>
                    </div>
                </div>
                <div class="text-white space-y-3 mb-6">
                    <p><strong>Email:</strong> john.doe@wecares.in</p>
                    <p><strong>Phone:</strong> 9876543210</p>
                    <p><strong>City:</strong> Mumbai</p>
                    <p><strong>Street:</strong> Churchgate</p>
                </div>
                <div class="border-t pt-4 text-white">
                    <p><strong>Level:</strong> Senior</p>
                    <p><strong>Status:</strong> Active</p>
                </div>
            </div>

            <!-- Staff Member 2 -->
            <div class="relative bg-gradient-to-r from-[#114A43] to-[#D8E28C] p-8 rounded-xl shadow-lg transform transition-transform hover:scale-105 hover:shadow-2xl">
                <div class="flex items-center mb-6">
                    <!-- Profile Picture -->
                    <div class="w-12 h-12 bg-[#114A43] text-white rounded-full flex items-center justify-center mr-6">
                        <img class="w-full h-full object-cover rounded-full" src="https://via.placeholder.com/150" alt="Profile Picture">
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-white">Jane Smith</h2>
                        <p class="text-gray-100">Position: Social Media Manager</p>
                    </div>
                </div>
                <div class="text-white space-y-3 mb-6">
                    <p><strong>Email:</strong> jane.smith@wecares.in</p>
                    <p><strong>Phone:</strong> 9123456789</p>
                    <p><strong>City:</strong> Delhi</p>
                    <p><strong>Street:</strong> Connaught Place</p>
                </div>
                <div class="border-t pt-4 text-white">
                    <p><strong>Level:</strong> Junior</p>
                    <p><strong>Status:</strong> Active</p>
                </div>
            </div>

            <!-- Staff Member 3 -->
            <div class="relative bg-gradient-to-r from-[#D8E28C] via-white to-[#114A43] p-8 rounded-xl shadow-lg transform transition-transform hover:scale-105 hover:shadow-2xl">
                <div class="flex items-center mb-6">
                    <!-- Profile Picture -->
                    <div class="w-12 h-12 bg-[#114A43] text-white rounded-full flex items-center justify-center mr-6">
                        <img class="w-full h-full object-cover rounded-full" src="https://via.placeholder.com/150" alt="Profile Picture">
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-[#114A43]">Alice Johnson</h2>
                        <p class="text-[#114A43]">Position: Backend Developer</p>
                    </div>
                </div>
                <div class="text-[#114A43] space-y-3 mb-6">
                    <p><strong>Email:</strong> alice.johnson@wecares.in</p>
                    <p><strong>Phone:</strong> 8765432109</p>
                    <p><strong>City:</strong> Bangalore</p>
                    <p><strong>Street:</strong> MG Road</p>
                </div>
                <div class="border-t pt-4 text-[#114A43]">
                    <p><strong>Level:</strong> Mid</p>
                    <p><strong>Status:</strong> Active</p>
                </div>
            </div>
        </div>
    </main>

    <!-- JavaScript -->
    <script>
        // Toggle mobile menu
        document.getElementById('menu-toggle').addEventListener('click', () => {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('open');
        });
    </script>
</body>

</html>
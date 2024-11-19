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
            <a href="./add_policy.php">
                <button class="bg-accent text-custom-dark px-4 py-1 rounded font-semibold text-sm hover:bg-hover-accent transition">
                    Add
                </button>
            </a>
            <button id="export-btn" class="bg-accent text-custom-dark px-4 py-1 rounded font-semibold text-sm hover:bg-hover-accent transition">
                Export Data
            </button>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Policy 1 -->
            <div class="relative bg-gradient-to-r from-[#D8E28C] to-[#114A43] p-8 rounded-xl shadow-lg transform transition-transform hover:scale-105 hover:shadow-2xl">
                <div class="flex items-center justify-between mb-6">
                    <div>
                        <h2 class="text-2xl font-bold text-white">Policy 1</h2>
                    </div>
                    <span class="bg-white text-[#114A43] px-3 py-1 rounded-full text-sm font-semibold cursor-pointer">EDIT</span>
                </div>
                <div class="text-white space-y-3 mb-6">
                    <p><strong>Name:</strong> Health Insurance</p>
                    <p><strong>Category:</strong> Health</p>
                    <p><strong>Sub-Category:</strong> Medical</p>
                    <p><strong>Sum Assured:</strong> ₹5,00,000</p>
                    <p><strong>Premium:</strong> ₹10,000</p>
                    <p><strong>Tenure:</strong> 1 Year</p>
                    <p><strong>Status:</strong> Active</p>
                </div>
                <div class="border-t pt-4 text-white">
                    <p><strong>Date Created:</strong> 01/01/2024</p>
                </div>
            </div>

            <!-- Policy 2 -->
            <div class="relative bg-gradient-to-r from-[#114A43] to-[#D8E28C] p-8 rounded-xl shadow-lg transform transition-transform hover:scale-105 hover:shadow-2xl">
                <div class="flex items-center justify-between mb-6">
                    <div>
                        <h2 class="text-2xl font-bold text-white">Policy 2</h2>
                    </div>
                    <span class="bg-white text-[#114A43] px-3 py-1 rounded-full text-sm font-semibold cursor-pointer">EDIT</span>
                </div>
                <div class="text-white space-y-3 mb-6">
                    <p><strong>Name:</strong> Life Insurance</p>
                    <p><strong>Category:</strong> Life</p>
                    <p><strong>Sub-Category:</strong> Term Life</p>
                    <p><strong>Sum Assured:</strong> ₹10,00,000</p>
                    <p><strong>Premium:</strong> ₹15,000</p>
                    <p><strong>Tenure:</strong> 5 Years</p>
                    <p><strong>Status:</strong> Active</p>
                </div>
                <div class="border-t pt-4 text-white">
                    <p><strong>Date Created:</strong> 15/02/2024</p>
                </div>
            </div>

            <!-- Policy 3 -->
            <div class="relative bg-gradient-to-r from-[#D8E28C] via-white to-[#114A43] p-8 rounded-xl shadow-lg transform transition-transform hover:scale-105 hover:shadow-2xl">
                <div class="flex items-center justify-between mb-6">
                    <div>
                        <h2 class="text-2xl font-bold text-[#114A43]">Policy 3</h2>
                    </div>
                    <span class="bg-[#114A43] text-white px-3 py-1 rounded-full text-sm font-semibold cursor-pointer">EDIT</span>
                </div>
                <div class="text-[#114A43] space-y-3 mb-6">
                    <p><strong>Name:</strong> Accident Insurance</p>
                    <p><strong>Category:</strong> Accident</p>
                    <p><strong>Sub-Category:</strong> Personal Accident</p>
                    <p><strong>Sum Assured:</strong> ₹3,00,000</p>
                    <p><strong>Premium:</strong> ₹8,000</p>
                    <p><strong>Tenure:</strong> 2 Years</p>
                    <p><strong>Status:</strong> Active</p>
                </div>
                <div class="border-t pt-4 text-[#114A43]">
                    <p><strong>Date Created:</strong> 20/02/2024</p>
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
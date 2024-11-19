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
        <!-- Action Buttons (Add and Export) -->
        <div class="flex justify-between mb-6">
            <a href="./add_categories.php">
                <button class="bg-accent text-custom-dark px-4 py-1 rounded font-semibold text-sm hover:bg-hover-accent transition">
                    Add
                </button>
            </a>
            <button id="export-btn" class="bg-accent text-custom-dark px-4 py-1 rounded font-semibold text-sm hover:bg-hover-accent transition">
                Export Data
            </button>
        </div>


        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Platinum Card 1 -->
            <div class="relative bg-gradient-to-r from-[#D8E28C] to-[#114A43] p-8 rounded-xl shadow-lg transform transition-transform hover:scale-105 hover:shadow-2xl">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-3xl font-bold text-white">Platinum Category</h2>
                    <span class="bg-white text-[#114A43] px-3 py-1 rounded-full text-sm font-semibold">EDIT</span>
                </div>
                <p class="text-gray-100 mb-6">Enjoy exclusive rewards and offers with our platinum Category.</p>
                <div class="flex justify-between items-center text-gray-100">
                    <span>**** **** **** 1234</span>
                    <span>01/01/2024</span>
                </div>
            </div>

            <!-- Gold Card 2 -->
            <div class="relative bg-gradient-to-r from-[#114A43] to-[#D8E28C] p-8 rounded-xl shadow-lg transform transition-transform hover:scale-105 hover:shadow-2xl">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-3xl font-bold text-white">Gold Category</h2>
                    <span class="bg-white text-[#114A43] px-3 py-1 rounded-full text-sm font-semibold">EDIT</span>
                </div>
                <p class="text-gray-100 mb-6">Unlock rewards and benefits with our gold card tier.</p>
                <div class="flex justify-between items-center text-gray-100">
                    <span>**** **** **** 5678</span>
                    <span>12/26</span>
                </div>
            </div>

            <!-- Silver Card 3 -->
            <div class="relative bg-gradient-to-r from-[#D8E28C] via-white to-[#114A43] p-8 rounded-xl shadow-lg transform transition-transform hover:scale-105 hover:shadow-2xl">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-3xl font-bold text-[#114A43]">Silver Category</h2>
                    <span class="bg-[#114A43] text-white px-3 py-1 rounded-full text-sm font-semibold">EDIT</span>
                </div>
                <p class="text-[#114A43] mb-6">Access essential features with our silver card.</p>
                <div class="flex justify-between items-center text-[#114A43]">
                    <span>**** **** **** 9876</span>
                    <span>03/27</span>
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

        // Export Data functionality
        document.getElementById('export-btn').addEventListener('click', function() {
            let csvContent = "data:text/csv;charset=utf-8,";
            const data = [
                ["Category", "Card Number", "Expiration Date"],
                ["Platinum", "**** **** **** 1234", "01/01/2024"],
                ["Gold", "**** **** **** 5678", "12/26"],
                ["Silver", "**** **** **** 9876", "03/27"]
            ];

            data.forEach(function(rowArray) {
                const row = rowArray.join(",");
                csvContent += row + "\n";
            });

            const encodedUri = encodeURI(csvContent);
            const link = document.createElement("a");
            link.setAttribute("href", encodedUri);
            link.setAttribute("download", "card_categories.csv");
            link.click();
        });
    </script>
</body>

</html>
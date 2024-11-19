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
        <!-- Notifications Page -->
        <div class="max-w-4xl mx-auto bg-custom-darker p-8 rounded-lg shadow-md">
            <!-- Page Title -->
            <h2 class="text-3xl font-bold text-accent mb-6">Notifications</h2>

            <!-- Notification List -->
            <div class="space-y-4">
                <!-- Notification Item 1 -->
                <div class="p-4 bg-gray-800 rounded-lg hover:bg-gray-700 transition-all">
                    <div class="flex justify-between items-center">
                        <span class="font-semibold text-accent">New Comment on Your Post</span>
                        <span class="text-sm text-gray-400">2 hours ago</span>
                    </div>
                    <p class="mt-2 text-gray-300">Someone commented on your recent blog post. Check it out now.</p>
                </div>

                <!-- Notification Item 2 -->
                <div class="p-4 bg-gray-800 rounded-lg hover:bg-gray-700 transition-all">
                    <div class="flex justify-between items-center">
                        <span class="font-semibold text-accent">New Message from Admin</span>
                        <span class="text-sm text-gray-400">5 hours ago</span>
                    </div>
                    <p class="mt-2 text-gray-300">You have a new message from the administrator. Please review it.</p>
                </div>

                <!-- Notification Item 3 -->
                <div class="p-4 bg-gray-800 rounded-lg hover:bg-gray-700 transition-all">
                    <div class="flex justify-between items-center">
                        <span class="font-semibold text-accent">System Update Available</span>
                        <span class="text-sm text-gray-400">1 day ago</span>
                    </div>
                    <p class="mt-2 text-gray-300">A new system update is available. Please update your system for better performance.</p>
                </div>

                <!-- Notification Item 4 -->
                <div class="p-4 bg-gray-800 rounded-lg hover:bg-gray-700 transition-all">
                    <div class="flex justify-between items-center">
                        <span class="font-semibold text-accent">Account Verification</span>
                        <span class="text-sm text-gray-400">3 days ago</span>
                    </div>
                    <p class="mt-2 text-gray-300">Please verify your account to continue using all features.</p>
                </div>
            </div>

            <!-- Load More Button -->
            <div class="mt-8 text-center">
                <button class="px-6 py-2 bg-accent text-black rounded-full hover:bg-opacity-80">
                    Load More Notifications
                </button>
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
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
        <!-- Admin Profile Section -->
        <div class="max-w-4xl mx-auto bg-custom-darker p-8 rounded-lg shadow-md">
            <!-- Profile Header -->
            <div class="flex items-center mb-8">
                <!-- Profile Image -->
                <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-accent mr-6">
                    <img src="466132576_1700000777457980_7640509984743529447_n.jpg" alt="Profile Image" class="w-full h-full object-cover">
                </div>
                <!-- Profile Info -->
                <div>
                    <h2 class="text-3xl font-bold text-accent mb-2">We Cares</h2>
                    <p class="text-lg text-gray-300">Administrator</p>
                </div>
            </div>

            <!-- Profile Information -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <!-- First Name -->
                <div class="flex justify-between items-center">
                    <span class="font-semibold text-accent">First Name</span>
                    <span class="text-gray-300">We</span>
                </div>
                <!-- Last Name -->
                <div class="flex justify-between items-center">
                    <span class="font-semibold text-accent">Last Name</span>
                    <span class="text-gray-300">Cares</span>
                </div>
                <!-- Gender -->
                <div class="flex justify-between items-center">
                    <span class="font-semibold text-accent">Gender</span>
                    <span class="text-gray-300">Male</span>
                </div>
                <!-- Phone -->
                <div class="flex justify-between items-center">
                    <span class="font-semibold text-accent">Phone</span>
                    <span class="text-gray-300">7887380238</span>
                </div>
                <!-- Email -->
                <div class="flex justify-between items-center">
                    <span class="font-semibold text-accent">Email</span>
                    <span class="text-gray-300">support@wecares.in</span>
                </div>
            </div>

            <!-- Change Password Section -->
            <h3 class="text-2xl font-semibold text-accent mb-4">Change Password</h3>
            <p class="mb-6 text-gray-300">Changing your sign-in password is an easy way to keep your account secure.</p>

            <form action="#" method="POST" class="space-y-6">
                <div>
                    <label for="current-password" class="block font-semibold text-accent">Current Password</label>
                    <input type="password" id="current-password" name="current-password" placeholder="Enter your current password" class="w-full px-4 py-2 rounded-lg bg-gray-700 text-gray-300 focus:outline-none focus:ring-2 focus:ring-accent" required>
                </div>

                <div>
                    <label for="new-password" class="block font-semibold text-accent">New Password</label>
                    <input type="password" id="new-password" name="new-password" placeholder="Enter your new password" class="w-full px-4 py-2 rounded-lg bg-gray-700 text-gray-300 focus:outline-none focus:ring-2 focus:ring-accent" required>
                </div>

                <div>
                    <label for="confirm-password" class="block font-semibold text-accent">Confirm New Password</label>
                    <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your new password" class="w-full px-4 py-2 rounded-lg bg-gray-700 text-gray-300 focus:outline-none focus:ring-2 focus:ring-accent" required>
                </div>

                <div class="text-right">
                    <button type="submit" class="px-6 py-2 rounded-full bg-accent text-black hover:bg-opacity-80">Update Password</button>
                </div>
            </form>
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
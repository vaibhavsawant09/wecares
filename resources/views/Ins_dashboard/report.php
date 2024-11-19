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
        <!-- Report Generation Form -->
        <div class="bg-custom-darker p-8 rounded-lg shadow-lg max-w-3xl mx-auto">
            <h2 class="text-xl font-semibold text-accent mb-6">Generate Insurance Report</h2>

            <form action="generate_report.php" method="POST" class="space-y-6">

                <!-- Date Range -->
                <div>
                    <label for="start-date" class="block text-accent mb-2">Start Date</label>
                    <input type="date" id="start-date" name="start_date" required
                        class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                </div>

                <div>
                    <label for="end-date" class="block text-accent mb-2">End Date</label>
                    <input type="date" id="end-date" name="end_date" required
                        class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                </div>

                <!-- Policy Type -->
                <div>
                    <label for="policy-type" class="block text-accent mb-2">Policy Type</label>
                    <select id="policy-type" name="policy_type"
                        class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                        <option value="">Select Policy Type</option>
                        <option value="health">Health</option>
                        <option value="life">Life</option>
                        <option value="auto">Auto</option>
                        <option value="home">Home</option>
                        <option value="travel">Travel</option>
                    </select>
                </div>

                <!-- Policy Status -->
                <div>
                    <label for="policy-status" class="block text-accent mb-2">Policy Status</label>
                    <select id="policy-status" name="policy_status"
                        class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                        <option value="">Select Status</option>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                        <option value="pending">Pending</option>
                        <option value="expired">Expired</option>
                    </select>
                </div>

                <!-- Category -->
                <div>
                    <label for="category" class="block text-accent mb-2">Category</label>
                    <select id="category" name="category"
                        class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                        <option value="">Select Category</option>
                        <option value="individual">Individual</option>
                        <option value="family">Family</option>
                        <option value="corporate">Corporate</option>
                    </select>
                </div>

                <!-- Subcategory -->
                <div>
                    <label for="subcategory" class="block text-accent mb-2">Subcategory</label>
                    <select id="subcategory" name="subcategory"
                        class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                        <option value="">Select Subcategory</option>
                        <option value="medical">Medical</option>
                        <option value="savings">Savings</option>
                        <option value="liability">Liability</option>
                        <option value="property">Property</option>
                        <option value="vehicle">Vehicle</option>
                    </select>
                </div>

                <!-- Generate Report Button -->
                <div>
                    <button type="submit" class="w-full py-2 rounded bg-accent text-custom-dark font-semibold hover:bg-hover-accent transition">
                        Generate Report
                    </button>
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
    </script>
</body>

</html>
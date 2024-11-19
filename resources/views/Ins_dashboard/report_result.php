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
        <!-- Report Table -->
        <div class="overflow-x-auto bg-custom-darker p-8 rounded-lg shadow-lg">
            <h2 class="text-xl font-semibold text-accent mb-6">Generated Insurance Report</h2>

            <!-- Action Buttons (Print, Share, Download) -->
            <div class="flex justify-between mb-4">
                <div>
                    <button id="print-btn" class="bg-accent text-custom-dark px-4 py-2 rounded font-semibold hover:bg-hover-accent transition">
                        Print
                    </button>
                    <button id="share-btn" class="bg-accent text-custom-dark px-4 py-2 rounded font-semibold hover:bg-hover-accent transition ml-2">
                        Share
                    </button>
                    <button id="download-btn" class="bg-accent text-custom-dark px-4 py-2 rounded font-semibold hover:bg-hover-accent transition ml-2">
                        Download
                    </button>
                </div>
            </div>

            <!-- Table -->
            <table class="min-w-full table-auto text-left text-gray-100">
                <thead class="bg-accent text-custom-dark">
                    <tr>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Category</th>
                        <th class="px-4 py-2">Sub-Category</th>
                        <th class="px-4 py-2">Sum Assured</th>
                        <th class="px-4 py-2">Premium</th>
                        <th class="px-4 py-2">Tenure</th>
                        <th class="px-4 py-2">Status</th>
                        <th class="px-4 py-2">Date Created</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example Data Row -->
                    <tr class="border-t border-gray-600">
                        <td class="px-4 py-2">John Doe</td>
                        <td class="px-4 py-2">Individual</td>
                        <td class="px-4 py-2">Medical</td>
                        <td class="px-4 py-2">500,000</td>
                        <td class="px-4 py-2">120/month</td>
                        <td class="px-4 py-2">10 years</td>
                        <td class="px-4 py-2 text-green-500">Active</td>
                        <td class="px-4 py-2">2024-01-15</td>
                    </tr>
                    <!-- More Data Rows... -->
                    <tr>
                        <td colspan="8" class="text-center py-4">No records found for the selected filters.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

    <!-- JavaScript -->
    <script>
        // Print functionality
        document.getElementById('print-btn').addEventListener('click', function() {
            window.print();
        });

        // Share functionality (Open mail client for example)
        document.getElementById('share-btn').addEventListener('click', function() {
            const url = window.location.href;
            const subject = "Generated Insurance Report";
            const body = "Please find the attached insurance report:\n" + url;
            window.location.href = `mailto:?subject=${subject}&body=${body}`;
        });

        // Download functionality (Download the table as a CSV)
        document.getElementById('download-btn').addEventListener('click', function() {
            let csvContent = "data:text/csv;charset=utf-8,";
            const table = document.querySelector("table");
            const rows = table.querySelectorAll("tr");

            rows.forEach(function(row) {
                const cells = row.querySelectorAll("td, th");
                const rowData = [];
                cells.forEach(function(cell) {
                    rowData.push(cell.textContent.replace(/(\r\n|\n|\r)/gm, "").trim());
                });
                csvContent += rowData.join(",") + "\n";
            });

            const encodedUri = encodeURI(csvContent);
            const link = document.createElement("a");
            link.setAttribute("href", encodedUri);
            link.setAttribute("download", "insurance_report.csv");
            link.click();
        });
    </script>
</body>

</html>
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
        <!-- Add Staff Form -->
        <div class="bg-custom-darker p-8 rounded-lg shadow-lg max-w-md mx-auto">
            <h2 class="text-xl font-semibold text-accent mb-4">Add Staff Member</h2>
            <form action="add_staff.php" method="POST" enctype="multipart/form-data" class="space-y-4">
                <!-- Staff Name -->
                <div>
                    <label for="staff-name" class="block text-accent mb-2">Full Name</label>
                    <input type="text" id="staff-name" name="staff_name" required
                        class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                </div>
                <!-- Email -->
                <div>
                    <label for="email" class="block text-accent mb-2">Email</label>
                    <input type="email" id="email" name="email" required
                        class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                </div>
                <!-- Phone -->
                <div>
                    <label for="phone" class="block text-accent mb-2">Phone Number</label>
                    <input type="tel" id="phone" name="phone" required
                        class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                </div>
                <!-- Position -->
                <div>
                    <label for="position" class="block text-accent mb-2">Position</label>
                    <input type="text" id="position" name="position" required
                        class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                </div>
                <!-- Department -->
                <div>
                    <label for="department" class="block text-accent mb-2">Department</label>
                    <select id="department" name="department" required
                        class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                        <option value="" disabled selected>Select a department</option>
                        <!-- Replace with dynamic options from the database -->
                        <option value="IT">IT</option>
                        <option value="HR">HR</option>
                        <option value="Finance">Finance</option>
                        <option value="Marketing">Marketing</option>
                    </select>
                </div>
                <!-- Password -->
                <div>
                    <label for="password" class="block text-accent mb-2">Password</label>
                    <input type="password" id="password" name="password" required
                        class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                </div>
                <!-- Image Upload -->
                <div>
                    <label for="image" class="block text-accent mb-2">Profile Image</label>
                    <input type="file" id="image" name="image" accept="image/*" required
                        class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                </div>

                <!-- Bank Details -->
                <div>
                    <h3 class="text-accent mb-2">Bank Details</h3>

                    <div>
                        <label for="bank-name" class="block text-accent mb-2">Bank Name</label>
                        <input type="text" id="bank-name" name="bank_name" required
                            class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                    </div>
                    <div>
                        <label for="account-number" class="block text-accent mb-2">Account Number</label>
                        <input type="text" id="account-number" name="account_number" required
                            class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                    </div>
                    <div>
                        <label for="ifsc-code" class="block text-accent mb-2">IFSC Code</label>
                        <input type="text" id="ifsc-code" name="ifsc_code" required
                            class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                    </div>
                    <div>
                        <label for="branch-name" class="block text-accent mb-2">Branch Name</label>
                        <input type="text" id="branch-name" name="branch_name" required
                            class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full py-2 rounded bg-accent text-custom-dark font-semibold hover:bg-hover-accent transition">
                    Add Staff Member
                </button>
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
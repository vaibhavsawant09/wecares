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
        <!-- System Settings Form -->
        <div class="bg-custom-darker p-8 rounded-lg shadow-lg max-w-3xl mx-auto">
            <h2 class="text-xl font-semibold text-accent mb-6">System Settings</h2>

            <form action="update_settings.php" method="POST" enctype="multipart/form-data" class="space-y-6">

                <!-- Basic Settings Section -->
                <div>
                    <h3 class="text-lg font-semibold text-accent mb-4">Basic Settings</h3>

                    <!-- Organization Name -->
                    <div>
                        <label for="organization-name" class="block text-accent mb-2">Organization Name</label>
                        <input type="text" id="organization-name" name="organization_name" value="We Cares Pvt Ltd" required
                            class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-accent mb-2">Email</label>
                        <input type="email" id="email" name="email" value="support@wecares.in" required
                            class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                    </div>

                    <!-- Phone -->
                    <div>
                        <label for="phone" class="block text-accent mb-2">Phone</label>
                        <input type="tel" id="phone" name="phone" value="7887380238" required
                            class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                    </div>

                    <!-- Phone 2 -->
                    <div>
                        <label for="phone2" class="block text-accent mb-2">Phone 2</label>
                        <input type="tel" id="phone2" name="phone2" value="8169598364"
                            class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                    </div>

                    <!-- Country -->
                    <div>
                        <label for="country" class="block text-accent mb-2">Country</label>
                        <input type="text" id="country" name="country" value="India" required
                            class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                    </div>

                    <!-- Timezone -->
                    <div>
                        <label for="timezone" class="block text-accent mb-2">Timezone</label>
                        <input type="text" id="timezone" name="timezone" value="Asia/Kolkata" required
                            class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                    </div>

                    <!-- City -->
                    <div>
                        <label for="city" class="block text-accent mb-2">City</label>
                        <input type="text" id="city" name="city" value="Mumbai" required
                            class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                    </div>

                    <!-- Street -->
                    <div>
                        <label for="street" class="block text-accent mb-2">Street</label>
                        <input type="text" id="street" name="street" value="Mumbai Churchgate" required
                            class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                    </div>

                    <!-- Currency -->
                    <div>
                        <label for="currency" class="block text-accent mb-2">Currency</label>
                        <input type="text" id="currency" name="currency" value="INR" required
                            class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                    </div>

                    <!-- Logo Upload -->
                    <div>
                        <label for="logo" class="block text-accent mb-2">Logo (Leave blank if no change)</label>
                        <input type="file" id="logo" name="logo" accept="image/*"
                            class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                    </div>
                </div>

                <!-- SMTP Settings Section -->
                <div>
                    <h3 class="text-lg font-semibold text-accent mb-4">SMTP Settings</h3>

                    <!-- SMTP Server -->
                    <div>
                        <label for="smtp-server" class="block text-accent mb-2">SMTP Server</label>
                        <input type="text" id="smtp-server" name="smtp_server" required
                            class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                    </div>

                    <!-- SMTP Port -->
                    <div>
                        <label for="smtp-port" class="block text-accent mb-2">SMTP Port</label>
                        <input type="text" id="smtp-port" name="smtp_port" required
                            class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                    </div>

                    <!-- SMTP Username -->
                    <div>
                        <label for="smtp-username" class="block text-accent mb-2">SMTP Username</label>
                        <input type="text" id="smtp-username" name="smtp_username" required
                            class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                    </div>

                    <!-- SMTP Password -->
                    <div>
                        <label for="smtp-password" class="block text-accent mb-2">SMTP Password</label>
                        <input type="password" id="smtp-password" name="smtp_password" required
                            class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                    </div>
                </div>

                <!-- Theme and Appearance Section -->
                <div>
                    <h3 class="text-lg font-semibold text-accent mb-4">Theme and Appearance</h3>

                    <!-- Theme Selection -->
                    <div>
                        <label for="theme" class="block text-accent mb-2">Select Theme</label>
                        <select id="theme" name="theme" required
                            class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                            <option value="default" selected>Default</option>
                            <option value="dark">Dark</option>
                            <option value="light">Light</option>
                        </select>
                    </div>

                    <!-- Appearance Customization -->
                    <div>
                        <label for="appearance" class="block text-accent mb-2">Appearance Customization</label>
                        <input type="text" id="appearance" name="appearance"
                            class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                    </div>
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit" class="w-full py-2 rounded bg-accent text-custom-dark font-semibold hover:bg-hover-accent transition">
                        Save Changes
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
<!DOCTYPE html>
<html lang="zxx">

@include('ins_dashboard/header')

<!-- Sidebar -->
@include('ins_dashboard/sider')

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
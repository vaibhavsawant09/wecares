<!DOCTYPE html>
<html lang="zxx">

@include('ins_dashboard/header')
<!-- Sidebar -->
@include('ins_dashboard/sider')

<!-- Main Content -->
<main class="lg:ml-64 pt-20 p-6">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Support Ticket 1 -->
        <div class="relative bg-gradient-to-r from-[#D8E28C] to-[#114A43] p-8 rounded-xl shadow-lg transform transition-transform hover:scale-105 hover:shadow-2xl">
            <div class="flex items-center mb-6">
                <!-- Ticket ID -->
                <div class="w-12 h-12 bg-[#114A43] text-white rounded-full flex items-center justify-center mr-6">
                    <span class="text-lg font-semibold">#101</span>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-white">John Doe</h2>
                    <p class="text-gray-100">Customer Contact: 9876543210</p>
                </div>
            </div>
            <div class="text-white space-y-3 mb-6">
                <p><strong>Ticket Subject:</strong> Issue with Login</p>
                <p><strong>Ticket Description:</strong> User unable to login to the account due to invalid credentials error.</p>
                <p><strong>Ticket Category:</strong> Login Issues</p>
            </div>
            <div class="border-t pt-4 text-white">
                <p><strong>Open Date:</strong> 12/11/2024</p>
                <p><strong>Status:</strong> Open</p>
            </div>
        </div>

        <!-- Support Ticket 2 -->
        <div class="relative bg-gradient-to-r from-[#114A43] to-[#D8E28C] p-8 rounded-xl shadow-lg transform transition-transform hover:scale-105 hover:shadow-2xl">
            <div class="flex items-center mb-6">
                <!-- Ticket ID -->
                <div class="w-12 h-12 bg-[#114A43] text-white rounded-full flex items-center justify-center mr-6">
                    <span class="text-lg font-semibold">#102</span>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-white">Jane Smith</h2>
                    <p class="text-gray-100">Customer Contact: 9123456789</p>
                </div>
            </div>
            <div class="text-white space-y-3 mb-6">
                <p><strong>Ticket Subject:</strong> Billing Issue</p>
                <p><strong>Ticket Description:</strong> User has been charged twice for the same subscription.</p>
                <p><strong>Ticket Category:</strong> Billing Issues</p>
            </div>
            <div class="border-t pt-4 text-white">
                <p><strong>Open Date:</strong> 13/11/2024</p>
                <p><strong>Status:</strong> Closed</p>
            </div>
        </div>

        <!-- Support Ticket 3 -->
        <div class="relative bg-gradient-to-r from-[#D8E28C] via-white to-[#114A43] p-8 rounded-xl shadow-lg transform transition-transform hover:scale-105 hover:shadow-2xl">
            <div class="flex items-center mb-6">
                <!-- Ticket ID -->
                <div class="w-12 h-12 bg-[#114A43] text-white rounded-full flex items-center justify-center mr-6">
                    <span class="text-lg font-semibold">#103</span>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-[#114A43]">Alice Johnson</h2>
                    <p class="text-[#114A43]">Customer Contact: 8765432109</p>
                </div>
            </div>
            <div class="text-[#114A43] space-y-3 mb-6">
                <p><strong>Ticket Subject:</strong> Product Issue</p>
                <p><strong>Ticket Description:</strong> Received a damaged product, requesting a replacement.</p>
                <p><strong>Ticket Category:</strong> Product Issues</p>
            </div>
            <div class="border-t pt-4 text-[#114A43]">
                <p><strong>Open Date:</strong> 14/11/2024</p>
                <p><strong>Status:</strong> Pending</p>
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
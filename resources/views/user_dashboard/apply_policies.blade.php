<!DOCTYPE html>
<html lang="zxx">
@include('user_dashboard/header')
<!-- Sidebar -->
@include('user_dashboard/sider')

<!-- Main Content -->
<main class="lg:ml-64 pt-20 p-6">
    <div class="flex justify-between mb-6">

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
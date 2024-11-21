<!DOCTYPE html>
<html lang="zxx">

@include('ins_dashboard/header')

<!-- Sidebar -->
@include('ins_dashboard/sider')

<!-- Main Content -->
<main class="lg:ml-64 pt-20 p-6">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Policy Holder Card 1 -->
        <div class="relative bg-gradient-to-r from-[#D8E28C] to-[#114A43] p-8 rounded-xl shadow-lg transform transition-transform hover:scale-105 hover:shadow-2xl">
            <div class="flex items-center mb-6">
                <!-- Profile Picture -->
                <div class="w-20 h-20 rounded-full overflow-hidden mr-6">
                    <img src="{{url('images/466132576_1700000777457980_7640509984743529447_n.jpg')}}" alt="John Doe" class="w-full h-full object-cover">
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-white">John Doe</h2>
                    <span class="bg-white text-[#114A43] px-4 py-1 rounded-full text-sm font-semibold">Active</span>
                </div>
            </div>
            <div class="text-white space-y-3 mb-6">
                <p><strong>Policy Holder Contact:</strong> 9876543210</p>
                <p><strong>Policy Name:</strong> Life Insurance</p>
                <p><strong>Policy Category:</strong> Term</p>
                <p><strong>Policy Sub-Category:</strong> Family</p>
                <p><strong>Sum Assured:</strong> ₹5,00,000</p>
                <p><strong>Premium:</strong> ₹12,000</p>
                <p><strong>Tenure:</strong> 20 Years</p>
            </div>
            <div class="border-t pt-4 text-white">
                <p><strong>Status:</strong> Active</p>
                <p><strong>Date:</strong> 12/11/2024</p> <!-- Added Date -->
            </div>
        </div>

        <!-- Policy Holder Card 2 -->
        <div class="relative bg-gradient-to-r from-[#114A43] to-[#D8E28C] p-8 rounded-xl shadow-lg transform transition-transform hover:scale-105 hover:shadow-2xl">
            <div class="flex items-center mb-6">
                <!-- Profile Picture -->
                <div class="w-20 h-20 rounded-full overflow-hidden mr-6">
                    <img src="{{url('images/466132576_1700000777457980_7640509984743529447_n.jpg')}}" alt="Jane Smith" class="w-full h-full object-cover">
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-white">Jane Smith</h2>
                    <span class="bg-white text-[#114A43] px-4 py-1 rounded-full text-sm font-semibold">Inactive</span>
                </div>
            </div>
            <div class="text-white space-y-3 mb-6">
                <p><strong>Policy Holder Contact:</strong> 9123456789</p>
                <p><strong>Policy Name:</strong> Health Insurance</p>
                <p><strong>Policy Category:</strong> Individual</p>
                <p><strong>Policy Sub-Category:</strong> Critical Illness</p>
                <p><strong>Sum Assured:</strong> ₹2,00,000</p>
                <p><strong>Premium:</strong> ₹7,500</p>
                <p><strong>Tenure:</strong> 15 Years</p>
            </div>
            <div class="border-t pt-4 text-white">
                <p><strong>Status:</strong> Inactive</p>
                <p><strong>Date:</strong> 15/11/2024</p> <!-- Added Date -->
            </div>
        </div>

        <!-- Policy Holder Card 3 -->
        <div class="relative bg-gradient-to-r from-[#D8E28C] via-white to-[#114A43] p-8 rounded-xl shadow-lg transform transition-transform hover:scale-105 hover:shadow-2xl">
            <div class="flex items-center mb-6">
                <!-- Profile Picture -->
                <div class="w-20 h-20 rounded-full overflow-hidden mr-6">
                    <img src="{{url('images/466132576_1700000777457980_7640509984743529447_n.jpg')}}" alt="Alice Johnson" class="w-full h-full object-cover">
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-[#114A43]">Alice Johnson</h2>
                    <span class="bg-[#114A43] text-white px-4 py-1 rounded-full text-sm font-semibold">Active</span>
                </div>
            </div>
            <div class="text-[#114A43] space-y-3 mb-6">
                <p><strong>Policy Holder Contact:</strong> 8765432109</p>
                <p><strong>Policy Name:</strong> Vehicle Insurance</p>
                <p><strong>Policy Category:</strong> Motor</p>
                <p><strong>Policy Sub-Category:</strong> Car</p>
                <p><strong>Sum Assured:</strong> ₹10,00,000</p>
                <p><strong>Premium:</strong> ₹20,000</p>
                <p><strong>Tenure:</strong> 5 Years</p>
            </div>
            <div class="border-t pt-4 text-[#114A43]">
                <p><strong>Status:</strong> Active</p>
                <p><strong>Date:</strong> 10/11/2024</p> <!-- Added Date -->
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
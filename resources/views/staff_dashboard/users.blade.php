<!DOCTYPE html>
<html lang="zxx">

@include('ins_dashboard/header')

<!-- Sidebar -->
@include('ins_dashboard/sider')

<!-- Main Content -->
<main class="lg:ml-64 pt-20 p-6">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- User Card 1 -->
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
                <p><strong>Email:</strong> johndoe@gmail.com</p>
                <p><strong>Phone:</strong> 9876543210</p>
                <p><strong>City:</strong> New York</p>
                <p><strong>Street:</strong> 5th Avenue</p>
                <p><strong>Level:</strong> Admin</p>
            </div>
            <div class="border-t pt-4 text-white">
                <p><strong>Date Joined:</strong> 01/15/2023</p>
            </div>
        </div>

        <!-- User Card 2 -->
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
                <p><strong>Email:</strong> janesmith@gmail.com</p>
                <p><strong>Phone:</strong> 9123456789</p>
                <p><strong>City:</strong> Los Angeles</p>
                <p><strong>Street:</strong> Sunset Boulevard</p>
                <p><strong>Level:</strong> User</p>
            </div>
            <div class="border-t pt-4 text-white">
                <p><strong>Date Joined:</strong> 03/22/2022</p>
            </div>
        </div>

        <!-- User Card 3 -->
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
                <p><strong>Email:</strong> alicejohnson@gmail.com</p>
                <p><strong>Phone:</strong> 8765432109</p>
                <p><strong>City:</strong> Chicago</p>
                <p><strong>Street:</strong> Michigan Avenue</p>
                <p><strong>Level:</strong> Manager</p>
            </div>
            <div class="border-t pt-4 text-[#114A43]">
                <p><strong>Date Joined:</strong> 05/11/2021</p>
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
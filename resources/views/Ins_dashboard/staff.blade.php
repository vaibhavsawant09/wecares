<!DOCTYPE html>
<html lang="zxx">

@include('ins_dashboard/header')

<!-- Sidebar -->
@include('ins_dashboard/sider')

<!-- Main Content -->
<main class="lg:ml-64 pt-20 p-6">
    <div class="flex justify-between mb-6">
        <a href="{{url('ins_dashboard/add_staff')}}">
            <button class="bg-accent text-custom-dark px-4 py-1 rounded font-semibold text-sm hover:bg-hover-accent transition">
                Add
            </button>
        </a>
        <button id="export-btn" class="bg-accent text-custom-dark px-4 py-1 rounded font-semibold text-sm hover:bg-hover-accent transition">
            Export Data
        </button>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Staff Member 1 -->
        <div class="relative bg-gradient-to-r from-[#D8E28C] to-[#114A43] p-8 rounded-xl shadow-lg transform transition-transform hover:scale-105 hover:shadow-2xl">
            <div class="flex items-center mb-6">
                <!-- Profile Picture -->
                <div class="w-12 h-12 bg-[#114A43] text-white rounded-full flex items-center justify-center mr-6">
                    <img class="w-full h-full object-cover rounded-full" src="https://via.placeholder.com/150" alt="Profile Picture">
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-white">John Doe</h2>
                    <p class="text-gray-100">Position: Manager</p>
                </div>
            </div>
            <div class="text-white space-y-3 mb-6">
                <p><strong>Email:</strong> john.doe@wecares.in</p>
                <p><strong>Phone:</strong> 9876543210</p>
                <p><strong>City:</strong> Mumbai</p>
                <p><strong>Street:</strong> Churchgate</p>
            </div>
            <div class="border-t pt-4 text-white">
                <p><strong>Level:</strong> Senior</p>
                <p><strong>Status:</strong> Active</p>
            </div>
        </div>

        <!-- Staff Member 2 -->
        <div class="relative bg-gradient-to-r from-[#114A43] to-[#D8E28C] p-8 rounded-xl shadow-lg transform transition-transform hover:scale-105 hover:shadow-2xl">
            <div class="flex items-center mb-6">
                <!-- Profile Picture -->
                <div class="w-12 h-12 bg-[#114A43] text-white rounded-full flex items-center justify-center mr-6">
                    <img class="w-full h-full object-cover rounded-full" src="https://via.placeholder.com/150" alt="Profile Picture">
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-white">Jane Smith</h2>
                    <p class="text-gray-100">Position: Social Media Manager</p>
                </div>
            </div>
            <div class="text-white space-y-3 mb-6">
                <p><strong>Email:</strong> jane.smith@wecares.in</p>
                <p><strong>Phone:</strong> 9123456789</p>
                <p><strong>City:</strong> Delhi</p>
                <p><strong>Street:</strong> Connaught Place</p>
            </div>
            <div class="border-t pt-4 text-white">
                <p><strong>Level:</strong> Junior</p>
                <p><strong>Status:</strong> Active</p>
            </div>
        </div>

        <!-- Staff Member 3 -->
        <div class="relative bg-gradient-to-r from-[#D8E28C] via-white to-[#114A43] p-8 rounded-xl shadow-lg transform transition-transform hover:scale-105 hover:shadow-2xl">
            <div class="flex items-center mb-6">
                <!-- Profile Picture -->
                <div class="w-12 h-12 bg-[#114A43] text-white rounded-full flex items-center justify-center mr-6">
                    <img class="w-full h-full object-cover rounded-full" src="https://via.placeholder.com/150" alt="Profile Picture">
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-[#114A43]">Alice Johnson</h2>
                    <p class="text-[#114A43]">Position: Backend Developer</p>
                </div>
            </div>
            <div class="text-[#114A43] space-y-3 mb-6">
                <p><strong>Email:</strong> alice.johnson@wecares.in</p>
                <p><strong>Phone:</strong> 8765432109</p>
                <p><strong>City:</strong> Bangalore</p>
                <p><strong>Street:</strong> MG Road</p>
            </div>
            <div class="border-t pt-4 text-[#114A43]">
                <p><strong>Level:</strong> Mid</p>
                <p><strong>Status:</strong> Active</p>
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
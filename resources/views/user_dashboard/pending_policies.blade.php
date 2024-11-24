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
        @foreach ($policies as $key => $policy )
        <div class="relative bg-gradient-to-r from-[#D8E28C] to-[#114A43] p-8 rounded-xl shadow-lg transform transition-transform hover:scale-105 hover:shadow-2xl">
            <div class="flex items-center justify-between mb-6">
                <div>
                    <h2 class="text-2xl font-bold text-white">Policy {{$key+1}}</h2>
                </div>
            </div>
            <div class="text-white space-y-3 mb-6">
                <p><strong>Name:</strong> {{$policy->policy_name}}</p>
                <p><strong>Category:</strong> {{$policy->subCategory->category->name}}</p>
                <p><strong>Sub-Category:</strong> {{$policy->subCategory->name}}</p>
                <p><strong>Sum Assured:</strong> {{$policy->coverage_amount}}</p>
                <p><strong>Premium:</strong>{{$policy->premium}}</p>
                <p><strong>Tenure:</strong> {{$policy->tenure}} Year</p>
                <p><strong>Status:</strong> Active</p>
            </div>
            <div class="border-t pt-4 text-white">
                <p><strong>Date Created:</strong> {{$policy->created_date}}</p>
            </div>
        </div>
        @endforeach
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
<!DOCTYPE html>
<html lang="zxx">

@include('user_dashboard/header')

<!-- Sidebar -->
@include('user_dashboard/sider')
<!-- Main Content -->
<main class="lg:ml-64 pt-20 p-6">
    <!-- Report Generation Form -->
    <div class="bg-custom-darker p-8 rounded-lg shadow-lg max-w-3xl mx-auto">
        <h2 class="text-xl font-semibold text-accent mb-6">Generate Insurance Report</h2>

        <form action="" method="POST" class="space-y-6">

            <!-- Date Range -->
            <div>
                <label for="start-date" class="block text-accent mb-2">Start Date</label>
                <input type="date" id="start-date" name="start_date" required
                    class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
            </div>

            <div>
                <label for="end-date" class="block text-accent mb-2">End Date</label>
                <input type="date" id="end-date" name="end_date" required
                    class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
            </div>

            <!-- Policy Type -->
            <div>
                <label for="policy-type" class="block text-accent mb-2">Policy Type</label>
                <select id="policy-type" name="policy_type"
                    class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                    <option value="">Select Policy Type</option>
                    <option value="health">Health</option>
                    <option value="life">Life</option>
                    <option value="auto">Auto</option>
                    <option value="home">Home</option>
                    <option value="travel">Travel</option>
                </select>
            </div>

            <!-- Policy Status -->
            <div>
                <label for="policy-status" class="block text-accent mb-2">Policy Status</label>
                <select id="policy-status" name="policy_status"
                    class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                    <option value="">Select Status</option>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                    <option value="pending">Pending</option>
                    <option value="expired">Expired</option>
                </select>
            </div>

            <!-- Category -->
            <div>
                <label for="category" class="block text-accent mb-2">Category</label>
                <select id="category" name="category"
                    class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                    <option value="">Select Category</option>
                    <option value="individual">Individual</option>
                    <option value="family">Family</option>
                    <option value="corporate">Corporate</option>
                </select>
            </div>

            <!-- Subcategory -->
            <div>
                <label for="subcategory" class="block text-accent mb-2">Subcategory</label>
                <select id="subcategory" name="subcategory"
                    class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                    <option value="">Select Subcategory</option>
                    <option value="medical">Medical</option>
                    <option value="savings">Savings</option>
                    <option value="liability">Liability</option>
                    <option value="property">Property</option>
                    <option value="vehicle">Vehicle</option>
                </select>
            </div>

            <!-- Generate Report Button -->
            <div>
                <button type="submit" class="w-full py-2 rounded bg-accent text-custom-dark font-semibold hover:bg-hover-accent transition">
                    Generate Report
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
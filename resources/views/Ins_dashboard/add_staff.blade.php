<!DOCTYPE html>
<html lang="zxx">

@include('ins_dashboard/header')

<!-- Sidebar -->
@include('ins_dashboard/sider')

<!-- Main Content -->
<main class="lg:ml-64 pt-20 p-6">
    <!-- Add Staff Form -->
    <div class="bg-custom-darker p-8 rounded-lg shadow-lg max-w-md mx-auto">
        <h2 class="text-xl font-semibold text-accent mb-4">Add Staff Member</h2>
        <form action="" method="POST" enctype="multipart/form-data" class="space-y-4">
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
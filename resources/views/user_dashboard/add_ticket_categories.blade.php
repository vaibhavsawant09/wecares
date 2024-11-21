<!DOCTYPE html>
<html lang="zxx">


@include('user_dashboard/header')
<!-- Sidebar -->
@include('user_dashboard/sider')

<!-- Main Content -->
<main class="lg:ml-64 pt-20 p-6">
    <!-- Add Ticket Categories Form -->
    <div class="bg-custom-darker p-8 rounded-lg shadow-lg max-w-md mx-auto">
        <h2 class="text-xl font-semibold text-accent mb-4">Add Ticket</h2>
        <form action="add_ticket_category" method="POST" class="space-y-4">
            <!-- Ticket Category Name -->
            <div>
                <label for="ticket-category-name" class="block text-accent mb-2">Name</label>
                <input type="text" id="ticket-category-name" name="ticket_category_name" required
                    class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
            </div>
            <!-- Ticket Category Description -->
            <div>
                <label for="ticket-category-description" class="block text-accent mb-2">Description</label>
                <textarea id="ticket-category-description" name="ticket_category_description" rows="3"
                    class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent"></textarea>
            </div>
            <!-- Submit Button -->
            <button type="submit" class="w-full py-2 rounded bg-accent text-custom-dark font-semibold hover:bg-hover-accent transition">
                Add Ticket
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
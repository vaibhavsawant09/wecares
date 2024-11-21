<!DOCTYPE html>
<html lang="zxx">

@include('ins_dashboard/header')
<!-- Sidebar -->
@include('ins_dashboard/sider')

<!-- Main Content -->
<main class="lg:ml-64 pt-20 p-6">
    <!-- System Settings Form -->
    <div class="bg-custom-darker p-8 rounded-lg shadow-lg max-w-3xl mx-auto">
        <h2 class="text-xl font-semibold text-accent mb-6">System Settings</h2>

        <form action="" method="POST" enctype="multipart/form-data" class="space-y-6">

            <!-- Basic Settings Section -->
            <div>
                <h3 class="text-lg font-semibold text-accent mb-4">Basic Settings</h3>

                <!-- Organization Name -->
                <div>
                    <label for="organization-name" class="block text-accent mb-2">Organization Name</label>
                    <input type="text" id="organization-name" name="organization_name" value="We Cares Pvt Ltd" required
                        class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-accent mb-2">Email</label>
                    <input type="email" id="email" name="email" value="support@wecares.in" required
                        class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                </div>

                <!-- Phone -->
                <div>
                    <label for="phone" class="block text-accent mb-2">Phone</label>
                    <input type="tel" id="phone" name="phone" value="7887380238" required
                        class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                </div>

                <!-- Phone 2 -->
                <div>
                    <label for="phone2" class="block text-accent mb-2">Phone 2</label>
                    <input type="tel" id="phone2" name="phone2" value="8169598364"
                        class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                </div>

                <!-- Country -->
                <div>
                    <label for="country" class="block text-accent mb-2">Country</label>
                    <input type="text" id="country" name="country" value="India" required
                        class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                </div>

                <!-- Timezone -->
                <div>
                    <label for="timezone" class="block text-accent mb-2">Timezone</label>
                    <input type="text" id="timezone" name="timezone" value="Asia/Kolkata" required
                        class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                </div>

                <!-- City -->
                <div>
                    <label for="city" class="block text-accent mb-2">City</label>
                    <input type="text" id="city" name="city" value="Mumbai" required
                        class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                </div>

                <!-- Street -->
                <div>
                    <label for="street" class="block text-accent mb-2">Street</label>
                    <input type="text" id="street" name="street" value="Mumbai Churchgate" required
                        class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                </div>

                <!-- Currency -->
                <div>
                    <label for="currency" class="block text-accent mb-2">Currency</label>
                    <input type="text" id="currency" name="currency" value="INR" required
                        class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                </div>

                <!-- Logo Upload -->
                <div>
                    <label for="logo" class="block text-accent mb-2">Logo (Leave blank if no change)</label>
                    <input type="file" id="logo" name="logo" accept="image/*"
                        class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                </div>
            </div>

            <!-- SMTP Settings Section -->
            <div>
                <h3 class="text-lg font-semibold text-accent mb-4">SMTP Settings</h3>

                <!-- SMTP Server -->
                <div>
                    <label for="smtp-server" class="block text-accent mb-2">SMTP Server</label>
                    <input type="text" id="smtp-server" name="smtp_server" required
                        class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                </div>

                <!-- SMTP Port -->
                <div>
                    <label for="smtp-port" class="block text-accent mb-2">SMTP Port</label>
                    <input type="text" id="smtp-port" name="smtp_port" required
                        class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                </div>

                <!-- SMTP Username -->
                <div>
                    <label for="smtp-username" class="block text-accent mb-2">SMTP Username</label>
                    <input type="text" id="smtp-username" name="smtp_username" required
                        class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                </div>

                <!-- SMTP Password -->
                <div>
                    <label for="smtp-password" class="block text-accent mb-2">SMTP Password</label>
                    <input type="password" id="smtp-password" name="smtp_password" required
                        class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                </div>
            </div>

            <!-- Theme and Appearance Section -->
            <div>
                <h3 class="text-lg font-semibold text-accent mb-4">Theme and Appearance</h3>

                <!-- Theme Selection -->
                <div>
                    <label for="theme" class="block text-accent mb-2">Select Theme</label>
                    <select id="theme" name="theme" required
                        class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                        <option value="default" selected>Default</option>
                        <option value="dark">Dark</option>
                        <option value="light">Light</option>
                    </select>
                </div>

                <!-- Appearance Customization -->
                <div>
                    <label for="appearance" class="block text-accent mb-2">Appearance Customization</label>
                    <input type="text" id="appearance" name="appearance"
                        class="w-full px-4 py-2 rounded border border-accent bg-custom-dark text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                </div>
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit" class="w-full py-2 rounded bg-accent text-custom-dark font-semibold hover:bg-hover-accent transition">
                    Save Changes
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
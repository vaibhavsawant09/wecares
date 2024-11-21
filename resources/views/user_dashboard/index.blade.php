<!DOCTYPE html>
<html lang="zxx">

@include('user_dashboard/header')
<!-- Sidebar -->
@include('user_dashboard/sider')

<!-- Main Content -->
<main class="lg:ml-64 pt-20 p-6">
    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
        <div class="bg-custom-darker p-6 rounded-lg shadow-lg">
            <div class="flex items-center justify-between">
                <h3 class="text-lg font-semibold">Total Users</h3>
                <span class="text-accent text-2xl font-bold">8,249</span>
            </div>
            <p class="text-gray-400 mt-2">+12.5% from last month</p>
        </div>
        <div class="bg-custom-darker p-6 rounded-lg shadow-lg">
            <div class="flex items-center justify-between">
                <h3 class="text-lg font-semibold">Revenue</h3>
                <span class="text-accent text-2xl font-bold">₹24.5K</span>
            </div>
            <p class="text-gray-400 mt-2">+8.2% from last month</p>
        </div>
        <div class="bg-custom-darker p-6 rounded-lg shadow-lg">
            <div class="flex items-center justify-between">
                <h3 class="text-lg font-semibold">Active Users</h3>
                <span class="text-accent text-2xl font-bold">3,842</span>
            </div>
            <p class="text-gray-400 mt-2">+5.1% from last month</p>
        </div>
        <div class="bg-custom-darker p-6 rounded-lg shadow-lg">
            <div class="flex items-center justify-between">
                <h3 class="text-lg font-semibold">Conversion</h3>
                <span class="text-accent text-2xl font-bold">2.4%</span>
            </div>
            <p class="text-gray-400 mt-2">+1.2% from last month</p>
        </div>
    </div>

    <!-- Charts -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="bg-custom-darker p-6 rounded-lg shadow-lg">
            <h3 class="text-lg font-semibold mb-4">User Growth</h3>
            <canvas id="userGrowthChart"></canvas>
        </div>
        <div class="bg-custom-darker p-6 rounded-lg shadow-lg">
            <h3 class="text-lg font-semibold mb-4">Revenue Distribution</h3>
            <canvas id="revenueChart"></canvas>
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

    // Charts
    const userGrowthCtx = document.getElementById('userGrowthChart').getContext('2d');
    const revenueCtx = document.getElementById('revenueChart').getContext('2d');

    // Common chart options
    Chart.defaults.color = '#94a3b8';
    Chart.defaults.borderColor = '#334155';

    // User Growth Chart
    new Chart(userGrowthCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'Users',
                data: [3000, 4500, 5200, 6800, 7400, 8249],
                borderColor: '#D8E28C',
                backgroundColor: 'rgba(216, 226, 140, 0.1)',
                fill: true,
                tension: 0.4
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: '#1e293b'
                    }
                },
                x: {
                    grid: {
                        color: '#1e293b'
                    }
                }
            }
        }
    });

    // Revenue Chart
    new Chart(revenueCtx, {
        type: 'doughnut',
        data: {
            labels: ['Products', 'Services', 'Subscriptions'],
            datasets: [{
                data: [12500, 8000, 4000],
                backgroundColor: [
                    '#D8E28C',
                    '#74C79A',
                    '#114A43'
                ],
                borderWidth: 0
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom'
                }
            }
        }
    });
</script>
</body>

</html>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{url('images/icon.jpg')}}">
    <link rel="stylesheet" href="{{url('css/ins_style.css')}}">

    <!-- Add Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Add Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="bg-custom-dark text-gray-100">
    <!-- Header -->
    <header class="fixed w-full bg-custom-darker shadow-lg z-50">
        <div class="flex items-center justify-between px-6 py-4">
            <div class="flex items-center">
                <button id="menu-toggle" class="lg:hidden mr-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
                <a href="{{url('ins_dashboard')}}">
                    <h1 class="text-2xl font-bold text-accent">We Cares</h1>
                </a>
            </div>
            <div class="flex items-center space-x-4">
                <a href="{{url('ins_dashboard/notifications')}}">
                    <button class="p-2 rounded-full hover:bg-gray-700">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                        </svg>
                    </button>
                </a>
                <div class="w-8 h-8 rounded-full bg-accent overflow-hidden">
                    <a href="{{url('ins_dashboard/profile')}}"><img src="{{url('images/466132576_1700000777457980_7640509984743529447_n.jpg')}}" alt="Profile Image" class="w-auto h-full object-cover"></a>
                </div>

            </div>
        </div>
    </header>

    <!-- Sidebar -->
    @include('ins_dashboard/sider')

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
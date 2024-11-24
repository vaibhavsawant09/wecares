<aside id="sidebar" class="fixed left-0 top-0 lg:top-16 w-64 h-full bg-custom-darker transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out z-40 overflow-y-auto max-h-screen">
    <nav class="mt-16 lg:mt-0 p-4">
        <div class="space-y-2">
            <!-- Dashboard -->
            <a href="{{url('user_dashboard')}}" class="flex items-center space-x-3 px-4 py-3 rounded-lg bg-blue-900 text-accent">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                <span>Dashboard</span>
            </a>

            <!-- Categories -->
            <a href="{{url('user_dashboard/plans')}}" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-gray-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h18M3 10h18M3 15h18M3 20h18"></path>
                </svg>
                <span>Plans</span>
            </a>

            <!-- Categories -->
            <a href="{{url('user_dashboard/apply_policies')}}" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-gray-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h18M3 10h18M3 15h18M3 20h18"></path>
                </svg>
                <span>Your Insurance</span>
            </a>

            <!-- Sub-Categories -->
            <a href="{{url('user_dashboard/pending_policies')}}" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-gray-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 6h14M5 12h14M5 18h14"></path>
                </svg>
                <span>Pending Policies</span>
            </a>

            <!-- Ticket Categories -->
            <a href="{{url('user_dashboard/approved_policies')}}" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-gray-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v18m9-9H3"></path>
                </svg>
                <span>Approved Policies</span>
            </a>

            <!-- Insurance Policy -->
            <a href="{{url('user_dashboard/rejected_policies')}}" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-gray-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8V3m0 0l4 4m-4-4l-4 4m12 4v8a2 2 0 01-2 2H6a2 2 0 01-2-2v-8"></path>
                </svg>
                <span>Rejected Policies</span>
            </a>

            <!-- Support Tickets -->
            <a href="{{url('user_dashboard/support_ticket')}}" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-gray-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 12v8m0-8l-3 3m3-3l3 3m-7 1h14"></path>
                </svg>
                <span>Support Tickets</span>
            </a>

            <!-- Report Tools -->
            <a href="{{url('user_dashboard/report')}}" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-gray-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v12m6-6H6"></path>
                </svg>
                <span>Report Tools</span>
            </a>
        </div>
    </nav>
</aside>
<!DOCTYPE html>
<html lang="zxx">

@include('user_dashboard/header')
<!-- Sidebar -->
@include('user_dashboard/sider')

<!-- Main Content -->
<main class="lg:ml-64 pt-20 p-6">
    <!-- Report Table -->
    <div class="overflow-x-auto bg-custom-darker p-8 rounded-lg shadow-lg">
        <h2 class="text-xl font-semibold text-accent mb-6">Generated Insurance Report</h2>

        <!-- Action Buttons (Print, Share, Download) -->
        <div class="flex justify-between mb-4">
            <div>
                <button id="print-btn" class="bg-accent text-custom-dark px-4 py-2 rounded font-semibold hover:bg-hover-accent transition">
                    Print
                </button>
                <button id="share-btn" class="bg-accent text-custom-dark px-4 py-2 rounded font-semibold hover:bg-hover-accent transition ml-2">
                    Share
                </button>
                <button id="download-btn" class="bg-accent text-custom-dark px-4 py-2 rounded font-semibold hover:bg-hover-accent transition ml-2">
                    Download
                </button>
            </div>
        </div>

        <!-- Table -->
        <table class="min-w-full table-auto text-left text-gray-100">
            <thead class="bg-accent text-custom-dark">
                <tr>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Category</th>
                    <th class="px-4 py-2">Sub-Category</th>
                    <th class="px-4 py-2">Sum Assured</th>
                    <th class="px-4 py-2">Premium</th>
                    <th class="px-4 py-2">Tenure</th>
                    <th class="px-4 py-2">Status</th>
                    <th class="px-4 py-2">Date Created</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example Data Row -->
                <tr class="border-t border-gray-600">
                    <td class="px-4 py-2">John Doe</td>
                    <td class="px-4 py-2">Individual</td>
                    <td class="px-4 py-2">Medical</td>
                    <td class="px-4 py-2">500,000</td>
                    <td class="px-4 py-2">120/month</td>
                    <td class="px-4 py-2">10 years</td>
                    <td class="px-4 py-2 text-green-500">Active</td>
                    <td class="px-4 py-2">2024-01-15</td>
                </tr>
                <!-- More Data Rows... -->
                <tr>
                    <td colspan="8" class="text-center py-4">No records found for the selected filters.</td>
                </tr>
            </tbody>
        </table>
    </div>
</main>

<!-- JavaScript -->
<script>
    // Print functionality
    document.getElementById('print-btn').addEventListener('click', function() {
        window.print();
    });

    // Share functionality (Open mail client for example)
    document.getElementById('share-btn').addEventListener('click', function() {
        const url = window.location.href;
        const subject = "Generated Insurance Report";
        const body = "Please find the attached insurance report:\n" + url;
        window.location.href = `mailto:?subject=${subject}&body=${body}`;
    });

    // Download functionality (Download the table as a CSV)
    document.getElementById('download-btn').addEventListener('click', function() {
        let csvContent = "data:text/csv;charset=utf-8,";
        const table = document.querySelector("table");
        const rows = table.querySelectorAll("tr");

        rows.forEach(function(row) {
            const cells = row.querySelectorAll("td, th");
            const rowData = [];
            cells.forEach(function(cell) {
                rowData.push(cell.textContent.replace(/(\r\n|\n|\r)/gm, "").trim());
            });
            csvContent += rowData.join(",") + "\n";
        });

        const encodedUri = encodeURI(csvContent);
        const link = document.createElement("a");
        link.setAttribute("href", encodedUri);
        link.setAttribute("download", "insurance_report.csv");
        link.click();
    });
</script>
</body>

</html>
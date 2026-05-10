<div class="container p-4">
    <h2>Library Analytics</h2>
    <p class="text-muted mb-4">Track borrowing trends and member activity across your library.</p>

    <div class="row mb-4">
        <div class="col-md-6">
            <div class="card p-3 shadow-sm">
                <h5>Monthly Borrowings</h5>
                <canvas id="borrowChart" height="220"></canvas>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card p-3 shadow-sm">
                <h5>Category Popularity</h5>
                <canvas id="categoryChart" height="220"></canvas>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card p-3 shadow-sm mb-3">
                <h6>Top Member Activity</h6>
                <p>Review the most active borrowers and their recent checkouts.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 shadow-sm mb-3">
                <h6>Digital Usage</h6>
                <p>Monitor how often online catalogs and e-resources are used.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 shadow-sm mb-3">
                <h6>Staff Support</h6>
                <p>See how many assistance requests were processed this week.</p>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const borrowCtx = document.getElementById('borrowChart').getContext('2d');
    new Chart(borrowCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'Books Borrowed',
                data: [120, 150, 180, 170, 200, 220],
                borderColor: '#007bff',
                backgroundColor: 'rgba(0, 123, 255, 0.1)',
                fill: true,
                tension: 0.3
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: { beginAtZero: true }
            }
        }
    });

    const categoryCtx = document.getElementById('categoryChart').getContext('2d');
    new Chart(categoryCtx, {
        type: 'doughnut',
        data: {
            labels: ['Fiction', 'Non-fiction', 'Children', 'Reference', 'Digital'],
            datasets: [{
                data: [35, 25, 15, 15, 10],
                backgroundColor: ['#007bff', '#28a745', '#ffc107', '#17a2b8', '#6f42c1']
            }]
        },
        options: { responsive: true }
    });
</script>
<h2 class="mb-4">Dashboard</h2>


<div class="row mb-4">
    <div class="col-md-4">
        <div class="card bg-primary text-white p-3">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h5>Sign ups</h5>
                    <h3>114</h3>
                    <small>+25% from last month</small>
                </div>
                <i class="fas fa-user fa-2x"></i>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card bg-success text-white p-3">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h5>Revenue</h5>
                    <h3>$25,541</h3>
                    <small>+17.5% from last month</small>
                </div>
                <i class="fas fa-shopping-cart fa-2x"></i>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card bg-danger text-white p-3">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h5>Open tickets</h5>
                    <h3>5</h3>
                </div>
                <i class="fas fa-phone fa-2x"></i>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <!-- Chart -->
    <div class="col-md-6">
        <div class="card p-3 shadow-sm">
            <h6>Bar Chart</h6>
            <canvas id="barChart" height="150"></canvas>
        </div>
    </div>


    <!-- Notifications -->
    <div class="col-md-6">
        <div class="card p-3 shadow-sm">
            <h6>Notifications</h6>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">New comment <span class="text-muted float-end">21 days ago</span></li>
                <li class="list-group-item">New comment <span class="text-muted float-end">21 days ago</span></li>
                <li class="list-group-item">New comment <span class="text-muted float-end">21 days ago</span></li>
            </ul>
            <a href="#" class="mt-2 d-block">Show all</a>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('barChart').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
            datasets: [{
                label: 'Sign ups',
                data: [12, 19, 3, 5, 2],
                backgroundColor: '#3498db'
            }]
        },
        options: {
            scales: {
                y: { beginAtZero: true }
            }
        }
    });
</script>






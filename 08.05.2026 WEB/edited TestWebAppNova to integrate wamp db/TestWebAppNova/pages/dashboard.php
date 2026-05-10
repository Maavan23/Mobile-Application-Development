<?php
include __DIR__ . '/../config/db.php';

$user = htmlspecialchars($_SESSION['user']);

$userCount = 0;
$borrowedCount = 0;
$latestCustomers = [];

$countStmt = $conn->prepare('SELECT COUNT(*) AS total FROM customer');
if ($countStmt) {
    $countStmt->execute();
    $result = $countStmt->get_result();
    if ($row = $result->fetch_assoc()) {
        $userCount = (int)$row['total'];
    }
    $countStmt->close();
}

$borrowStmt = $conn->prepare('SELECT COUNT(*) AS total FROM customer WHERE book_name IS NOT NULL AND book_name <> ""');
if ($borrowStmt) {
    $borrowStmt->execute();
    $result = $borrowStmt->get_result();
    if ($row = $result->fetch_assoc()) {
        $borrowedCount = (int)$row['total'];
    }
    $borrowStmt->close();
}

$listStmt = $conn->prepare('SELECT username, book_name, borrowed_date FROM customer ORDER BY id DESC LIMIT 5');
if ($listStmt) {
    $listStmt->execute();
    $result = $listStmt->get_result();
    while ($row = $result->fetch_assoc()) {
        $latestCustomers[] = $row;
    }
    $listStmt->close();
}
?>

<h2 class="mb-4">TestWebAppNova Dashboard</h2>

<div class="row mb-4">
    <div class="col-md-4">
        <div class="card bg-primary text-white p-3">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h5>Logged in as</h5>
                    <h3><?php echo $user; ?></h3>
                    <small>Welcome back</small>
                </div>
                <i class="fas fa-user fa-2x"></i>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card bg-success text-white p-3">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h5>Total customers</h5>
                    <h3><?php echo $userCount; ?></h3>
                    <small>From the customer table</small>
                </div>
                <i class="fas fa-users fa-2x"></i>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card bg-info text-white p-3">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h5>Books borrowed</h5>
                    <h3><?php echo $borrowedCount; ?></h3>
                    <small>Non-empty book records</small>
                </div>
                <i class="fas fa-book fa-2x"></i>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="card p-3 shadow-sm">
            <h6>Recent customers</h6>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Book</th>
                            <th>Borrowed Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (count($latestCustomers) === 0): ?>
                            <tr>
                                <td colspan="3">No customer records found.</td>
                            </tr>
                        <?php else: ?>
                            <?php foreach ($latestCustomers as $customer): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($customer['username']); ?></td>
                                    <td><?php echo htmlspecialchars($customer['book_name'] ?: '—'); ?></td>
                                    <td><?php echo htmlspecialchars($customer['borrowed_date'] ?: '—'); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-3 shadow-sm">
            <h6>Quick actions</h6>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Manage users from the customer table</li>
                <li class="list-group-item">Check your database records</li>
                <li class="list-group-item">Use Register to add new accounts</li>
            </ul>
            <a href="../logout.php" class="btn btn-danger mt-3">Logout</a>
        </div>
    </div>
</div>






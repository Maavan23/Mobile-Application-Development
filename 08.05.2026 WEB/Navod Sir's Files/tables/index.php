<?php
require_once 'db_config.php';

// Pagination settings
$rowsPerPage = 10;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($page < 1) $page = 1;
$offset = ($page - 1) * $rowsPerPage;

// Search query
$search = isset($_GET['search']) ? trim($_GET['search']) : '';
$searchQuery = $search ? "WHERE name LIKE ?" : "";
$searchParam = $search ? "%$search%" : "";

// Get total rows for pagination
$totalStmt = $conn->prepare("SELECT COUNT(*) as total FROM employees $searchQuery");
if ($search) {
    $totalStmt->bind_param("s", $searchParam);
}
$totalStmt->execute();
$totalRows = $totalStmt->get_result()->fetch_assoc()['total'];
$totalPages = ceil($totalRows / $rowsPerPage);

// Fetch employees for current page
$stmt = $conn->prepare("SELECT id, name, email, department, availability, address, joining_date, shift_time, employee_id, skills, notes FROM employees $searchQuery LIMIT ? OFFSET ?");
if ($search) {
    $stmt->bind_param("sii", $searchParam, $rowsPerPage, $offset);
} else {
    $stmt->bind_param("ii", $rowsPerPage, $offset);
}
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f5f5f5;
        }
        .table-container {
            max-width: 1200px;
            margin: 20px auto;
        }
        .action-btn {
            padding: 6px 12px;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="table-container">
        <div class="mb-3 d-flex justify-content-end">
            <form method="GET" action="index.php" class="d-flex" style="width: 300px;">
                <input type="text" name="search" class="form-control me-2" placeholder="Search by name..." value="<?php echo htmlspecialchars($search); ?>">
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
        <div class="card">
            <div class="card-body p-0">
                <table class="table table-hover mb-0">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Department</th>
                            <th>Availability</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['id']); ?></td>
                                <td><?php echo htmlspecialchars($row['name']); ?></td>
                                <td><?php echo htmlspecialchars($row['email']); ?></td>
                                <td><?php echo htmlspecialchars($row['department']); ?></td>
                                <td><?php echo $row['availability'] ? 'Available' : 'Unavailable'; ?></td>
                                <td>
                                    <button class="btn btn-success action-btn view-btn"
                                            data-id="<?php echo htmlspecialchars($row['id']); ?>"
                                            data-name="<?php echo htmlspecialchars($row['name']); ?>"
                                            data-email="<?php echo htmlspecialchars($row['email']); ?>"
                                            data-department="<?php echo htmlspecialchars($row['department']); ?>"
                                            data-availability="<?php echo $row['availability'] ? 'Available' : 'Unavailable'; ?>"
                                            data-address="<?php echo htmlspecialchars($row['address']); ?>"
                                            data-joining-date="<?php echo htmlspecialchars($row['joining_date']); ?>"
                                            data-shift-time="<?php echo htmlspecialchars($row['shift_time']); ?>"
                                            data-employee-id="<?php echo htmlspecialchars($row['employee_id']); ?>"
                                            data-skills="<?php echo htmlspecialchars($row['skills'] ?? 'None'); ?>"
                                            data-notes="<?php echo htmlspecialchars($row['notes'] ?? 'None'); ?>"
                                            data-bs-toggle="modal" data-bs-target="#viewModal">
                                        View
                                    </button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <nav aria-label="Page navigation" class="mt-3">
            <ul class="pagination justify-content-center">
                <li class="page-item <?php if ($page <= 1) echo 'disabled'; ?>">
                    <a class="page-link" href="<?php echo $page > 1 ? '?page=' . ($page - 1) . ($search ? '&search=' . urlencode($search) : '') : '#'; ?>">Previous</a>
                </li>
                <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
                    <li class="page-item <?php if ($i == $page) echo 'active'; ?>">
                        <a class="page-link" href="?page=<?php echo $i; ?><?php echo $search ? '&search=' . urlencode($search) : ''; ?>"><?php echo $i; ?></a>
                    </li>
                <?php } ?>
                <li class="page-item <?php if ($page >= $totalPages) echo 'disabled'; ?>">
                    <a class="page-link" href="<?php echo $page < $totalPages ? '?page=' . ($page + 1) . ($search ? '&search=' . urlencode($search) : '') : '#'; ?>">Next</a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- View Modal -->
    <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewModalLabel">Employee Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>ID:</strong> <span id="modal-id"></span></p>
                    <p><strong>Name:</strong> <span id="modal-name"></span></p>
                    <p><strong>Email:</strong> <span id="modal-email"></span></p>
                    <p><strong>Department:</strong> <span id="modal-department"></span></p>
                    <p><strong>Availability:</strong> <span id="modal-availability"></span></p>
                    <p><strong>Address:</strong> <span id="modal-address"></span></p>
                    <p><strong>Joining Date:</strong> <span id="modal-joining-date"></span></p>
                    <p><strong>Shift Time:</strong> <span id="modal-shift-time"></span></p>
                    <p><strong>Employee ID:</strong> <span id="modal-employee-id"></span></p>
                    <p><strong>Skills:</strong> <span id="modal-skills"></span></p>
                    <p><strong>Notes:</strong> <span id="modal-notes"></span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="modal.js"></script>
</body>
</html>

<?php
$stmt->close();
$totalStmt->close();
$conn->close();
?>
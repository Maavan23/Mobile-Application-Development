<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        .sidebar {
            height: 100vh;
            width: 220px;
            background-color: #2c3e50;
            color: white;
            position: fixed;
            padding-top: 20px;
        }
        .main {
            margin-left: 220px;
            padding: 20px;
        }
        .sidebar a {
            color: white;
            padding: 12px 20px;
            display: block;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #34495e;
        }
    </style>
</head>
<body>


<?php include("includes/navbar.php"); ?>


<div class="main">
    <?php
    $page = $_GET['page'] ??
     'dashboard'; // default is dashboard
    $file = "pages/$page.php";


    if (file_exists($file)) {
        include($file);
    } else {
        echo "<h3>404 - Page 
        not found</h3>";
    }
    ?>
</div>


</body>
</html>




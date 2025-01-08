<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memo Management Dashboard</title>
    <style>
        /* General Styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            color: #333;
            margin: 0;
        }

        /* Dashboard Container */
        .dashboard-container {
            display: flex;
        }

        /* Sidebar */
        .sidebar {
            background-color: #003366;
            color: #fff;
            width: 240px;
            padding: 20px;
            height: 100vh;
        }

        .sidebar h2 {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            margin: 15px 0;
        }

        .sidebar ul li a {
            color: #ffffff;
            text-decoration: none;
            font-size: 1rem;
            display: flex;
            align-items: center;
        }

        .sidebar ul li:hover {
            background-color: #001d4d;
            padding: 8px;
            border-radius: 8px;
        }

        .sidebar ul li a i {
            margin-right: 10px;
        }

        /* Main Content */
        .main-content {
            flex-grow: 1;
            padding: 30px;
        }

        /* Top Section */
        .top-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .search-bar {
            display: flex;
            align-items: center;
        }

        .search-bar input {
            padding: 8px 15px;
            border-radius: 4px;
            border: 1px solid #ddd;
            margin-right: 10px;
        }

        .search-bar button {
            padding: 8px 15px;
            background-color: #005792;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .search-bar button:hover {
            background-color: #003f66;
        }

        /* Key Metrics Section */
        .key-metrics {
            display: flex;
            gap: 20px;
            margin-bottom: 40px;
        }

        .metric {
            flex: 1;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .metric h3 {
            font-size: 1.2rem;
            color: #005792;
            margin-bottom: 10px;
        }

        .metric p {
            font-size: 1.5rem;
            color: #333;
            font-weight: bold;
        }

        /* Integration & Analytics Section */
        .integration-analytics {
            margin-top: 40px;
        }

        .integration-card {
            background-color: #fff;
            padding: 20px;
            margin: 10px 0;
            border-radius: 8px;
            border: 1px solid #ddd;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .integration-card h3 {
            color: #003366;
        }

        /* Charts Section */
        .charts {
            margin-top: 40px;
        }

        .chart {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            border: 1px solid #ddd;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            height: 300px;
        }
    </style>
</head>
<body>

<?php
// Placeholder data for dynamic display
$totalMemos = 250;
$pendingApprovals = 45;
$completedMemos = 200;
?>

<div class="dashboard-container">
    
    <!-- Sidebar -->
    <aside class="sidebar">
        <h2>Memo Management</h2>
        <ul>
            <li><a href="#"><i class="fas fa-home"></i> Dashboard Overview</a></li>
            <li><a href=memos.php ><i class="fas fa-plus"></i> Add New Memo</a></li>
            <li><a href="Annalytics.php"><i class="fas fa-chart-bar"></i> Analytics</a></li>
            <li><a href="#"><i class="fas fa-file-alt"></i> Reports</a></li>
            <li><a href="#"><i class="fas fa-cog"></i> Settings</a></li>
        </ul>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Top Section: Search Bar and Add Memo -->
        <section class="top-section">
            <h1>Dashboard Overview</h1>
            <div class="search-bar">
                <input type="text" placeholder="Search Memo...">
                <button>Search</button>
            </div>
        </section>

        <!-- Key Metrics Section -->
        <section class="key-metrics">
            <div class="metric">
                <h3>Total Memos</h3>
                <p><?php echo $totalMemos; ?></p>
            </div>
            <div class="metric">
                <h3>Pending Approvals</h3>
                <p><?php echo $pendingApprovals; ?></p>
            </div>
            <div class="metric">
                <h3>Completed Memos</h3>
                <p><?php echo $completedMemos; ?></p>
            </div>
        </section>

        <!-- Graphs and Charts Section -->
        <section class="charts">
            <h2>Analytics</h2>
            <div class="chart">
                <canvas id="lineChart"></canvas>
            </div>
        </section>
    </main>
</div>

<!-- FontAwesome for Icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<!-- JS for Charts -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Sample Chart.js integration
    const ctx = document.getElementById('lineChart').getContext('2d');
    const lineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April'],
            datasets: [{
                label: 'Memo Submissions',
                data: [10, 20, 30, 40],
                backgroundColor: 'rgba(0, 123, 255, 0.2)',
                borderColor: 'rgba(0, 123, 255, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });
</script>

</body>
</html>

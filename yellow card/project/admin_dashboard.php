<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: admin_login.php");
    exit();
}

include 'db_connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare the delete statement
    $query = "DELETE FROM users WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // Redirect back to the admin dashboard after deletion
        header("Location: admin_dashboard.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Yellow Card</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
        }
        .sidebar {
            width: 250px;
            background: #8B0000;
            color: white;
            padding: 15px;
            height: 100vh;
            position: fixed;
        }
        .sidebar h2 {
            text-align: center;
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
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .sidebar ul li a:hover {
            background: #5a0000;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
            width: calc(100% - 250px);
        }
        .main-content h1 {
            color: #8B0000;
        }
        .stats {
            display: flex;
            justify-content: space-around;
            margin-bottom: 20px;
        }
        .stat-box {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 30%;
        }
        .stat-box h3 {
            margin-bottom: 10px;
            color: #8B0000;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background: #8B0000;
            color: white;
        }
        tr:nth-child(even) {
            background: #f4f4f4;
        }
        tr:hover {
            background: #ddd;
        }
        .action-link {
            color: #8B0000;
            text-decoration: none;
        }
        .action-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Yellow Card Admin</h2>
        <ul>
            <li><a href="admin_dashboard.php">Dashboard</a></li>
            <li><a href="manage_wines.php">Manage Wines</a></li>
            <li><a href="manage_orders.php">Manage Orders</a></li>
            <li><a href="manage_users.php">Manage Users</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    <div class="main-content">
        <h1>Welcome to Yellow Card Admin Dashboard</h1>
        <div class="stats">
            <div class="stat-box">
                <h3>Total Wines</h3>
                <p>50</p>
            </div>
            <div class="stat-box">
                <h3>Total Orders</h3>
                <p>120</p>
            </div>
            <div class="stat-box">
                <h3>Total Users</h3>
                <p>
                    <?php
                    include 'db_connect.php';
                    $query = "SELECT COUNT(*) AS total_users FROM users";
                    $result = mysqli_query($conn, $query);
                    $row = mysqli_fetch_assoc($result);
                    echo $row['total_users'];
                    ?>
                </p>
            </div>
        </div>
        <h2>Registered Users</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <?php
            $query = "SELECT * FROM users";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['full_name']}</td>
                        <td>{$row['email']}</td>
                        <td>
                        <a href='admin_dashboard.php?id={$row['id']}' class='action-link'>Delete</a>
                        </td>
                      </tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>

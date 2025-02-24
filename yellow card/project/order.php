<?php
session_start();
require 'db_connect.php'; // Ensure this file contains your database connection

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit();
}

// Fetch user details from the database
$email = $_SESSION['email'];
$query = "SELECT full_name, email, phone FROM users WHERE email = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

$full_name = $user['full_name'] ?? '';
$phone = $user['phone'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Now - Yellow Card</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color:rgb(207, 209, 105);
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: rgba(88, 2, 2, 0.94);
            padding: 10px 20px;
            color: white;
        }
        header h1 {
            margin: 0;
        }
        nav {
            display: flex;
            gap: 15px;
        }
        nav button, .logout-btn {
            background: white;
            color: #8B0000;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease, color 0.3s ease;
            
        }
        nav button:hover, .logout-btn:hover {
            background: yellow;
            color: #8B0000;
        }
        h2 {
            text-align: center;
            color: #8B0000;
        }
        label {
            font-weight: bold;
            margin-top: 15px;
            display: block;
        }
        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            background: #8B0000;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background: yellow;
            color:#8B0000 ;
        }
        
        footer {
            background-color: rgba(88, 2, 2, 0.94);
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<header>
        <h1 style="color: whitesmoke;">Yellow Card</h1>
        <nav>
            <button> <a href="dashboard.php" class="order-btn">Back to Dashboard</a></button>
       
    <!-- <button onclick="scrollToSection('about')">About</button>
    <button onclick="scrollToSection('services')">Services</button> -->
    
    <?php if (isset($_SESSION['email'])) : ?>
        <span class="black-text">Welcome, <?= htmlspecialchars($_SESSION['email']); ?></span>
        <a href="logout.php" onclick="event.preventDefault(); window.location.href='logout.php';" class="logout-btn" style="margin-left: 28px;">Logout</a>
    <?php else : ?>
        <span class="black-text">Guest Mode</span>
        <a href="login.php" class="logout-btn" style="margin-left: 28px;">Login</a>
    <?php endif; ?>
</nav>

    </header>
    <div class="container">
        <h2>Place Your Order</h2>
        <form action="process_order.php" method="POST">
            <!-- Customer Information -->
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" value="<?= htmlspecialchars($full_name); ?>" required readonly>

            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" value="<?= htmlspecialchars($email); ?>" required readonly>

            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" value="<?= htmlspecialchars($phone); ?>" required readonly>

            <label for="address">Delivery Address</label>
            <textarea id="address" name="address" rows="4" required></textarea>

            <!-- Order Details -->
            <label for="wine">Select Wine</label>
            <select id="wine" name="wine" required>
                <option value="Cabernet Sauvignon">Cabernet Sauvignon</option>
                <option value="Chardonnay">Chardonnay</option>
                <option value="Pinot Noir">Pinot Noir</option>
                <option value="Merlot">Merlot</option>
                <option value="Sauvignon Blanc">Sauvignon Blanc</option>
            </select>

            <label for="quantity">Quantity</label>
            <input type="number" id="quantity" name="quantity" min="1" required>

            <label for="instructions">Special Instructions (Optional)</label>
            <textarea id="instructions" name="instructions" rows="3"></textarea>

            <!-- Submit Button -->
            <button type="submit">Order Now</button>
        </form>
    </div>

    <footer>
        <p>&copy; 2023 Yellow Card. All rights reserved.</p>
    </footer>
</body>
</html>

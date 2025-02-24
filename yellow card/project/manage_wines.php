<?php
// filepath: /c:/xampp/htdocs/yellow card/project/manage_wine.php
include 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Wines - Yellow Card</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .wine-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin: 20px;
            padding: 20px;
            width: 300px;
            text-align: center;
        }
        .wine-card img {
            width: 100%;
            border-radius: 10px;
        }
        .wine-card h3 {
            color: #8B0000;
            margin: 10px 0;
        }
        .wine-card p {
            color: #555;
        }
        .wine-card .price {
            color: #8B0000;
            font-weight: bold;
            margin: 10px 0;
        }
        .wine-card button {
            background: #8B0000;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .wine-card button:hover {
            background: #5a0000;
        }
    </style>
</head>
<body>
    <?php
    $query = "SELECT * FROM wines";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='wine-card'>
                <img src='{$row['image_url']}' alt='{$row['name']}'>
                <h3>{$row['name']}</h3>
                <p>{$row['description']}</p>
                <p class='price'>\${$row['price']}</p>
                <button>Add to Cart</button>
              </div>";
    }
    ?>
</body>
</html>
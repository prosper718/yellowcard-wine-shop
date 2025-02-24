<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);
    $wine = htmlspecialchars($_POST['wine']);
    $quantity = (int)$_POST['quantity'];
    $instructions = htmlspecialchars($_POST['instructions']);

    // Calculate total price (Example: $20 per bottle)
    $price_per_bottle = 20;
    $total_price = $quantity * $price_per_bottle;

    // Styled HTML output
    echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        h2 {
            color: #8B0000;
            text-align: center;
            margin-bottom: 20px;
        }
        p {
            margin: 10px 0;
            line-height: 1.5;
        }
        .summary {
            padding: 15px;
            border-radius: 5px;
            background: #f4f4f4;
            border: 1px solid #ddd;
        }
        .highlight {
            font-weight: bold;
            color: #8B0000;
        }
        footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #888;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Thank You for Your Order, $name!</h2>
        <div class="summary">
            <p><span class="highlight">Wine:</span> $wine</p>
            <p><span class="highlight">Quantity:</span> $quantity</p>
            <p><span class="highlight">Total Price:</span> \$$total_price</p>
            <p><span class="highlight">Delivery Address:</span> $address</p>
        </div>
        <p>We have received your order and will contact you at <span class="highlight">$email</span> or <span class="highlight">$phone</span> if needed.</p>
        <p>Your special instructions:</p>
        <p><em>$instructions</em></p>
        <footer>
            &copy; 2025 Yellow Card - Best Wine Store
        </footer>
    </div>
</body>
</html>
HTML;
}
?>


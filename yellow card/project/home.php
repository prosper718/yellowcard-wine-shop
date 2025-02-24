<?php
require_once "validate.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yellow Card Registration Page</title>
    
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        body {
            background: url('slide3.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
        }
        .brand {
            background: #8B0000;
        }
        .brand-text {
            color: #8B0000;
        }
        form {
            max-width: 460px;
            margin: 20px auto;
            padding: 20px;
        }
    </style>
    <script>
        setTimeout(function() {
            document.getElementById('message').remove();
        }, 4000);
    </script>
</head>
<body class="grey lighten-2">
    <section class="container grey-text">
        <h3 class="center brand-text">Yellow Card Registration Page</h3>
        <?php if (isset($success)) : ?>
            <p id="message" class="center green-text"><b><?= $success ?></b></p>
        <?php endif; ?>
        <?php if (isset($error)) : ?>
            <p id="message" class="center red-text"><b><?= $error ?></b></p>
        <?php endif; ?>
        <form action="" class="white" method="POST">
            <!-- Name Input -->
            <label for="name">Fullname</label>
            <input type="text" name="name" value="<?= $name ?>" required>
            <div class="red-text"><?php echo $errors['name']; ?></div>

            <!-- Email Input -->
            <label for="email">Enter email:</label>
            <input type="text" name="email" value="<?= $email ?>" required>
            <div class="red-text"><?php echo $errors['email']; ?></div>

            <!-- Number Input -->
            <label for="number">Enter number</label>
            <input type="text" name="number" value="<?= $number ?>" required>
            <div class="red-text"><?php echo $errors['number']; ?></div>

            <!-- Password Input -->
            <label for="password">Enter password</label>
            <input type="password" name="password" value="" required>
            <div class="red-text"><?php echo $errors['password']; ?></div>

            <!-- Confirm Password Input -->
            <label for="confirm_password">Enter confirm password</label>
            <input type="password" name="confirm_password" value="" required>
            <div class="red-text"><?php echo $errors['confirm_password']; ?></div>

            <div class="center">
                <input type="submit" name="register" class="btn brand z-depth-0" value="Register">
            </div>
        </form>
        <div class="center">
            <p>Already have an account? <a href="login.php">Login</a></p>
        </div>
        <div class="center">
            <p>Are you an admin? <a href="admin_signup.php" class="btn brand z-depth-0">Admin Signup</a></p>
        </div>
        <div class="center">
            <p>Admin Login? <a href="admin_login.php" class="btn brand z-depth-0">Admin Login</a></p>
        </div>
    </section>  
    
    <footer class="section"> 
        <p class="center grey-text">Copyright 2024-<?= Date('Y'); ?></p>
    </footer>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
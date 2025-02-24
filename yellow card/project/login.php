<?php
require_once "db_connect.php";
require_once "login-process.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yellow Card Login Page</title>

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
            background: rgba(182, 32, 32, 0.69);
            /* Add slight transparency */
            border-radius: 10px;
        }

        .container {
            padding-top: 50px;
        }
    </style>
</head>

<body>
    <section class="container grey-text">
        <h3 class="center brand-text">YELLOW CARD LOGIN PAGE</h3>
        <p class="center red-text"><?= $errors['name_error'] ?></p>
        <?php if (isset($errors)) : ?>
            <p class="center red-text"> <?= $error ?></p>
        <?php endif; ?>
        <form action="" class="white" method="POST">

            <!-- EMAIL INPUT -->
            <label for="email">Enter email:</label>
            <input type="email" name="email" value="<?= $email ?>">
            <div class="red-text"><?php echo $errors['email']; ?></div>

            <!-- PASSWORD INPUT -->
            <label for="password">Enter password</label>
            <input type="password" name="password" value="">
            <div class="red-text"><?php echo $errors['password']; ?></div>

            <div class="center">
                <input type="submit" name="login" class="btn brand z-depth-0" value="Login">
            </div>
        </form>
        <div class="center">
            <p>Don't have an account? <a href="home.php">Sign Up</a></p>
        </div>
    </section>

    <footer class="section">
        <p class="center grey-text"> Copyright Semester 3 2024-<?= Date('Y'); ?> </p>
    </footer>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>
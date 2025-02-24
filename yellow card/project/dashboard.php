<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yellow Card - Best Wine Store</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color:rgba(133, 48, 48, 0.14);
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
            background: #8B0000;
            color: yellow;
        }
        .hero {
            position: relative;
            overflow: hidden;
            height: 90vh;
            background: url('./images/mybackground.webp') no-repeat center center/cover;
            width: 100%;
        }
        .carousel-container {
            max-width: 80%;
            margin: 50px auto;
            overflow: hidden;
            position: relative;
        }
        .carousel {
            display: flex;
            gap: 20px;
            transition: transform 0.1s linear;
        }
        .card {
            min-width: 300px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            overflow: hidden;
        }
        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .about-container {
            display: flex;
    justify-content: center;
    gap: 20px;
    padding: 0;
    list-style-type: none;
    flex-wrap: wrap;
    margin-bottom: 40px;
        }
        .about-card {
            background: white;
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            flex: 1;
        }
        h1{
            text-align: center;
            color: #8B0000;
        }
        .order-btn {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 15px;
            background: #8B0000;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .order-btn:hover {        
            background: yellow;
            color: #8B0000;
        }
        #services {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 50px 0;
}

.services-list {
    display: flex;
    justify-content: center;
    gap: 20px;
    padding: 0;
    list-style-type: none;
    flex-wrap: wrap;
    margin-bottom: 40px;
}

.services-list li {
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-align: center;
    font-size: 18px;
    font-weight: bold;
    color: #8B0000;
    min-width: 250px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.services-list li:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
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
    <button onclick="scrollToSection('home')">Home</button>
    <button onclick="scrollToSection('about')">About</button>
    <button onclick="scrollToSection('services')">Services</button>
    
    <?php if (isset($_SESSION['email'])) : ?>
        <span class="black-text">Welcome, <?= htmlspecialchars($_SESSION['email']); ?></span>
        <a href="logout.php" onclick="event.preventDefault(); window.location.href='logout.php';" class="logout-btn" style="margin-left: 28px;">Logout</a>
    <?php else : ?>
        <span class="black-text">Guest Mode</span>
        <a href="login.php" class="logout-btn" style="margin-left: 28px;">Login</a>
    <?php endif; ?>
</nav>

    </header>

    <div class="hero" id="home">
    <p style="font-size: 24px; font-weight: bold; color: white; text-align: center; margin-top: 260px;">
    Welcome to <span style="color: yellow;">Yellow Card</span> – where passion meets perfection in every bottle.  
    Discover a world of exquisite wines, handpicked from the finest vineyards to bring you an unforgettable experience.  
    Whether you're a connoisseur or a casual wine lover, we have the perfect selection waiting for you.  
    Sip, savor, and celebrate with us. 🍷  
    </div>

    <div class="carousel-container">
        <div class="carousel" id="carousel">
          
            <div class="card">
    <img src="./images/images (1).jpg" alt="Pinot Noir">
    <h3>Pinot Noir</h3>
    <?php if (isset($_SESSION['email'])) : ?>
        <a href="order.php" class="order-btn">Order</a>
    <?php else : ?>
        <a href="login.php" class="order-btn">Order</a>
    <?php endif; ?>
</div>
<div class="card">
    <img src="./images/bottle-of-sauvignon-blanc-and-glass-with-slices-of-cheese.jpg" alt="Pinot Noir">
    <h3>cabernet sauvignon</h3>
    <?php if (isset($_SESSION['email'])) : ?>
        <a href="order.php" class="order-btn">Order</a>
    <?php else : ?>
        <a href="login.php" class="order-btn">Order</a>
    <?php endif; ?>
</div>
<div class="card">
    <img src="./images/images (1).jpg" alt="Pinot Noir">
    <h3>merlot</h3>
    <?php if (isset($_SESSION['email'])) : ?>
        <a href="order.php" class="order-btn">Order</a>
    <?php else : ?>
        <a href="login.php" class="order-btn">Order</a>
    <?php endif; ?>
</div>
<div class="card">
    <img src="./images/bottle-of-sauvignon-blanc-and-glass-with-slices-of-cheese.jpg" alt="Pinot Noir">
    <h3>syrah/shiraz</h3>
    <?php if (isset($_SESSION['email'])) : ?>
        <a href="order.php" class="order-btn">Order</a>
    <?php else : ?>
        <a href="login.php" class="order-btn">Order</a>
    <?php endif; ?>
</div>
<div class="card">
    <img src="./images/images (1).jpg" alt="Pinot Noir">
    <h3>chardonnay</h3>
    <?php if (isset($_SESSION['email'])) : ?>
        <a href="order.php" class="order-btn">Order</a>
    <?php else : ?>
        <a href="login.php" class="order-btn">Order</a>
    <?php endif; ?>
</div>
<div class="card">
    <img src="./images/bottle-of-sauvignon-blanc-and-glass-with-slices-of-cheese.jpg" alt="Pinot Noir">
    <h3>sangiovese</h3>
    <?php if (isset($_SESSION['email'])) : ?>
        <a href="order.php" class="order-btn">Order</a>
    <?php else : ?>
        <a href="login.php" class="order-btn">Order</a>
    <?php endif; ?>
</div>
<div class="card">
    <img src="./images/images (1).jpg" alt="Pinot Noir">
    <h3>malbec</h3>
    <?php if (isset($_SESSION['email'])) : ?>
        <a href="order.php" class="order-btn">Order</a>
    <?php else : ?>
        <a href="login.php" class="order-btn">Order</a>
    <?php endif; ?>
</div>
<div class="card">
    <img src="./images/bottle-of-sauvignon-blanc-and-glass-with-slices-of-cheese.jpg" alt="Pinot Noir">
    <h3>Pinot grigio</h3>
    <?php if (isset($_SESSION['email'])) : ?>
        <a href="order.php" class="order-btn">Order</a>
    <?php else : ?>
        <a href="login.php" class="order-btn">Order</a>
    <?php endif; ?>
</div>
<div class="card">
    <img src="./images/images (1).jpg" alt="Pinot Noir">
    <h3>moscato</h3>
    <?php if (isset($_SESSION['email'])) : ?>
        <a href="order.php" class="order-btn">Order</a>
    <?php else : ?>
        <a href="login.php" class="order-btn">Order</a>
    <?php endif; ?>
</div>
<div class="card">
    <img src="./images/bottle-of-sauvignon-blanc-and-glass-with-slices-of-cheese.jpg" alt="Pinot Noir">
    <h3>riesling</h3>
    <?php if (isset($_SESSION['email'])) : ?>
        <a href="order.php" class="order-btn">Order</a>
    <?php else : ?>
        <a href="login.php" class="order-btn">Order</a>
    <?php endif; ?>
</div>
        </div>
    </div>
    <div><h1>ABOUT US</h1></div>
 <div class="about-container" id="about">
        <div class="abouts">
            <h3>Our Story</h3>
            <p>Welcome to Yellow Card, your go-to destination for the finest selection of wines...</p>
        </div>
        <div class="abouts">
            <h3>Our Passion</h3>
            <p>We are dedicated to sourcing the best wines from around the world...</p>
        </div>
        <div class="abouts">
            <h3>Our Promise</h3>
            <p>Providing quality and authenticity in every bottle we offer...</p>
        </div>
    </div>

    <div class="content" id="services">
        <h1 style="text-align: center; color:#8B0000;">Our Services</h1>
        <ul class="services-list">
            <li>Premium wine selection</li>
            <li>Customized wine recommendations</li>
            <li>Fast and reliable delivery</li>
        </ul>
    </div>

    <script>
        function scrollToSection(sectionId) {
            document.getElementById(sectionId).scrollIntoView({ behavior: 'smooth' });
        }

        const carousel = document.getElementById('carousel');
        function autoSlide() {
            carousel.style.transition = 'transform 0.5s linear';
            carousel.appendChild(carousel.firstElementChild);
        }
        setInterval(autoSlide, 2000);
    </script>
    <footer>
        <p>&copy; 2023 Yellow Card. All rights reserved.</p>
    </footer>
</body>
</html>

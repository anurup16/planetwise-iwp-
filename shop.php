<?php 
session_start();

include("connection.php");
include("functions.php");

// Check if the user is logged in
$user_data = check_login($con);

if (!$user_data) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    die;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop - Planetwise</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="header">
        <h1>Planetwise</h1>
        <div class="navbar">
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="courses.html">Courses</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="shop.php" class="active">Shop</a></li>
            </ul>
        </div>
    </div>

    <div class="content">
        <h2>Shop</h2>
        <p>Browse through our collection of used books on sustainability, environment, and related topics.</p>
        <div class="shop-container">
            <div class="shop-item">
                <img src="book1.jpg" alt="Book 1">
                <h3 class="item-title">"The Ecology of Commerce" by Paul Hawken</h3>
                <p>This book explores how business can be part of the solution to environmental problems.</p>
                <p class="item-price">Price: $15.00</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            <div class="shop-item">
                <img src="book2.jpg" alt="Book 2">
                <h3 class="item-title">"Silent Spring" by Rachel Carson</h3>
                <p>A groundbreaking book that brought environmental concerns to the forefront.</p>
                <p class="item-price">Price: $12.00</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            <div class="shop-item">
                <img src="book3.jpg" alt="Book 3">
                <h3 class="item-title">"Cradle to Cradle" by William McDonough & Michael Braungart</h3>
                <p>A manifesto for a new industrial revolution that focuses on sustainability and waste reduction.</p>
                <p class="item-price">Price: $18.00</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            <div class="shop-item">
                <img src="book4.jpg" alt="Book 4">
                <h3 class="item-title">"The Omnivore's Dilemma" by Michael Pollan</h3>
                <p>This book discusses the complexities of the modern food system and its impact on the environment.</p>
                <p class="item-price">Price: $20.00</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            <div class="shop-item">
                <img src="book5.jpg" alt="Book 5">
                <h3 class="item-title">"The Uninhabitable Earth: Life After Warming" by David Wallace-Wells</h3>
                <p>An exploration of the potential impacts of climate change and the urgency of taking action.</p>
                <p class="item-price">Price: $19.99</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            <div class="shop-item">
                <img src="book6.jpg" alt="Book 6">
                <h3 class="item-title">"Eaarth: Making a Life on a Tough New Planet" by Bill McKibben</h3>
                <p>This book discusses how climate change has altered our planet and suggests ways to adapt to the new realities.</p>
                <p class="item-price">Price: $22.00</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            <div class="shop-item">
                <img src="book7.jpg" alt="Book 7">
                <h3 class="item-title">"This Changes Everything: Capitalism vs. the Climate" by Naomi Klein</h3>
                <p>A critical look at how economic systems impact environmental issues and the need for systemic change.</p>
                <p class="item-price">Price: $20.99</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2024 Planetwise. All rights reserved.</p>
    </div>

    <a href="cart.html" class="floating-cart-button">
        <img src="cart_icon.jpg" alt="Cart" />
    </a>

    <script src="navbar.js"></script>
    <script src="shop.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uPVC Casement Doors | Premium Windows & Doors</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .product-hero {
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('../images/casement_doors.webp') center/cover no-repeat;
            color: #fff;
            padding: 6rem 0 4rem 0;
            text-align: center;
        }
        .product-hero h1 {
            font-size: 2.8rem;
            margin-bottom: 1rem;
        }
        .product-hero p {
            font-size: 1.3rem;
            max-width: 700px;
            margin: 0 auto;
        }
        .product-main {
            max-width: 1200px;
            margin: 3rem auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: flex-start;
            padding: 0 5%;
        }
        .product-gallery {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }
        .product-gallery img {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.08);
        }
        .product-details h2 {
            color: #2c3e50;
            margin-bottom: 1rem;
        }
        .product-details p {
            color: #555;
            margin-bottom: 1.5rem;
        }
        .features-list {
            list-style: none;
            margin-bottom: 2rem;
        }
        .features-list li {
            margin-bottom: 0.8rem;
            font-size: 1.05rem;
            color: #333;
        }
        .features-list li i {
            color: #3498db;
            margin-right: 0.7rem;
        }
        .cta-section {
            margin-top: 2rem;
        }
        .cta-section .cta-button {
            font-size: 1.1rem;
            padding: 0.9rem 2.2rem;
        }
        @media (max-width: 900px) {
            .product-main {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <?php include '../header.php'; ?>

    <!-- Product Hero Section -->
    <section class="product-hero">
        <h1>uPVC Casement Doors</h1>
        <p>Elegant, energy-efficient, and secure. Our uPVC Casement Doors are designed to enhance the beauty and safety of your home or office, offering smooth operation and superior insulation.</p>
    </section>

    <!-- Product Main Section -->
    <section class="product-main">
        <div class="product-gallery">
            <img src="../images/casement_doors.webp" alt="uPVC Casement Door - Main View">

        </div>
        <div class="product-details">
            <h2>Product Overview</h2>
            <p>uPVC Casement Doors are the perfect blend of style and functionality. With robust frames, multi-point locking, and weather-resistant seals, these doors provide excellent security and insulation. Ideal for balconies, patios, and main entrances, they are available in a variety of finishes and colors to match your décor.</p>
            <ul class="features-list">
                <li><i class="fas fa-check-circle"></i> Superior thermal and sound insulation</li>
                <li><i class="fas fa-check-circle"></i> Multi-point locking system for enhanced security</li>
                <li><i class="fas fa-check-circle"></i> Weather and UV resistant</li>
                <li><i class="fas fa-check-circle"></i> Low maintenance and easy to clean</li>
                <li><i class="fas fa-check-circle"></i> Customizable sizes and finishes</li>
                <li><i class="fas fa-check-circle"></i> Smooth and silent operation</li>
            </ul>
            <div class="cta-section">
                <a href="../contact.php" class="cta-button">Request a Quote</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>Contact Us</h3>
                <p><i class="fas fa-phone"></i> +1 234 567 890</p>
                <p><i class="fas fa-envelope"></i> info@premiumwindows.com</p>
                <p><i class="fas fa-location-dot"></i> 123 Business Street, City</p>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="../products.php">Products</a></li>
                    <li><a href="../about.php">About Us</a></li>
                    <li><a href="../contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Follow Us</h3>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Premium Windows & Doors. All rights reserved.</p>
        </div>
    </footer>

    <script src="../js/main.js"></script>
</body>
</html> 
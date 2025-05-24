<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uPVC Corner Windows | Premium Windows & Doors</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .product-hero {
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('../images/upvc-casement-door.jpg') center/cover no-repeat;
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
        <h1>uPVC Corner Windows</h1>
        <p>Create stunning corner views with our uPVC Corner Windows, maximizing natural light and panoramic perspectives.</p>
    </section>

    <!-- Product Main Section -->
    <section class="product-main">
        <div class="product-gallery">
            <img src="../images/upvc-corner-window-1.jpg" alt="uPVC Corner Window - Exterior View">
            <img src="../images/upvc-corner-window-2.jpg" alt="uPVC Corner Window - Interior View">
            <img src="../images/upvc-corner-window-3.jpg" alt="uPVC Corner Window - Closeup">
        </div>
        <div class="product-details">
            <h2>Product Overview</h2>
            <p>Our uPVC Corner Windows create a dramatic architectural feature that maximizes natural light and views from two directions. These innovative windows are designed to fit perfectly into corner spaces, creating a seamless transition between walls while providing panoramic views. Perfect for modern homes and commercial spaces, they combine aesthetic appeal with superior thermal performance and weather resistance.</p>
            <ul class="features-list">
                <li><i class="fas fa-check-circle"></i> Panoramic corner views</li>
                <li><i class="fas fa-check-circle"></i> Maximum natural light</li>
                <li><i class="fas fa-check-circle"></i> Superior thermal insulation</li>
                <li><i class="fas fa-check-circle"></i> Seamless corner design</li>
                <li><i class="fas fa-check-circle"></i> Weather and UV resistant</li>
                <li><i class="fas fa-check-circle"></i> Available in various configurations</li>
            </ul>
            <div class="cta-section">
                <a href="../contact.php" class="cta-button">Request a Quote</a>
            </div>
        </div>
    </section>

    <?php include '../footer.php'; ?>

    <script src="../js/main.js"></script>
</body>
</html> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Premium UPVC Doors & Windows</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .contact-section {
            padding: 8rem 5% 5rem;
            background-color: #f9f9f9;
        }

        .contact-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            max-width: 1000px;
            margin: 0 auto;
        }

        .contact-info {
            background: #fff;
            padding: 2.5rem;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }

        .contact-info h2 {
            color: #1a1a1a;
            margin-bottom: 1.5rem;
            font-size: 1.8rem;
            font-weight: 600;
        }

        .contact-details {
            margin-bottom: 2rem;
        }

        .contact-details p {
            margin-bottom: 1.2rem;
            display: flex;
            align-items: center;
            color: #444;
            font-size: 1.05rem;
        }

        .contact-details i {
            color: #2563eb;
            margin-right: 1rem;
            font-size: 1.3rem;
            width: 25px;
        }

        .social-links {
            margin-top: 2.5rem;
        }

        .social-links a {
            display: inline-block;
            margin-right: 1.2rem;
            color: #2563eb;
            font-size: 1.6rem;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            color: #1d4ed8;
            transform: translateY(-2px);
        }

        .contact-form {
            background: #fff;
            padding: 2.5rem;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }

        .contact-form h2 {
            color: #1a1a1a;
            margin-bottom: 1.8rem;
            font-size: 1.8rem;
            font-weight: 600;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.6rem;
            color: #444;
            font-weight: 500;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 0.9rem;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
            outline: none;
        }

        .form-group textarea {
            height: 150px;
            resize: vertical;
        }

        .submit-btn {
            background-color: #2563eb;
            color: #fff;
            padding: 1rem 2rem;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1.05rem;
            font-weight: 500;
            transition: all 0.3s ease;
            width: 100%;
        }

        .submit-btn:hover {
            background-color: #1d4ed8;
            transform: translateY(-1px);
        }

        .map-section {
            margin-top: 5rem;
            height: 450px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }

        .map-section iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        @media (max-width: 768px) {
            .contact-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="contact-container">
            <div class="contact-info">
                <h2>Get in Touch</h2>
                <div class="contact-details">
                    <p><i class="fas fa-phone"></i> +91 9937714243</p>
                    <p><i class="fas fa-envelope"></i> mgupvcwindows@gmail.com</p>
                    <p><i class="fas fa-location-dot"></i> Main Road, Semiliguda, Koraput, Odisha - 764036</p>
                    <p><i class="fas fa-clock"></i> Mon - Sat: 9:00 AM - 6:00 PM</p>
                </div>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>

            <div class="contact-form">
                <h2>Send us a Message</h2>
                <form id="contact-form" action="process_contact.php" method="POST">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="product">Product Interest</label>
                        <select id="product" name="product" required>
                            <option value="">Select a product</option>
                            <option value="upvc-doors">UPVC Doors</option>
                            <option value="upvc-windows">UPVC Windows</option>
                            <option value="aluminum">Aluminum Products</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>
                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
            </div>
        </div>

        <div class="map-section">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15211.123456789012!2d82.7890123456789!3d18.7890123456789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a3b3b3b3b3b3b3b%3A0x3b3b3b3b3b3b3b3b!2sSemiliguda%2C%20Odisha!5e0!3m2!1sen!2sin!4v1645564750981!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>

    <?php include 'footer.php'; ?>
    <script src="js/main.js"></script>
</body>
</html> 
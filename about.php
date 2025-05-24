<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Premium UPVC Doors & Windows</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .about-section {
            padding: 8rem 5% 5rem;
            background: linear-gradient(to bottom, #f8f9fa, #ffffff);
        }

        .about-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .about-header {
            text-align: center;
            margin-bottom: 6rem;
            position: relative;
        }

        .about-header::after {
            content: '';
            position: absolute;
            bottom: -20px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: #3498db;
            border-radius: 2px;
        }

        .about-header h1 {
            color: #2c3e50;
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            font-weight: 700;
            letter-spacing: -0.5px;
        }

        .about-header p {
            color: #666;
            font-size: 1.3rem;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .about-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 3rem;
            margin-bottom: 6rem;
        }

        .about-card {
            background: #fff;
            padding: 3rem 2rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .about-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }

        .about-card i {
            font-size: 3.5rem;
            color: #3498db;
            margin-bottom: 2rem;
            background: linear-gradient(45deg, #3498db, #2980b9);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .about-card h3 {
            color: #2c3e50;
            margin-bottom: 1.5rem;
            font-size: 1.8rem;
            font-weight: 600;
        }

        .about-card p {
            color: #666;
            line-height: 1.7;
            font-size: 1.1rem;
        }

        .story-section {
            background-color: #f8f9fa;
            padding: 8rem 5%;
            margin-bottom: 6rem;
            position: relative;
        }

        .story-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 5rem;
            align-items: center;
        }

        .story-content h2 {
            color: #2c3e50;
            margin-bottom: 2rem;
            font-size: 2.8rem;
            font-weight: 700;
            position: relative;
            padding-bottom: 1rem;
        }

        .story-content h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 4px;
            background: #3498db;
            border-radius: 2px;
        }

        .story-content p {
            color: #666;
            margin-bottom: 1.5rem;
            line-height: 1.8;
            font-size: 1.1rem;
        }

        .story-image {
            position: relative;
        }

        .story-image img {
            width: 100%;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .story-image:hover img {
            transform: scale(1.02);
        }

        .team-section {
            padding: 8rem 5%;
            background: #fff;
        }

        .team-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .team-header {
            text-align: center;
            margin-bottom: 5rem;
        }

        .team-header h2 {
            color: #2c3e50;
            margin-bottom: 1.5rem;
            font-size: 2.8rem;
            font-weight: 700;
            position: relative;
            display: inline-block;
        }

        .team-header h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: #3498db;
            border-radius: 2px;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 4rem;
            justify-items: center;
        }

        .team-member {
            text-align: center;
            position: relative;
        }

        .team-member img {
            width: 280px;
            height: 280px;
            border-radius: 50%;
            margin-bottom: 2rem;
            object-fit: cover;
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            border: 5px solid #fff;
        }

        .team-member:hover img {
            transform: scale(1.05);
        }

        .team-member h3 {
            color: #2c3e50;
            margin-bottom: 0.8rem;
            font-size: 1.8rem;
            font-weight: 600;
        }

        .team-member p {
            color: #3498db;
            font-size: 1.2rem;
            font-weight: 500;
        }

        .cta-section {
            background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url('images/cta-bg.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            padding: 8rem 5%;
            text-align: center;
            color: #fff;
            position: relative;
        }

        .cta-content {
            max-width: 600px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }

        .cta-content h2 {
            margin-bottom: 1.5rem;
            font-size: 3rem;
            font-weight: 700;
        }

        .cta-content p {
            margin-bottom: 3rem;
            font-size: 1.3rem;
            line-height: 1.6;
            opacity: 0.9;
        }

        .cta-button {
            display: inline-block;
            padding: 1.2rem 3rem;
            background: linear-gradient(45deg, #3498db, #2980b9);
            color: #fff;
            text-decoration: none;
            border-radius: 50px;
            font-size: 1.2rem;
            font-weight: 600;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }

        @media (max-width: 768px) {
            .story-container {
                grid-template-columns: 1fr;
                gap: 3rem;
            }

            .team-grid {
                grid-template-columns: 1fr;
            }

            .about-header h1 {
                font-size: 2.5rem;
            }

            .story-content h2,
            .team-header h2 {
                font-size: 2.2rem;
            }
        }

        .testimonials-section {
            background: #f8f9fa;
            padding: 7rem 5% 7rem 5%;
        }
        .testimonials-container {
            max-width: 900px;
            margin: 0 auto;
            text-align: center;
        }
        .testimonials-container h2 {
            color: #2c3e50;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 3rem;
            position: relative;
            display: inline-block;
        }
        .testimonials-container h2::after {
            content: '';
            display: block;
            margin: 0.5rem auto 0 auto;
            width: 60px;
            height: 4px;
            background: #3498db;
            border-radius: 2px;
        }
        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2.5rem;
        }
        .testimonial-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 6px 24px rgba(0,0,0,0.07);
            padding: 2.5rem 2rem;
            font-size: 1.15rem;
            color: #444;
            position: relative;
            transition: box-shadow 0.3s;
        }
        .testimonial-card:hover {
            box-shadow: 0 12px 32px rgba(52,152,219,0.13);
        }
        .testimonial-card p {
            font-style: italic;
            margin-bottom: 1.5rem;
        }
        .testimonial-card h4 {
            color: #3498db;
            font-size: 1.1rem;
            font-weight: 600;
            margin: 0;
        }
        @media (max-width: 768px) {
            .testimonials-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <!-- About Section -->
    <section class="about-section">
        <div class="about-container">
            <div class="about-header">
                <h1>About Premium Windows & Doors</h1>
                <p>Your trusted partner for premium UPVC and aluminum solutions since 2010</p>
            </div>

            <div class="about-grid">
                <div class="about-card">
                    <i class="fas fa-medal"></i>
                    <h3>Quality First</h3>
                    <p>We never compromise on quality. Every product meets the highest industry standards.</p>
                </div>
                <div class="about-card">
                    <i class="fas fa-users"></i>
                    <h3>Expert Team</h3>
                    <p>Our experienced team ensures professional installation and excellent service.</p>
                </div>
                <div class="about-card">
                    <i class="fas fa-handshake"></i>
                    <h3>Customer Satisfaction</h3>
                    <p>Your satisfaction is our priority. We go above and beyond to meet your needs.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Story Section -->
    <section class="story-section">
        <div class="story-container">
            <div class="story-content">
                <h2>Our Story</h2>
                <p>Founded in 2010, Premium Windows & Doors has grown from a small local business to a leading provider of UPVC and aluminum solutions. Our journey has been driven by a commitment to quality, innovation, and customer satisfaction.</p>
                <p>Over the years, we've helped thousands of homeowners and businesses transform their spaces with our premium products. Our success is built on trust, expertise, and a dedication to excellence in every project we undertake.</p>
            </div>
            <div class="story-image">
                <img src="images/about-1.webp" alt="Our Story">
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="team-container">
            <div class="team-header">
                <h2>Meet Our Team</h2>
                <p>Experienced professionals dedicated to serving you</p>
            </div>
            <div class="team-grid">
                <div class="team-member">
                    <img src="images/bulumistry.jpg" alt="Team Member">
                    <h3>Bulu Mistry</h3>
                    <p>Founder & CEO</p>
                </div>
                <div class="team-member">
                    <img src="images/sanjaymistry.jpg" alt="Team Member">
                    <h3>Sanjay Mistry</h3>
                    <p>Co-Founder</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="testimonials-container">
            <h2>What Our Clients Say</h2>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <p>"Premium Windows & Doors transformed our home. The quality and service were outstanding!"</p>
                    <h4>- Priya S.</h4>
                </div>
                <div class="testimonial-card">
                    <p>"Professional team, timely installation, and great after-sales support. Highly recommended!"</p>
                    <h4>- Rajesh K.</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="cta-content">
            <h2>Ready to Transform Your Space?</h2>
            <p>Contact us today for a free consultation and quote</p>
            <a href="contact.php" class="cta-button">Get in Touch</a>
        </div>
    </section>

    <?php include 'footer.php'; ?>
    <script src="js/main.js"></script>
</body>
</html> 
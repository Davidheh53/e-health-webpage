<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-Health Application - Home</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <main class="container">
        <!-- Hero Section -->
        <section class="hero">
            <h1>Welcome to the e-Health Application</h1>
            <p>Your health is our priority. Explore our services and features.</p>
            <a href="/appointment" class="btn">Book an Appointment</a>
            <a href="/services" class="btn">Our Services</a>
        </section>

        <!-- Features Section -->
        <section>
            <h2>Features</h2>
            <ul>
                <li>Manage your health records</li>
                <li>Book appointments with healthcare providers</li>
                <li>Access health resources and information</li>
            </ul>
        </section>

        <!-- About Us Section -->
        <section>
            <h2>About Us</h2>
            <p>We are dedicated to providing accessible and quality healthcare services to everyone. Our mission is to be the leading provider of innovative and comprehensive healthcare solutions.</p>
        </section>

        <!-- Services Section -->
        <section>
            <h2>Services</h2>
            <ul>
                <li>General Consultation</li>
                <li>Specialist Consultation</li>
                <li>Diagnostic Services</li>
                <li>Emergency Care</li>
            </ul>
        </section>

        <!-- Testimonials Section -->
        <section>
            <h2>Testimonials</h2>
            <blockquote>
                <p>"e-Health Application has transformed the way I manage my health. Their services are top-notch!" - Sarah Johnson</p>
            </blockquote>
            <blockquote>
                <p>"The team at e-Health Application is incredibly professional and caring. Highly recommend!" - Mark Wilson</p>
            </blockquote>
        </section>

        <!-- Contact Information Section -->
        <section>
            <h2>Contact Information</h2>
            <p>If you have any questions or need further information, please contact us:</p>
            <address>
                <strong>e-Health Application</strong><br>
                123 Health St.<br>
                Wellness City, HC 12345<br>
                Email: <a href="mailto:info@ehealthapp.com">info@ehealthapp.com</a><br>
                Phone: (123) 456-7890
            </address>
        </section>

        <!-- Newsletter Subscription Section -->
        <section>
            <h2>Subscribe to Our Newsletter</h2>
            <p>Stay updated with the latest news and updates from e-Health Application.</p>
            <form action="subscribe_newsletter.php" method="post">
                <div class="form-group">
                    <label for="newsletterEmail">Email:</label>
                    <input type="email" id="newsletterEmail" name="newsletterEmail" required>
                </div>
                <button type="submit" class="btn">Subscribe</button>
            </form>
        </section>

        <!-- FAQ Section -->
        <section>
            <h2>Frequently Asked Questions (FAQ)</h2>
            <div class="faq">
                <h3>How do I book an appointment?</h3>
                <p>You can book an appointment by clicking on the "Book an Appointment" button and filling out the form.</p>
                <h3>What services do you offer?</h3>
                <p>We offer a range of services including general consultation, specialist consultation, diagnostic services, and emergency care.</p>
                <h3>How can I contact you?</h3>
                <p>You can contact us via email at <a href="mailto:info@ehealthapp.com">info@ehealthapp.com</a> or call us at (123) 456-7890.</p>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <!-- Link to JavaScript file -->
    <script src="/js/scripts.js"></script>
</body>
</html>
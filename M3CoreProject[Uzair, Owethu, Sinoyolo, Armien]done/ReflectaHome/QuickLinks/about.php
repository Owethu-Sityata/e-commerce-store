<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReflectaHome - About Us</title>
    <link rel="stylesheet" href="/ReflectaHome/Styles/style.css"> 

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- Go Back Link and Home Button -->
    <div class="container mt-4 d-flex justify-content-between">
        <!-- Go Back Link -->
        <a href="javascript:history.back()" class="btn btn-light"><i class="fas fa-arrow-left"></i> Go Back</a>
        
        <!-- Home Button (works as Go Back) -->
        <button id="homeButton" class="btn btn-light" onclick="goBack()">
            <i class="fas fa-home"></i> Home
        </button>
    </div>

    <!-- About Us Section -->
    <section class="about-us-section">
        <div class="container mt-5">
            <h2 class="text-center mb-4">About Us</h2>
            <p>At ReflectaHome, we are passionate about transforming your home with our elegant and stylish mirrors. We offer a wide selection of mirrors designed to complement any home decor, making it easier for you to create the space of your dreams. Our mission is to provide our customers with top-quality products that enhance their living spaces.</p>

            <h3>Our Vision</h3>
            <p>We envision a world where every home is enhanced by the beauty and functionality of our mirrors. ReflectaHome strives to be the leading provider of premium mirrors, delivering excellence, innovation, and style.</p>

            <h3>Our Values</h3>
            <ul>
                <li>Quality: We deliver only the best products to our customers.</li>
                <li>Customer Satisfaction: Our customers' happiness is our priority.</li>
                <li>Innovation: We are constantly evolving to meet modern design trends.</li>
            </ul>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-left">
                <h3>ReflectaHome</h3>
                <p>Transform your space with our beautiful mirrors.</p><br><br>
            </div>

            <div class="footer-center">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="/ReflectaHome/QuickLinks/about.php">About Us</a></li>
                    <li><a href="/ReflectaHome/QuickLinks/Report abuse.php">Report abuse</a></li>
                    <li><a href="/ReflectaHome/QuickLinks/Return Policy.php">Return Policy</a></li>
                    <li><a href="/ReflectaHome/QuickLinks/Shipping & Payment.php">Shipping & Payment Info</a></li>
                </ul>
            </div>

            <div class="footer-right">
                <h4>Follow Us</h4>
                <div class="social-links">
                    <a href="#" class="social-icon"><i class="fab fa-facebook"></i> Facebook</a>
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i> Instagram</a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 ReflectaHome. All rights reserved.</p>
        </div>
    </footer>
    
    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JavaScript for Go Back -->
    <script>
        // Function to simulate going back to the previous page
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>

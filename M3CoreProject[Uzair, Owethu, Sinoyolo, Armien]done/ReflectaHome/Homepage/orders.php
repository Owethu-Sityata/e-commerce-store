<?php
//Database connection file
include_once 'db-inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReflectaHome - Orders</title>
    <link rel="stylesheet" href="/ReflectaHome/Styles/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.html">
                <img src="/ReflectaHome/Images/logo-no-background.png" alt="ReflectaHome Logo" style="height: 40px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home.php#products"><i class="fas fa-store"></i> Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="orders.php"><i class="fas fa-truck"></i> Orders</a>
                    </li>
                   <!-- Combined Sign Up/Sign In Link -->
                    <li class="nav-item">
                         <a class="nav-link" href="signup-in.php"><i class="fas fa-user"></i> Sign Up / Sign In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> Cart <span id="cart-count"></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Sign In Section -->
    <section class="orders-section">
        <div class="container">
            <div class="alert alert-info text-center mt-5" role="alert">
                <h2>Join us or sign in</h2>
                <p>Track your orders, checkout faster, and sync your favorites. Just enter your email and we’ll send you a special link that will sign you in instantly. An account will be automatically created for you if you don’t have one yet.</p>
                <div class="mb-3">
                    <label for="email" class="form-label">Your email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Please enter a valid email" required>
                </div>
                <button type="button" class="btn btn-primary" onclick="sendSignInLink()">Get Sign-In Link</button>
                <!-- Sign-In Link Message -->
                <div id="signInMessage" class="mt-4" style="display:none;">
                    <h4>Check your inbox!</h4>
                    <p>We’ve sent you a sign-in link to your email address. The link can only be used once and will expire in 14 days.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Section -->
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
    <!-- External JavaScript file -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Simulating sending the sign-in link
        function sendSignInLink() {
            const email = document.getElementById("email").value;
            if (email) {
                // Simulate sending an email with a link
                // Show the message that the link has been sent
                document.getElementById("signInMessage").style.display = "block";
                // You can also generate a mock sign-in URL like so (for demo purposes):
                let signInLink = "https://reflectahome.co/account?key=" + Math.random().toString(36).substring(2);
                console.log("Generated sign-in link for: ", email, "Link:", signInLink);
            } else {
                alert("Please enter a valid email address.");
            }
        }
    </script>
</body>
</html>
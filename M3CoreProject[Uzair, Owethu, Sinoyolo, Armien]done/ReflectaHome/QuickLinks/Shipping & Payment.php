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

    <!-- Contact Us Section -->
    <section class="shipping-section">
        <div class="container">
            <h2 class="text-center mb-4">Shipping & Payment Information</h2>
            <p>We want to ensure that your shopping experience at ReflectaHome is as smooth and seamless as possible. Here are the important details regarding our shipping and payment policies:</p>
    
            <h3>1. Shipping Information</h3>
            <p>Once your order is placed, we will process it within 24-48 hours (excluding weekends and holidays). After processing, your order will be shipped via one of our trusted delivery partners. You will receive a tracking number to monitor your order’s progress. Our shipping methods include standard, express, and expedited delivery options depending on your location.</p>
    
            <h3>2. Delivery Times & Costs</h3>
            <p>Delivery times vary depending on your location and the courier service you select. Standard shipping typically takes 3-5 business days, while express options may take 1-2 business days. Shipping costs are calculated at checkout based on the weight of your order and the destination. We offer free standard shipping on orders over a certain value (see our shipping policy for specific details).</p>
    
            <h3>3. Payment Methods</h3>
            <p>We offer a variety of secure payment methods for your convenience, including major credit/debit cards (Visa, MasterCard, American Express), PayPal, and bank transfers. All payments are processed securely using the latest encryption technology to protect your personal and financial information.</p>
    
            <h3>4. Payment Security</h3>
            <p>ReflectaHome takes the security of your payment details very seriously. We employ the most advanced security protocols to ensure that your payment information is always safe during the transaction process. Our payment partners are PCI compliant, ensuring that your details are processed securely.</p>
    
            <h3>5. Order Tracking</h3>
            <p>Once your order is shipped, you will receive a tracking number via email. You can use this tracking number to monitor your shipment's progress through the respective courier's tracking page.</p>
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
                <li><a href="/ReflectaHome/QuickLinks/about.html">About Us</a></li>
                <li><a href="/ReflectaHome/QuickLinks/Report abuse.html">Report abuse</a></li>
                <li><a href="/ReflectaHome/QuickLinks/Return Policy.html">Return Policy</a></li>
                <li><a href="/ReflectaHome/QuickLinks/Shipping & Payment.html">Shipping & Payment Info</a></li>
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

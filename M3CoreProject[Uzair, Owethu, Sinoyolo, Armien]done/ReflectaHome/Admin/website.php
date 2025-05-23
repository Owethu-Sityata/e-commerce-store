<?php
//Database connection file
include_once 'db-inc.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReflectaHome Product</title>
    <link rel="stylesheet" href="/ReflectaHome/Admin/style/styles.css"> <!-- Link to the external CSS stylesheet -->
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
     <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    /* Additional styles for admin form */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
        background-color: #f4f4f9;
    }
    .container {
        max-width: 800px;
        margin: auto;
        padding: 20px;
        background-color: white;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    h1 {
        text-align: center;
        color: #333;
    }
    .form-group {
        margin-bottom: 20px;
    }
    label {
        font-size: 16px;
        font-weight: bold;
        color: #333;
    }
    textarea {
        width: 100%;
        height: 150px;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    button {
        padding: 10px 20px;
        font-size: 16px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    button:hover {
        background-color: #45a049;
    }
</style>
<body>
 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.html">
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
                    <a class="nav-link" href="Users.php"><i class="fas fa-users"></i> Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="products.php"><i class="fas fa-tag"></i> Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="orders.php"><i class="fas fa-truck"></i> Orders</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="website.php"><i class="fas fa-globe"></i> website</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/ReflectaHome/Homepage/home.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- Manage Section Indicator -->
<div class="container mt-3">
    <div class="alert alert-info text-center" role="alert">
        <strong>You are currently managing the website!</strong>
    </div>
</div>

<!-- Product Management Content -->


    <div class="container">
        <h1>Manage Website Content</h1>
        
        <form id="updateForm">
            <div class="form-group">
                <label for="about">About Us Page:</label>
                <textarea id="about" name="about" placeholder="Edit the content for About Us..."></textarea>
            </div>

            <div class="form-group">
                <label for="report">Report Page:</label>
                <textarea id="report" name="report" placeholder="Edit the content for Report..."></textarea>
            </div>

            <div class="form-group">
                <label for="shipping">Shipping Page:</label>
                <textarea id="shipping" name="shipping" placeholder="Edit the content for Shipping..."></textarea>
            </div>

            <div class="form-group">
                <label for="returnPolicy">Return Policy Page:</label>
                <textarea id="returnPolicy" name="returnPolicy" placeholder="Edit the content for Return Policy..."></textarea>
            </div>

            <button type="submit">Save Changes</button>
        </form>
    </div>

    

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

<script>
    // JavaScript to handle the form submission and simulate saving data

    document.getElementById('updateForm').addEventListener('submit', function(event) {
        event.preventDefault();
        
        // Get the updated content from the form
        const aboutContent = document.getElementById('about').value;
        const reportContent = document.getElementById('report').value;
        const shippingContent = document.getElementById('shipping').value;
        const returnPolicyContent = document.getElementById('returnPolicy').value;

        // You can save this content to a server or database in a real-world application
        console.log("Updated About Us:", aboutContent);
        console.log("Updated Report:", reportContent);
        console.log("Updated Shipping:", shippingContent);
        console.log("Updated Return Policy:", returnPolicyContent);

        // For now, just display a success message
        alert("Content has been successfully updated!");
    });
</script>

</body>
</html>

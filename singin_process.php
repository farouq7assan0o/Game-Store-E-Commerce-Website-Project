<?php
// Handle POST request for sign-in
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection code...
    // Process the form data and sign in the user
}

// HTML for the sign-in form
?>
<!DOCTYPE html>
<html lang="en">
<header>
        <div class="topnav" id="myTopnav">
            <a href="index.html" class="logo"><img src="yeyo-publimas-logo.webp" alt="Logo" style="height:50px;"></a>
            <a href="index.html" class="active">Home</a>
            <a href="aboutus.html">About Us</a>
            <a href="products.html">Products</a>
            <a href="cart.html">Checkout</a>
            <a href="signin.html" class="right">Login/Sign Up</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </header>
<body>
    <div class="signin-form">
        <h2>Sign In</h2>
        <form action="signin.php" method="post">
            <!-- Form fields -->
            <button type="submit">Sign In</button>
        </form>
        <p>Don't have an account? <a href="signup.php">Sign up</a></p>
    </div>
</body>
</html>


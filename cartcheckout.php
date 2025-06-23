<?php
session_start();

// Assume user's information is stored in session after they log in
$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
$adress = isset($_SESSION['adress']) ? $_SESSION['adress'] : '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Game Store</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <!-- Your site's navigation -->
    </header>

    <main>
        <form action="order_confirmation.php" method="post">
            <h2>Checkout</h2>
            
            <h3>Shipping Information:</h3>
            <form action="submit_signup.php" method="post">
                <input type="text" name="username" placeholder="Username" value="<?php echo htmlspecialchars($username); ?>" required>
                <input type="email" name="email" placeholder="Email" value="<?php echo htmlspecialchars($email); ?>" required>
            <input type="text" name="adress" placeholder="adress" value="<?php echo htmlspecialchars($adress); ?>" required>
            <input type="tel" name="phonenumber" placeholder="Phone Number" value="<?php echo htmlspecialchars($phonenumber); ?>" required>

            <!-- Simulated Payment Information -->
            <h3>Payment Information:</h3>
            <p>Payment processing is simulated. No actual payment will be taken.</p>

            <button type="submit">Confirm Order</button>
        </form>
    </main>

    <footer>
    <p>copyright&reg;© 2024 Game Store. All rights reserved.</p>
</footer>


<script src="cart.js"></script>
<script src="script.js"></script>

</body>
</html>

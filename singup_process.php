<?php
// Database connection code...

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

    // SQL to insert new user
    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";

    // Prepare and bind
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $password);
    
    if ($stmt->execute()) {
        echo "User registered successfully";
        // Redirect to login page or other actions...
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}
// $conn->close();
?>
